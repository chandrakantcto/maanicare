<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    protected $table = 'contact_enquiries';

    protected $fillable = [
        'full_name',
        'designation',
        'company_name',
        'company_website',
        'email',
        'phone',
        'preferred_date_reach',
        'preferred_time_reach',
        'industry',
        'service_of_interest',
        'message',
    ];
}
