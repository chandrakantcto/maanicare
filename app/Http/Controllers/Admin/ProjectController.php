<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProjectDataTable;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index(ProjectDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.projects.index', compact('dataTableId'));
    }

    public function create()
    {
        $categories = ProjectCategory::orderBy('name')->get();
        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateProject($request);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']));
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0) ?: 0;
        $validated['services'] = $this->parseServices($request->services ?? '');
        $validated['is_featured'] = (bool) $request->has('is_featured');
        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request->file('hero_image')->store('projects', 'public');
        }

        $project = Project::create($validated);
        $this->syncImages($project, $request->images ?? []);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $project->load(['category', 'images']);
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $project->load('images');
        $categories = ProjectCategory::orderBy('name')->get();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $this->validateProject($request);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']), $project->id);
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0) ?: 0;
        $validated['services'] = $this->parseServices($request->services ?? '');
        $validated['is_featured'] = (bool) $request->has('is_featured');
        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        if ($request->hasFile('hero_image')) {
            if ($project->hero_image) {
                Storage::disk('public')->delete($project->hero_image);
            }
            $validated['hero_image'] = $request->file('hero_image')->store('projects', 'public');
        }

        $project->update($validated);
        $this->syncImages($project, $request->images ?? []);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->hero_image) {
            Storage::disk('public')->delete($project->hero_image);
        }
        foreach ($project->images as $img) {
            if ($img->image_path) {
                Storage::disk('public')->delete($img->image_path);
            }
        }
        $project->images()->delete();
        $project->delete();
        return response()->json(['success' => true, 'message' => 'Project deleted successfully.']);
    }

    private function validateProject(Request $request): array
    {
        $rules = [
            'category_id' => ['nullable', 'integer', 'min:0'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sector' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'area_sqft' => ['nullable', 'integer', 'min:0'],
            'area_display' => ['nullable', 'string', 'max:255'],
            'special_features' => ['nullable', 'string'],
            'key_highlights' => ['nullable', 'string'],
            'services' => ['nullable', 'string'],
            'hero_image' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(['Active', 'InActive'])],
            'images' => ['nullable', 'array'],
            'images.*.id' => ['nullable', 'integer', 'min:1'],
            'images.*.image' => ['nullable', 'image', 'max:2048'],
            'images.*.caption' => ['nullable', 'string', 'max:255'],
            'images.*.sort_order' => ['nullable', 'integer', 'min:0'],
            'images.*.is_hero' => ['nullable', 'boolean'],
            'images.*.status' => ['nullable', Rule::in(['Active', 'InActive'])],
        ];
        return $request->validate($rules);
    }

    private function parseServices(?string $input): array
    {
        if (empty(trim((string) $input))) {
            return [];
        }
        $lines = array_map('trim', explode("\n", (string) $input));
        return array_values(array_filter($lines));
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = Project::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = Project::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }

    private function syncImages(Project $project, array $images): void
    {
        $existingIds = array_filter(array_map(function ($img) {
            return isset($img['id']) && (int) $img['id'] ? (int) $img['id'] : null;
        }, $images));

        $toDelete = $project->images()->whereNotIn('id', $existingIds)->get();
        foreach ($toDelete as $img) {
            if ($img->image_path) {
                Storage::disk('public')->delete($img->image_path);
            }
            $img->delete();
        }

        foreach ($images as $index => $row) {
            $sortOrder = (int) ($row['sort_order'] ?? $index);
            $isHero = (bool) ($row['is_hero'] ?? false);
            $status = in_array($row['status'] ?? '', ['Active', 'InActive']) ? ($row['status'] ?? 'Active') : 'Active';

            if (!empty($row['id']) && (int) $row['id']) {
                $projectImage = $project->images()->find((int) $row['id']);
                if ($projectImage) {
                    $path = $projectImage->image_path;
                    if (!empty($row['image']) && $row['image'] instanceof \Illuminate\Http\UploadedFile) {
                        if ($path) {
                            Storage::disk('public')->delete($path);
                        }
                        $path = $row['image']->store('projects/gallery', 'public');
                    }
                    $projectImage->update([
                        'image_path' => $path,
                        'caption' => $row['caption'] ?? null,
                        'sort_order' => $sortOrder,
                        'is_hero' => $isHero,
                        'status' => $status,
                    ]);
                }
            } else {
                $file = $row['image'] ?? null;
                if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
                    $path = $file->store('projects/gallery', 'public');
                    ProjectImage::create([
                        'project_id' => $project->id,
                        'image_path' => $path,
                        'caption' => $row['caption'] ?? null,
                        'sort_order' => $sortOrder,
                        'is_hero' => $isHero,
                        'status' => $status,
                    ]);
                }
            }
        }
    }
}
