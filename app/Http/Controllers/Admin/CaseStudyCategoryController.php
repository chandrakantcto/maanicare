<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CaseStudyCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\CaseStudyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CaseStudyCategoryController extends Controller
{
    public function index(CaseStudyCategoryDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.case-study-categories.index', compact('dataTableId'));
    }

    public function create()
    {
        return view('admin.case-study-categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:100', 'unique:case_study_categories,name'],
            'description' => ['nullable', 'string'],
            'icon'        => ['nullable', 'string', 'max:100'],
            'is_active'   => ['boolean'],
            'order'       => ['nullable', 'integer', 'min:0'],
        ]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']));
        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);
        CaseStudyCategory::create($validated);
        return redirect()->route('admin.case-study-categories.index')->with('success', 'Case study category created successfully.');
    }

    public function show(CaseStudyCategory $case_study_category)
    {
        return view('admin.case-study-categories.show', compact('case_study_category'));
    }

    public function edit(CaseStudyCategory $case_study_category)
    {
        return view('admin.case-study-categories.edit', compact('case_study_category'));
    }

    public function update(Request $request, CaseStudyCategory $case_study_category)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:100', Rule::unique('case_study_categories', 'name')->ignore($case_study_category->id)],
            'description' => ['nullable', 'string'],
            'icon'        => ['nullable', 'string', 'max:100'],
            'is_active'   => ['boolean'],
            'order'       => ['nullable', 'integer', 'min:0'],
        ]);
        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['name']), $case_study_category->id);
        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);
        $case_study_category->update($validated);
        return redirect()->route('admin.case-study-categories.index')->with('success', 'Case study category updated successfully.');
    }

    public function destroy(CaseStudyCategory $case_study_category)
    {
        $case_study_category->delete();
        return response()->json(['success' => true, 'message' => 'Case study category deleted successfully.']);
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = CaseStudyCategory::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = CaseStudyCategory::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }
}
