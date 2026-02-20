<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessRequest extends Model
{
    protected $table = 'access_requests';

    protected $fillable = [
        'full_name',
        'company_name',
        'designation',
        'phone',
        'email',
        'otp_code',
        'otp_sent_at',
        'verified_at',
        'ip_address',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'otp_sent_at' => 'datetime',
            'verified_at' => 'datetime',
        ];
    }

    public function isVerified(): bool
    {
        return $this->verified_at !== null;
    }

    /**
     * OTP expiry in seconds (10 minutes).
     */
    public const OTP_EXPIRY_SECONDS = 600;
}
