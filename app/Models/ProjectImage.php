<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $table = 'project_images';

    protected $fillable = [
        'project_id',
        'image_path',
        'caption',
        'sort_order',
        'is_hero',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_hero' => 'boolean',
        ];
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
