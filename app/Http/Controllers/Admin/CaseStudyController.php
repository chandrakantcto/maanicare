<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CaseStudyDataTable;
use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use App\Models\CaseStudySection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

class CaseStudyController extends Controller
{
    public function index(CaseStudyDataTable $dataTable)
    {
        $dataTableId = $dataTable->dataTableId;
        return $dataTable->render('admin.case-studies.index', compact('dataTableId'));
    }

    public function create()
    {
        $categories = CaseStudyCategory::where('is_active', true)->orderBy('order')->get();
        return view('admin.case-studies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $this->validateCaseStudy($request);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']));
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0) ?: 0;
        $validated['vision_bullets'] = $this->normalizeVisionBullets($request->vision_bullets ?? []);
        $validated['is_published'] = (bool) ($request->has('is_published'));
        $validated['is_featured'] = (bool) ($request->has('is_featured'));
        $validated['published_at'] = $validated['is_published'] ? ($validated['published_at'] ?? now()) : null;

        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $this->storeCaseStudyImage($request->file('hero_image'));
        }

        $caseStudy = CaseStudy::create($validated);

        $this->syncSections($caseStudy, $request->sections ?? []);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study created successfully.');
    }

    public function show(CaseStudy $case_study)
    {
        $case_study->load(['category', 'sections']);
        return view('admin.case-studies.show', compact('case_study'));
    }

    public function edit(CaseStudy $case_study)
    {
        $case_study->load('sections');
        $categories = CaseStudyCategory::where('is_active', true)->orderBy('order')->get();
        return view('admin.case-studies.edit', compact('case_study', 'categories'));
    }

    public function update(Request $request, CaseStudy $case_study)
    {
        $validated = $this->validateCaseStudy($request, $case_study->id);

        $validated['slug'] = $this->uniqueSlug(Str::slug($validated['title']), $case_study->id);
        $validated['category_id'] = (int) ($validated['category_id'] ?? 0) ?: 0;
        $validated['vision_bullets'] = $this->normalizeVisionBullets($request->vision_bullets ?? []);
        $validated['is_published'] = (bool) ($request->has('is_published'));
        $validated['is_featured'] = (bool) ($request->has('is_featured'));
        $validated['published_at'] = $validated['is_published']
            ? ($validated['published_at'] ?? $case_study->published_at ?? now())
            : null;

        if ($request->hasFile('hero_image')) {
            $this->deleteCaseStudyImage($case_study->hero_image);
            $validated['hero_image'] = $this->storeCaseStudyImage($request->file('hero_image'));
        }

        $case_study->update($validated);

        $this->syncSections($case_study, $request->sections ?? []);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study updated successfully.');
    }

    public function destroy(CaseStudy $case_study)
    {
        $this->deleteCaseStudyImage($case_study->hero_image);
        $case_study->sections()->delete();
        $case_study->delete();
        return response()->json(['success' => true, 'message' => 'Case study deleted successfully.']);
    }

    private function validateCaseStudy(Request $request, ?int $excludeId = null): array
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'category_id' => ['nullable', 'integer', 'min:0'],
            'hero_image' => ['nullable', 'image'],
            'short_description' => ['nullable', 'string'],
            'vision_heading' => ['nullable', 'string', 'max:255'],
            'vision_intro_paragraph' => ['nullable', 'string'],
            'vision_bullets' => ['nullable', 'array'],
            'vision_bullets.*' => ['nullable', 'string', 'max:500'],
            'vision_transition_text' => ['nullable', 'string'],
            'vision_closing_line' => ['nullable', 'string', 'max:255'],
            'client_name' => ['nullable', 'string', 'max:255'],
            'project_name' => ['nullable', 'string', 'max:255'],
            'project_location' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'published_at' => ['nullable', 'date'],
            'sections' => ['nullable', 'array'],
            'sections.*.title' => ['nullable', 'string', 'max:255'],
            'sections.*.content' => ['nullable', 'string'],
            'sections.*.show_title' => ['nullable', 'boolean'],
            'sections.*.is_visible' => ['nullable', 'boolean'],
            'sections.*.order' => ['nullable', 'integer', 'min:0'],
        ];

        return $request->validate($rules);
    }

    private function normalizeVisionBullets($input): array
    {
        if (! is_array($input)) {
            $input = array_filter(array_map('trim', explode("\n", (string) $input)));
        }
        return array_values(array_filter(array_map('trim', $input)));
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $query = CaseStudy::where('slug', $slug);
        if ($excludeId !== null) {
            $query->where('id', '!=', $excludeId);
        }
        $count = 0;
        while ($query->exists()) {
            $count++;
            $slug = $base . '-' . $count;
            $query = CaseStudy::where('slug', $slug);
            if ($excludeId !== null) {
                $query->where('id', '!=', $excludeId);
            }
        }
        return $slug;
    }

    /**
     * Store an uploaded image in public_path('storage/case-studies') and return the path for DB (e.g. case-studies/filename.jpg).
     */
    private function storeCaseStudyImage(UploadedFile $file): string
    {
        $dir = public_path('storage/case-studies');
        File::ensureDirectoryExists($dir);
        $name = $file->hashName();
        $file->move($dir, $name);
        return 'case-studies/' . $name;
    }

    /**
     * Delete a case study image stored under public/storage (path e.g. case-studies/filename.jpg).
     */
    private function deleteCaseStudyImage(?string $path): void
    {
        if (empty($path)) {
            return;
        }
        $fullPath = public_path('storage/' . $path);
        if (File::isFile($fullPath)) {
            File::delete($fullPath);
        }
    }

    private function syncSections(CaseStudy $caseStudy, array $sections): void
    {
        $existingIds = array_filter(array_map(function ($s) {
            return isset($s['id']) && (int) $s['id'] ? (int) $s['id'] : null;
        }, $sections));

        $caseStudy->sections()->whereNotIn('id', $existingIds)->delete();

        foreach ($sections as $index => $row) {
            $order = (int) ($row['order'] ?? $index);
            $payload = [
                'title' => $row['title'] ?? null,
                'content' => $row['content'] ?? null,
                'show_title' => (bool) ($row['show_title'] ?? true),
                'is_visible' => (bool) ($row['is_visible'] ?? true),
                'order' => $order,
            ];

            if (! empty($row['id']) && (int) $row['id']) {
                $caseStudy->sections()->where('id', (int) $row['id'])->update($payload);
            } else {
                $payload['case_study_id'] = $caseStudy->id;
                CaseStudySection::create($payload);
            }
        }
    }
}
