<?php

namespace Database\Seeders;

use App\Models\CaseStudyCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CaseStudyCategorySeeder extends Seeder
{
    /**
     * Predefined case study categories (as per spec).
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Project & Fit-Out Services', 'icon' => 'cube', 'order' => 1],
            ['name' => 'Staffing, Payroll & Compliance Services', 'icon' => 'users', 'order' => 2],
            ['name' => 'Integrated Facility Management Services', 'icon' => 'building', 'order' => 3],
            ['name' => 'On-Demand Services', 'icon' => 'tool', 'order' => 4],
        ];

        foreach ($categories as $item) {
            CaseStudyCategory::updateOrCreate(
                ['slug' => Str::slug($item['name'])],
                [
                    'name' => $item['name'],
                    'description' => null,
                    'icon' => $item['icon'],
                    'is_active' => true,
                    'order' => $item['order'],
                ]
            );
        }
    }
}
