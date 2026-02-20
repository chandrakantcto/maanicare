<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'sector',
        'location',
        'area_sqft',
        'area_display',
        'special_features',
        'key_highlights',
        'services',
        'hero_image',
        'is_featured',
        'sort_order',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'services' => 'array',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'area_sqft' => 'integer',
        ];
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class, 'project_id', 'id')->orderBy('sort_order');
    }
}
