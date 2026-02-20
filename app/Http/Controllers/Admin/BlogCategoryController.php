<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\BlogCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogCategoryController extends Controller
{
    public function index(BlogCategoryDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.blog-categories.index', compact('dataTableId'));
    }

    public function create()
    {
        $parents = BlogCategory::where('parent_id', 0)->orderBy('name')->get();
        return view('admin.blog-categories.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'parent_id'        => ['nullable', 'integer', 'min:0'],
            'name'             => ['required', 'string', 'max:255'],
            'description'      => ['nullable', 'string'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'status'           => ['required', Rule::in(['Active', 'InActive'])],
        ]);
        $validated['parent_id'] = (int) ($validated['parent_id'] ?? 0);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));
        BlogCategory::create($validated);
        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog category created successfully.');
    }

    public function show(BlogCategory $blog_category)
    {
        $blog_category->load('parent');
        return view('admin.blog-categories.show', compact('blog_category'));
    }

    public function edit(BlogCategory $blog_category)
    {
        $parents = BlogCategory::where('parent_id', 0)->where('id', '!=', $blog_category->id)->orderBy('name')->get();
        return view('admin.blog-categories.edit', compact('blog_category', 'parents'));
    }

    public function update(Request $request, BlogCategory $blog_category)
    {
        $validated = $request->validate([
            'parent_id'        => ['nullable', 'integer', 'min:0', Rule::notIn([$blog_category->id])],
            'name'             => ['required', 'string', 'max:255'],
            'description'      => ['nullable', 'string'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'status'           => ['required', Rule::in(['Active', 'InActive'])],
        ]);
        $validated['parent_id'] = (int) ($validated['parent_id'] ?? 0);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $blog_category->id);
        $blog_category->update($validated);
        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog category updated successfully.');
    }

    public function destroy(BlogCategory $blog_category)
    {
        if ($blog_category->children()->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete category. It has sub-categories. Remove or reassign them first.',
            ], 422);
        }
        $blog_category->delete();
        return response()->json(['success' => true, 'message' => 'Blog category deleted successfully.']);
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = BlogCategory::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = BlogCategory::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }
}

