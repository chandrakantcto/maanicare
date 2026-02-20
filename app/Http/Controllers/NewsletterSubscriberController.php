<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:newsletter_subscribers,email'],
        ]);

        NewsletterSubscriber::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! You have been subscribed to our newsletter.',
        ]);
    }
}
