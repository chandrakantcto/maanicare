<?php

namespace Database\Factories;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use App\Models\CaseStudySection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaseStudy>
 */
class CaseStudyFactory extends Factory
{
    protected $model = CaseStudy::class;

    /**
     * Store a placeholder image for case study hero; return path or null.
     */
    public static function storePlaceholderImage(): ?string
    {
        if (! class_exists(ProjectFactory::class) || ! method_exists(ProjectFactory::class, 'storePlaceholderImage')) {
            return null;
        }
        return ProjectFactory::storePlaceholderImage('case-studies', 'case');
    }

    /**
     * Generate fake HTML for a section (paragraphs, lists, headings).
     */
    public static function fakeSectionContent(?\Faker\Generator $faker = null): string
    {
        $faker = $faker ?? \Faker\Factory::create();
        $parts = [];

        $parts[] = '<div class="case-block"><p>' . $faker->paragraph(4) . '</p>';

        $parts[] = '<h3>' . $faker->sentence(4) . '</h3>';
        $parts[] = '<p>' . $faker->paragraph(2) . '</p>';
        $parts[] = '<ul>';
        for ($i = 0; $i < $faker->numberBetween(3, 6); $i++) {
            $parts[] = '<li>' . $faker->sentence(8) . '</li>';
        }
        $parts[] = '</ul>';

        $parts[] = '<h3>' . $faker->sentence(3) . '</h3>';
        $parts[] = '<p>' . $faker->paragraph(2) . '</p>';
        $parts[] = '<ol>';
        for ($i = 0; $i < $faker->numberBetween(2, 4); $i++) {
            $parts[] = '<li>' . $faker->sentence(6) . '</li>';
        }
        $parts[] = '</ol>';

        $parts[] = '<p>' . $faker->paragraph(3) . '</p></div>';
        return implode("\n", $parts);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(fake()->numberBetween(4, 8));
        $categoryId = CaseStudyCategory::inRandomOrder()->first()?->id ?? 0;

        $visionBullets = [];
        $count = fake()->numberBetween(3, 6);
        for ($i = 0; $i < $count; $i++) {
            $visionBullets[] = fake()->sentence(fake()->numberBetween(6, 14));
        }

        $heroImage = null;
        if (fake()->boolean(70)) {
            $heroImage = self::storePlaceholderImage();
        }

        return [
            'category_id' => $categoryId,
            'slug' => Str::slug($title) . '-' . Str::random(6),
            'title' => $title,
            'subtitle' => fake()->optional(0.8)->sentence(fake()->numberBetween(3, 8)),
            'hero_image' => $heroImage,
            'short_description' => fake()->paragraph(fake()->numberBetween(2, 4)),
            'vision_heading' => fake()->sentence(fake()->numberBetween(4, 10)),
            'vision_intro_paragraph' => fake()->paragraphs(fake()->numberBetween(2, 4), true),
            'vision_bullets' => $visionBullets,
            'vision_transition_text' => fake()->paragraphs(2, true),
            'vision_closing_line' => fake()->optional(0.7)->sentence(6),
            'client_name' => fake()->company(),
            'project_name' => fake()->optional(0.9)->sentence(fake()->numberBetween(2, 5)),
            'project_location' => fake()->optional(0.9)->city() . ', ' . fake()->country(),
            'meta_title' => fake()->optional(0.7)->sentence(6),
            'meta_description' => fake()->optional(0.7)->paragraph(),
            'is_published' => true,
            'is_featured' => fake()->boolean(25),
            'published_at' => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }

    /**
     * Configure the model factory: ensure unique slug and create sections after creating.
     */
    public function configure(): static
    {
        return $this->afterMaking(function (CaseStudy $caseStudy) {
            $base = Str::slug($caseStudy->title);
            $slug = $base . '-' . Str::random(6);
            while (CaseStudy::where('slug', $slug)->exists()) {
                $slug = $base . '-' . Str::random(6);
            }
            $caseStudy->slug = $slug;
        })->afterCreating(function (CaseStudy $caseStudy) {
            $this->createSectionsForCaseStudy($caseStudy);
        });
    }

    /**
     * Create 5–7 dynamic sections with fake HTML content for the case study.
     */
    protected function createSectionsForCaseStudy(CaseStudy $caseStudy): void
    {
        $sectionTitles = [
            'The Business Challenge',
            'Problem Statement and Constraints',
            'Maanicare\'s Approach',
            'Discovery and Design Process',
            'The Solution',
            'Implementation and Outcomes',
            'Impact and Key Learnings',
            'Executive Summary',
        ];

        $numSections = fake()->numberBetween(5, 7);
        $picked = fake()->randomElements($sectionTitles, min($numSections, count($sectionTitles)));
        if (count($picked) < $numSections) {
            $extra = array_diff($sectionTitles, $picked);
            $picked = array_merge($picked, array_slice($extra, 0, $numSections - count($picked)));
        }

        foreach (array_values($picked) as $order => $title) {
            CaseStudySection::create([
                'case_study_id' => $caseStudy->id,
                'section_key' => 'section_' . ($order + 1),
                'title' => $title,
                'order' => $order,
                'content' => self::fakeSectionContent(fake()),
                'show_title' => true,
                'is_visible' => true,
            ]);
        }
    }
}
