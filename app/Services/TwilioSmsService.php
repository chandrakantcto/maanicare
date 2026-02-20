<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TwilioSmsService
{
    protected string $accountSid;
    protected string $authToken;
    protected string $fromNumber;

    public function __construct()
    {
        $this->accountSid = (string) (config('services.twilio.sid') ?? '');
        $this->authToken = (string) (config('services.twilio.token') ?? '');
        $this->fromNumber = (string) (config('services.twilio.phone') ?? '');
    }

    public function isConfigured(): bool
    {
        return ! empty($this->accountSid) && ! empty($this->authToken) && ! empty($this->fromNumber);
    }

    /**
     * Send SMS via Twilio API. Phone number should be E.164 format (e.g. +919876543210).
     */
    public function send(string $to, string $body): array
    {
        if (! $this->isConfigured()) {
            Log::warning('Twilio not configured. Skipping SMS.', ['to' => $to]);

            return ['success' => false, 'message' => 'SMS service not configured.'];
        }

        $to = $this->normalizePhone($to);
        $url = "https://api.twilio.com/2010-04-01/Accounts/{$this->accountSid}/Messages.json";

        $response = Http::asForm()
            ->withBasicAuth($this->accountSid, $this->authToken)
            ->post($url, [
                'From' => $this->fromNumber,
                'To' => $to,
                'Body' => $body,
            ]);

        if ($response->successful()) {
            return ['success' => true, 'message' => 'SMS sent.'];
        }

        Log::error('Twilio SMS failed', [
            'to' => $to,
            'status' => $response->status(),
            'body' => $response->json(),
        ]);

        return [
            'success' => false,
            'message' => $response->json('message', 'Failed to send SMS.'),
        ];
    }

    protected function normalizePhone(string $phone): string
    {
        $phone = preg_replace('/\s+/', '', $phone);
        if (! str_starts_with($phone, '+')) {
            $phone = '+91' . ltrim($phone, '0');
        }

        return $phone;
    }
}
