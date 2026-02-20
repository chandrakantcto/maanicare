<?php

namespace Database\Factories;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectImage>
 */
class ProjectImageFactory extends Factory
{
    protected $model = ProjectImage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $path = ProjectFactory::storePlaceholderImage('projects/gallery', 'gallery');
        if ($path === null) {
            $path = ProjectFactory::getFallbackImagePath();
        }

        return [
            'project_id' => 0, // must be set when creating
            'image_path' => $path,
            'caption' => fake()->optional(0.6)->sentence(),
            'sort_order' => 0,
            'is_hero' => false,
            'status' => 'Active',
        ];
    }
}
