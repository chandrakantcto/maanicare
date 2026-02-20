<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 9;
        $page = (int) $request->query('page', 1);

        $query = Blog::where('status', 'Active')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->orderBy('published_at', 'desc');

        $blogs = $query->paginate($perPage, ['*'], 'page', $page);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'html' => view('blogs.partials.cards', ['blogs' => $blogs->items()])->render(),
                'has_more' => $blogs->hasMorePages(),
                'next_page' => $blogs->currentPage() + 1,
            ]);
        }

        return view('blogs.index', [
            'blogs' => $blogs->items(),
            'hasMore' => $blogs->hasMorePages(),
            'nextPage' => $blogs->currentPage() + 1,
        ]);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'Active')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with('category')
            ->firstOrFail();

        $otherBlogs = Blog::where('status', 'Active')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('id', '!=', $blog->id)
            ->with('category')
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();

        return view('blogs.details', [
            'blog' => $blog,
            'otherBlogs' => $otherBlogs,
        ]);
    }
}
