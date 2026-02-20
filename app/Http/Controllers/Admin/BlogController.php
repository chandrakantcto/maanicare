<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Admin as AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(BlogDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.blogs.index', compact('dataTableId'));
    }

    public function create()
    {
        $categories = BlogCategory::where('status', 'Active')->orderBy('name')->get();
        $authors = AdminModel::where('status', 'Active')->orderBy('name')->get();
        return view('admin.blogs.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_id'           => ['nullable', 'integer', 'min:0'],
            'category_id'        => ['nullable', 'integer', 'min:0'],
            'title'              => ['required', 'string', 'max:255'],
            'excerpt'            => ['nullable', 'string'],
            'content'            => ['required', 'string'],
            'thumbnail'          => ['nullable', 'image'],
            'featured_image'     => ['nullable', 'image'],
            'published_at'       => ['nullable', 'date'],
            'featured'           => ['nullable', 'in:0,1'],
            'reading_time_minutes' => ['nullable', 'integer', 'min:0'],
            'tags'               => ['nullable', 'string', 'max:500'],
            'meta_title'         => ['nullable', 'string', 'max:255'],
            'meta_description'   => ['nullable', 'string'],
            'meta_keywords'      => ['nullable', 'string', 'max:255'],
            'canonical_url'      => ['nullable', 'string', 'max:500'],
            'status'             => ['required', Rule::in(['Active', 'InActive'])],
        ]);

        $validated['author_id'] = (int) ($validated['author_id'] ?? 0) ?: auth('admin')->id();
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0);
        $validated['parent_id'] = 0;
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']));
        $validated['featured'] = (int) ($validated['featured'] ?? 0);
        $validated['tags'] = $this->parseTags($validated['tags'] ?? '');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $this->storeBlogFile($request->file('thumbnail'));
        }
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $this->storeBlogFile($request->file('featured_image'));
        }

        Blog::create($validated);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    public function show(Blog $blog)
    {
        $blog->load(['author', 'category']);
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::where('status', 'Active')->orderBy('name')->get();
        $authors = AdminModel::where('status', 'Active')->orderBy('name')->get();
        return view('admin.blogs.edit', compact('blog', 'categories', 'authors'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'author_id'           => ['nullable', 'integer', 'min:0'],
            'category_id'        => ['nullable', 'integer', 'min:0'],
            'title'               => ['required', 'string', 'max:255'],
            'excerpt'             => ['nullable', 'string'],
            'content'             => ['required', 'string'],
            'thumbnail'           => ['nullable', 'image'],
            'featured_image'      => ['nullable', 'image'],
            'published_at'        => ['nullable', 'date'],
            'featured'            => ['nullable', 'in:0,1'],
            'reading_time_minutes' => ['nullable', 'integer', 'min:0'],
            'tags'                => ['nullable', 'string', 'max:500'],
            'meta_title'          => ['nullable', 'string', 'max:255'],
            'meta_description'    => ['nullable', 'string'],
            'meta_keywords'       => ['nullable', 'string', 'max:255'],
            'canonical_url'       => ['nullable', 'string', 'max:500'],
            'status'              => ['required', Rule::in(['Active', 'InActive'])],
        ]);

        $validated['author_id'] = (int) ($validated['author_id'] ?? 0) ?: auth('admin')->id();
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0);
        $validated['featured'] = (int) ($validated['featured'] ?? 0);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']), $blog->id);
        $validated['tags'] = $this->parseTags($validated['tags'] ?? '');

        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail) {
                $this->deleteBlogFile($blog->thumbnail);
            }
            $validated['thumbnail'] = $this->storeBlogFile($request->file('thumbnail'));
        }
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                $this->deleteBlogFile($blog->featured_image);
            }
            $validated['featured_image'] = $this->storeBlogFile($request->file('featured_image'));
        }

        $blog->update($validated);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['success' => true, 'message' => 'Blog deleted successfully.']);
    }

    /**
     * Upload an image for use inside blog content (editor inline upload).
     * Expects POST with "file" (image). Returns JSON { location: "url" } for TinyMCE.
     */
    public function uploadContentImage(Request $request)
    {
        $request->validate([
            'file' => ['required', 'max:5120'], // 5MB
        ]);

        $dir = public_path('storage/editor-uploads');
        File::ensureDirectoryExists($dir);
        $name = $request->file('file')->hashName();
        $request->file('file')->move($dir, $name);
        $path = 'editor-uploads/' . $name;
        $url = asset('storage/' . $path);

        return response()->json(['location' => $url]);
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = Blog::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = Blog::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }

    private function parseTags(?string $input): array
    {
        if (empty(trim((string) $input))) {
            return [];
        }
        $tags = array_map('trim', explode(',', (string) $input));
        return array_values(array_filter($tags));
    }

    /**
     * Store an uploaded file in public/storage/blogs and return the path for DB (e.g. blogs/filename.jpg).
     */
    private function storeBlogFile(\Illuminate\Http\UploadedFile $file): string
    {
        $dir = public_path('storage/blogs');
        File::ensureDirectoryExists($dir);
        $name = $file->hashName();
        $file->move($dir, $name);
        return 'blogs/' . $name;
    }

    /**
     * Delete a blog file stored under public/storage (path e.g. blogs/filename.jpg).
     */
    private function deleteBlogFile(string $path): void
    {
        $fullPath = public_path('storage/' . $path);
        if (File::isFile($fullPath)) {
            File::delete($fullPath);
        }
    }
}
