<?php

namespace App\Http\Controllers;

use App\Models\AccessRequest;
use App\Services\TwilioSmsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectAccessRequestController extends Controller
{
    public function __construct(
        protected TwilioSmsService $twilio
    ) {}

    /**
     * Submit contact form, create access request, send OTP via Twilio.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'designation' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email'],
        ]);

        $otp = (string) random_int(100000, 999999);
        //$otp = '999555';

        $accessRequest = AccessRequest::create([
            'full_name' => $validated['full_name'],
            'company_name' => $validated['company_name'] ?? null,
            'designation' => $validated['designation'] ?? null,
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'otp_code' => $otp,
            'otp_sent_at' => now(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $result = $this->twilio->send(
            $accessRequest->phone,
            'Your Maanicare project access OTP is: ' . $otp . '. Valid for 10 minutes.'
        );

        if (! $result['success']) {
            return response()->json([
                'success' => false,
                'message' => $result['message'] ?? 'Failed to send OTP.',
            ], 422);
        }

        return response()->json([
            'success' => true,
            'message' => 'OTP sent to your mobile number.',
            'step' => 'otp',
            'request_id' => $accessRequest->id,
        ]);
    }

    /**
     * Verify OTP and mark request as verified.
     */
    public function verifyOtp(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'request_id' => ['required', 'integer', 'exists:access_requests,id'],
            'otp' => ['required', 'string', 'size:6'],
        ]);

        $accessRequest = AccessRequest::findOrFail($validated['request_id']);

        if ($accessRequest->verified_at) {
            return response()->json([
                'success' => true,
                'message' => 'Already verified.',
            ]);
        }

        $otpExpired = $accessRequest->otp_sent_at
            && $accessRequest->otp_sent_at->addSeconds(AccessRequest::OTP_EXPIRY_SECONDS)->isPast();

        if ($otpExpired) {
            return response()->json([
                'success' => false,
                'message' => 'OTP has expired. Please request a new one.',
            ], 422);
        }

        if ($accessRequest->otp_code !== $validated['otp']) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid OTP.',
            ], 422);
        }

        $accessRequest->update(['verified_at' => now()]);

        return response()->json([
            'success' => true,
            'message' => 'Verified successfully.',
        ]);
    }
}
