<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudyCategory extends Model
{
    use SoftDeletes;

    protected $table = 'case_study_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'is_active',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'order' => 'integer',
        ];
    }

    public function caseStudies()
    {
        return $this->hasMany(CaseStudy::class, 'category_id', 'id');
    }
}
