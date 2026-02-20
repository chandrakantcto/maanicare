<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Seed 50 case studies with fake data for all sections (main fields + dynamic sections).
     * Ensures case study categories exist first.
     */
    public function run(): void
    {
        $this->call(CaseStudyCategorySeeder::class);

        if (CaseStudyCategory::count() === 0) {
            $this->command->warn('No case study categories found. Run CaseStudyCategorySeeder first.');
            return;
        }

        CaseStudy::factory(50)->create();
    }
}
