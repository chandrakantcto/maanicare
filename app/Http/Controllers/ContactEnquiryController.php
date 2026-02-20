<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\Request;

class ContactEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'              => ['required', 'string', 'max:255'],
            'designation'            => ['nullable', 'string', 'max:255'],
            'company_name'           => ['nullable', 'string', 'max:255'],
            'company_website'        => ['nullable', 'string', 'url', 'max:500'],
            'email'                  => ['required', 'email'],
            'phone'                  => ['nullable', 'string', 'max:50'],
            'preferred_date_reach'   => ['nullable', 'string', 'max:255'],
            'preferred_time_reach'   => ['nullable', 'string', 'max:255'],
            'industry'              => ['nullable', 'string', 'max:255'],
            'service_of_interest'    => ['nullable', 'string', 'max:255'],
            'message'                => ['nullable', 'string'],
        ]);

        ContactEnquiry::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent. We will get back to you soon.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been sent. We will get back to you soon.');
    }
}
