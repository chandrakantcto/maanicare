<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'meta_title',
        'meta_description',
        'status',
    ];

    /**
     * Parent category.
     */
    public function parent()
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }

    /**
     * Child categories.
     */
    public function children()
    {
        return $this->hasMany(BlogCategory::class, 'parent_id', 'id');
    }

    /**
     * Get the blogs in this category.
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }

    /**
     * Generate slug from name if slug is empty.
     */
    protected static function booted(): void
    {
        static::creating(function (BlogCategory $category) {
            if (empty($category->slug) && !empty($category->name)) {
                $category->slug = Str::slug($category->name);
            }
        });
        static::updating(function (BlogCategory $category) {
            if ($category->isDirty('name') && empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
}
