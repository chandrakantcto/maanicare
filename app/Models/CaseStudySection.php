<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudySection extends Model
{
    protected $table = 'case_study_sections';

    protected $fillable = [
        'case_study_id',
        'section_key',
        'title',
        'order',
        'content',
        'show_title',
        'is_visible',
    ];

    protected function casts(): array
    {
        return [
            'order' => 'integer',
            'show_title' => 'boolean',
            'is_visible' => 'boolean',
        ];
    }

    public function caseStudy()
    {
        return $this->belongsTo(CaseStudy::class, 'case_study_id', 'id');
    }
}
