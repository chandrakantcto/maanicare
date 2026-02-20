<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    protected $table = 'consultation_requests';

    protected $fillable = [
        'full_name',
        'designation',
        'company_name',
        'company_website',
        'email',
        'phone',
        'preferred_reach_time',
        'good_reach_time',
    ];
}
