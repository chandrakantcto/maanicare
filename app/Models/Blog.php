<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blogs';

    protected $fillable = [
        'author_id',
        'parent_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'featured_image',
        'published_at',
        'featured',
        'reading_time_minutes',
        'views_count',
        'meta',
        'tags',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'open_graph',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'featured' => 'integer',
            'views_count' => 'integer',
            'meta' => 'array',
            'tags' => 'array',
            'open_graph' => 'array',
        ];
    }

    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Blog::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Blog::class, 'parent_id', 'id');
    }
}
