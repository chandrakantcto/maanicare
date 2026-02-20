<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Seed blog categories (Blog, Payroll & Compliance, etc.).
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Blog', 'description' => 'General blog posts and updates'],
            ['name' => 'Payroll & Compliance', 'description' => 'Payroll and compliance insights'],
            ['name' => 'Facility Management', 'description' => 'Facility and operations insights'],
            ['name' => 'Projects', 'description' => 'Project case studies and updates'],
        ];

        foreach ($categories as $item) {
            BlogCategory::updateOrCreate(
                ['slug' => Str::slug($item['name'])],
                [
                    'name' => $item['name'],
                    'description' => $item['description'] ?? null,
                    'status' => 'Active',
                ]
            );
        }
    }
}
