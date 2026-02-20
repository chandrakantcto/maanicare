<?php

namespace Database\Seeders;

use Database\Factories\ProjectFactory;
use Database\Factories\ProjectImageFactory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed 20 projects with hero images and 2–5 gallery images each.
     */
    public function run(): void
    {
        ProjectFactory::ensureFallbackImage();

        $projects = ProjectFactory::new()->count(20)->create();

        foreach ($projects as $index => $project) {
            $project->update(['sort_order' => $index + 1]);

            $imageCount = random_int(2, 5);
            for ($i = 0; $i < $imageCount; $i++) {
                ProjectImageFactory::new()->create([
                    'project_id' => $project->id,
                    'sort_order' => $i,
                    'is_hero' => $i === 0,
                ]);
            }
        }
    }
}
