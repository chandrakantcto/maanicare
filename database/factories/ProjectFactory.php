<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Download a placeholder image and store it; return the storage path or null.
     */
    public static function storePlaceholderImage(string $directory, string $prefix = 'img'): ?string
    {
        try {
            $response = Http::timeout(15)
                ->withOptions(['allow_redirects' => true])
                ->get('https://picsum.photos/800/600', ['random' => Str::random(8)]);

            if (! $response->successful()) {
                return null;
            }

            $extension = 'jpg';
            $filename = $prefix . '_' . Str::random(8) . '.' . $extension;
            $path = $directory . '/' . $filename;

            Storage::disk('public')->put($path, $response->body());

            return $path;
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Return a fallback image path (seeder should ensure this file exists).
     */
    public static function getFallbackImagePath(): string
    {
        return 'projects/gallery/placeholder.jpg';
    }

    /**
     * Ensure a fallback placeholder image exists in storage (call from seeder).
     */
    public static function ensureFallbackImage(): string
    {
        $path = self::getFallbackImagePath();
        if (! Storage::disk('public')->exists($path)) {
            $downloaded = self::storePlaceholderImage('projects/gallery', 'placeholder');
            if ($downloaded) {
                Storage::disk('public')->copy($downloaded, $path);
                return $path;
            }
            // Create directory and a minimal placeholder so path exists
            Storage::disk('public')->makeDirectory('projects/gallery');
            Storage::disk('public')->put($path, base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'));
        }
        return $path;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        $slug = Str::slug($title);
        $categoryIds = ProjectCategory::pluck('id')->toArray();
        $servicesList = [
            'Fit-Out Only',
            'Structural Design & Consultation',
            'MEP Design',
            'Integrated Facility Management',
            'Project Management',
            'Interior Design',
        ];

        $heroPath = self::storePlaceholderImage('projects', 'hero');

        return [
            'category_id' => $categoryIds ? fake()->randomElement($categoryIds) : 0,
            'title' => $title,
            'slug' => $slug,
            'description' => fake()->paragraphs(2, true),
            'sector' => fake()->randomElement(['Commercial', 'Residential', 'Hospitality', 'Mixed-use', 'Healthcare', 'Retail']),
            'location' => fake()->city(),
            'area_sqft' => fake()->randomElement([5000, 10000, 15000, 20000, 25000, 30000, 50000]),
            'area_display' => fake()->optional(0.7)->randomElement(['5,000 Sq. Ft.', '25,000 Sq. Ft.', '50,000 Sq. Ft.']),
            'special_features' => fake()->optional(0.8)->paragraph(),
            'key_highlights' => fake()->optional(0.8)->paragraph(),
            'services' => fake()->randomElements($servicesList, fake()->numberBetween(1, 4)),
            'hero_image' => $heroPath,
            'is_featured' => fake()->boolean(25),
            'sort_order' => 0,
            'status' => fake()->randomElement(['Active', 'Active', 'Active', 'InActive']),
        ];
    }

    /**
     * Ensure unique slugs (append number if needed).
     */
    public function configure(): static
    {
        return $this->afterMaking(function (Project $project) {
            $base = $project->slug;
            $count = 0;
            while (Project::where('slug', $project->slug)->exists()) {
                $count++;
                $project->slug = $base . '-' . $count;
            }
        });
    }
}
