<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;
    protected $table = 'case_studies';

    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'subtitle',
        'hero_image',
        'short_description',
        'vision_heading',
        'vision_intro_paragraph',
        'vision_bullets',
        'vision_transition_text',
        'vision_closing_line',
        'client_name',
        'project_name',
        'project_location',
        'meta_title',
        'meta_description',
        'is_published',
        'is_featured',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'vision_bullets' => 'array',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function category()
    {
        return $this->belongsTo(CaseStudyCategory::class, 'category_id', 'id');
    }

    public function sections()
    {
        return $this->hasMany(CaseStudySection::class, 'case_study_id', 'id')->orderBy('order');
    }
}
