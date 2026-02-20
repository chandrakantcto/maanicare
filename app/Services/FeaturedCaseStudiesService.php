<?php

namespace App\Services;

use App\Models\CaseStudy;
use Illuminate\Database\Eloquent\Collection;

class FeaturedCaseStudiesService
{
    /**
     * Get featured case studies for the "INSIGHTS THAT BUILD TRUST" section.
     * Single centralized source: is_published + is_featured, fallback to 6 latest if none featured.
     *
     * @return Collection<int, CaseStudy>
     */
    public function getFeatured(): Collection
    {
        $featured = CaseStudy::query()
            ->where('is_published', true)
            ->where('is_featured', true)
            ->with('category')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        if ($featured->isEmpty()) {
            $featured = CaseStudy::query()
                ->where('is_published', true)
                ->with('category')
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->limit(6)
                ->get();
        }

        return $featured;
    }
}
