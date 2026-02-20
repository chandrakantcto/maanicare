<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'             => ['required', 'string', 'max:255'],
            'designation'           => ['nullable', 'string', 'max:255'],
            'company_name'          => ['nullable', 'string', 'max:255'],
            'company_website'       => ['nullable', 'string', 'url', 'max:500'],
            'email'                 => ['required', 'email'],
            'phone'                 => ['nullable', 'string', 'max:50'],
            'preferred_reach_time'  => ['nullable', 'string', 'in:Morning,Afternoon,Evening'],
            'good_reach_time'       => ['nullable', 'string', 'max:50'],
        ]);

        ConsultationRequest::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your consultation request has been submitted successfully.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your consultation request has been submitted successfully.');
    }
}
