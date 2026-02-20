<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProjectCategory::orderBy('name')->get();

        $categoryId = $request->query('category_id');
        $page = (int) $request->query('page', 1);
        $perPage = 12;

        $query = Project::where('status', 'Active')
            ->with('category')
            ->orderBy('sort_order')
            ->orderBy('id');

        if ($categoryId !== null && $categoryId !== '' && (int) $categoryId > 0) {
            $query->where('category_id', (int) $categoryId);
        }

        $projects = $query->paginate($perPage, ['*'], 'page', $page);

        if ($request->ajax() || $request->wantsJson()) {
            $isAllTab = ($categoryId === null || $categoryId === '' || (int) $categoryId === 0);
            if ($isAllTab) {
                $cardsPerRow = 3;
                $startRowIndex = ($page - 1) * ($perPage / $cardsPerRow);
                $html = view('projects.partials.rows-with-services', [
                    'projects' => $projects->items(),
                    'startRowIndex' => (int) $startRowIndex,
                ])->render();
            } else {
                $html = view('projects.partials.cards', ['projects' => $projects->items()])->render();
            }
            return response()->json([
                'html' => $html,
                'has_more' => $projects->hasMorePages(),
                'next_page' => $projects->currentPage() + 1,
            ]);
        }

        return view('projects.index', [
            'categories' => $categories,
            'projects' => $projects->items(),
            'hasMore' => $projects->hasMorePages(),
            'nextPage' => $projects->currentPage() + 1,
        ]);
    }

    /**
     * Return project details as JSON for the details modal.
     */
    public function show(Request $request, Project $project)
    {
        $project->load(['category', 'images']);

        if ($request->ajax() || $request->wantsJson()) {
            $images = [];
            if ($project->hero_image) {
                $images[] = [
                    'url' => asset('storage/' . $project->hero_image),
                    'caption' => $project->title,
                ];
            }
            foreach ($project->images as $img) {
                if ($img->status === 'Active' && $img->image_path) {
                    $images[] = [
                        'url' => asset('storage/' . $img->image_path),
                        'caption' => $img->caption ?? $project->title,
                    ];
                }
            }
            if (empty($images)) {
                $images[] = ['url' => asset('storage/assets/web/img/Rectangle 1656.png'), 'caption' => $project->title];
            }

            return response()->json([
                'id' => $project->id,
                'title' => $project->title,
                'sector' => $project->sector ?: ($project->category?->name ?? '—'),
                'location' => $project->location ?? '—',
                'area_sqft' => $project->area_sqft ? number_format($project->area_sqft) : ($project->area_display ?? '—'),
                'special_features' => $project->special_features ?? '—',
                'key_highlights' => $project->key_highlights ?? '—',
                'services' => $project->services ?? [],
                'images' => $images,
            ]);
        }

        return view('projects.show', compact('project'));
    }
}
