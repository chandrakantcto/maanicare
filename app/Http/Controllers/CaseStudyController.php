<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use App\Services\FeaturedCaseStudiesService;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Map category slug to frontend filter key (data-filter).
     */
    protected function getFilterKey(string $slug): string
    {
        $map = [
            'project-fit-out-services' => 'all',
            'staffing-payroll-compliance-services' => 'payroll',
            'integrated-facility-management-services' => 'facility',
            'on-demand-services' => 'ondemand',
        ];
        return $map[$slug] ?? 'all';
    }

    /**
     * Build filter tabs for listing: first "all", then categories with filter keys.
     */
    protected function getFilterTabs(): array
    {
        $categories = CaseStudyCategory::where('is_active', true)->orderBy('order')->get();
        $tabs = [
            ['name' => 'Project & Fit-Out Services', 'filter' => 'all'],
        ];
        foreach ($categories as $c) {
            $key = $this->getFilterKey($c->slug);
            if ($key !== 'all') {
                $tabs[] = ['name' => $c->name, 'filter' => $key];
            }
        }
        return $tabs;
    }

    /**
     * Get filter key for a case study (from its category).
     */
    protected function getCaseStudyFilterKey(?CaseStudy $caseStudy): string
    {
        if (! $caseStudy || ! $caseStudy->category) {
            return 'all';
        }
        return $this->getFilterKey($caseStudy->category->slug);
    }

    public function index(Request $request)
    {
        $perPage = 12;
        $page = (int) $request->query('page', 1);

        $query = CaseStudy::where('is_published', true)
            ->with('category')
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc');

        $caseStudies = $query->paginate($perPage, ['*'], 'page', $page);
        $featured = app(FeaturedCaseStudiesService::class)->getFeatured();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'html' => view('case-studies.partials.cards', ['caseStudies' => $caseStudies->items()])->render(),
                'has_more' => $caseStudies->hasMorePages(),
                'next_page' => $caseStudies->currentPage() + 1,
            ]);
        }

        return view('case-studies', [
            'featured' => $featured,
            'caseStudies' => $caseStudies->items(),
            'filterTabs' => $this->getFilterTabs(),
            'hasMore' => $caseStudies->hasMorePages(),
            'nextPage' => $caseStudies->currentPage() + 1,
        ]);
    }

    public function show(Request $request, string $slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)
            ->where('is_published', true)
            ->with(['category', 'sections' => fn ($q) => $q->where('is_visible', true)->orderBy('order')])
            ->firstOrFail();

        return view('case-studies-detail', [
            'caseStudy' => $caseStudy,
        ]);
    }
}
