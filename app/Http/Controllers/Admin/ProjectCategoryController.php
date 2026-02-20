<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ProjectCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectCategoryController extends Controller
{
    public function index(ProjectCategoryDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.project-categories.index', compact('dataTableId'));
    }

    public function create()
    {
        return view('admin.project-categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('project-categories', 'public');
        }

        ProjectCategory::create($validated);
        return redirect()->route('admin.project-categories.index')->with('success', 'Project category created successfully.');
    }

    public function show(ProjectCategory $project_category)
    {
        return view('admin.project-categories.show', compact('project_category'));
    }

    public function edit(ProjectCategory $project_category)
    {
        return view('admin.project-categories.edit', compact('project_category'));
    }

    public function update(Request $request, ProjectCategory $project_category)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $project_category->id);

        if ($request->hasFile('image')) {
            if ($project_category->image) {
                Storage::disk('public')->delete($project_category->image);
            }
            $validated['image'] = $request->file('image')->store('project-categories', 'public');
        }

        $project_category->update($validated);
        return redirect()->route('admin.project-categories.index')->with('success', 'Project category updated successfully.');
    }

    public function destroy(ProjectCategory $project_category)
    {
        if ($project_category->image) {
            Storage::disk('public')->delete($project_category->image);
        }
        $project_category->delete();
        return response()->json(['success' => true, 'message' => 'Project category deleted successfully.']);
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = ProjectCategory::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = ProjectCategory::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }
}
