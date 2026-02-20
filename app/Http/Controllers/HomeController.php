<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\FeaturedCaseStudiesService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(FeaturedCaseStudiesService $featuredCaseStudies)
    {
        $paperBlogs = Blog::query()
            ->where('status', 'Active')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->orderByDesc('published_at')
            ->limit(6)
            ->get();

        $featuredCaseStudies = $featuredCaseStudies->getFeatured();

        return view('home', compact('paperBlogs', 'featuredCaseStudies'));
    }
}
