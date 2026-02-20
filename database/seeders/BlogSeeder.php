<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Empty blogs and blog_categories, then seed categories and 20 blog entries.
     * Each blog has a unique thumbnail and featured_image path per table structure.
     */
    public function run(): void
    {
        // Empty both tables (blogs first due to FK to blog_categories)
        Schema::disableForeignKeyConstraints();
        DB::table('blogs')->truncate();
        DB::table('blog_categories')->truncate();
        Schema::enableForeignKeyConstraints();

        // Seed categories
        $this->seedCategories();

        // Seed 20 blogs with 20 different images
        $this->seedBlogs();
    }

    private function seedCategories(): void
    {
        $categories = [
            ['name' => 'Blog', 'description' => 'General blog posts and updates'],
            ['name' => 'Payroll & Compliance', 'description' => 'Payroll and compliance insights'],
            ['name' => 'Facility Management', 'description' => 'Facility and operations insights'],
            ['name' => 'Projects', 'description' => 'Project case studies and updates'],
        ];

        foreach ($categories as $item) {
            BlogCategory::create([
                'parent_id' => 0,
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'description' => $item['description'] ?? null,
                'meta_title' => null,
                'meta_description' => null,
                'status' => 'Active',
            ]);
        }
    }

    private function seedBlogs(): void
    {
        $categoryBySlug = [
            'blog' => BlogCategory::where('slug', 'blog')->first()?->id,
            'payroll-compliance' => BlogCategory::where('slug', 'payroll-compliance')->first()?->id,
            'facility-management' => BlogCategory::where('slug', 'facility-management')->first()?->id,
            'projects' => BlogCategory::where('slug', 'projects')->first()?->id,
        ];
        $defaultCategoryId = BlogCategory::first()?->id ?? 0;

        $entries = [
            ['title' => 'How Maanicare Built A Mega-Kitchen For 200+ Gentle Giants', 'excerpt' => "Vantara, Anant Ambani's animal rescue and rehabilitation initiative at Jamnagar, was envisioned as one of the world's most advanced wildlife facilities, housing over 200 rescued elephants living on a 650-acre campus.", 'tags' => ['Vantara', 'Elephant Kitchen', 'Facility Design', 'Wildlife'], 'reading_time_minutes' => 10, 'category_slug' => 'projects'],
            ['title' => 'Payroll & Compliance Best Practices for Facility Managers', 'excerpt' => 'Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.', 'tags' => ['Payroll', 'Compliance', 'Facility Management'], 'reading_time_minutes' => 6, 'category_slug' => 'payroll-compliance'],
            ['title' => 'Integrated Facility Management: Lessons from Real Operations', 'excerpt' => 'Observations, lessons, and informed viewpoints drawn from real projects, real operations, and real workplaces.', 'tags' => ['Facility Management', 'Operations', 'Blog'], 'reading_time_minutes' => 8, 'category_slug' => 'facility-management'],
            ['title' => 'Designing for Scale: Kitchen and Catering Facilities That Work', 'excerpt' => 'Morem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sednissim, metus nec fringilla.', 'tags' => ['Design', 'Kitchen', 'Catering', 'Blog'], 'reading_time_minutes' => 5, 'category_slug' => 'blog'],
            ['title' => 'Staffing and On-Demand Services in Modern Workplaces', 'excerpt' => 'Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.', 'tags' => ['Staffing', 'Payroll & Compliance', 'Blog'], 'reading_time_minutes' => 7, 'category_slug' => 'payroll-compliance'],
            ['title' => 'Sustainable Design in Commercial Kitchens', 'excerpt' => 'Exploring eco-friendly materials and energy-efficient systems for large-scale food service facilities.', 'tags' => ['Sustainability', 'Design', 'Kitchen'], 'reading_time_minutes' => 6, 'category_slug' => 'projects'],
            ['title' => 'Workplace Safety and Compliance in 2025', 'excerpt' => 'Key regulatory updates and best practices to keep your facility and workforce compliant and safe.', 'tags' => ['Safety', 'Compliance', 'Workplace'], 'reading_time_minutes' => 5, 'category_slug' => 'payroll-compliance'],
            ['title' => 'From Concept to Handover: Managing Large Facility Projects', 'excerpt' => 'A practical guide to project timelines, stakeholder alignment, and quality control in facility fit-outs.', 'tags' => ['Projects', 'Facility', 'Management'], 'reading_time_minutes' => 9, 'category_slug' => 'projects'],
            ['title' => 'The Role of Technology in Facility Management', 'excerpt' => 'How IoT, CMMS, and smart building systems are transforming day-to-day operations.', 'tags' => ['Technology', 'IoT', 'Facility Management'], 'reading_time_minutes' => 7, 'category_slug' => 'facility-management'],
            ['title' => 'Employee Welfare and Retention in Facility Teams', 'excerpt' => 'Strategies for training, benefits, and career growth that reduce turnover and build strong teams.', 'tags' => ['HR', 'Retention', 'Facility Management'], 'reading_time_minutes' => 6, 'category_slug' => 'blog'],
            ['title' => 'HVAC and MEP Maintenance: Planning and Execution', 'excerpt' => 'Scheduled maintenance, vendor management, and cost-effective approaches for building systems.', 'tags' => ['HVAC', 'MEP', 'Maintenance'], 'reading_time_minutes' => 8, 'category_slug' => 'facility-management'],
            ['title' => 'Cleaning and Hygiene Standards for High-Traffic Spaces', 'excerpt' => 'Protocols and products that meet both regulatory requirements and user expectations.', 'tags' => ['Cleaning', 'Hygiene', 'Compliance'], 'reading_time_minutes' => 5, 'category_slug' => 'facility-management'],
            ['title' => 'Contract Management and SLA Best Practices', 'excerpt' => 'Structuring agreements with service providers for clarity, accountability, and performance.', 'tags' => ['Contracts', 'SLA', 'Vendor Management'], 'reading_time_minutes' => 7, 'category_slug' => 'blog'],
            ['title' => 'Case Study: Transforming a Corporate Campus Cafeteria', 'excerpt' => 'How we redesigned and operated a 500-seat cafeteria for a leading tech campus.', 'tags' => ['Case Study', 'Cafeteria', 'Projects'], 'reading_time_minutes' => 10, 'category_slug' => 'projects'],
            ['title' => 'Payroll Integration with Time and Attendance Systems', 'excerpt' => 'Linking attendance, leave, and overtime to payroll for accuracy and compliance.', 'tags' => ['Payroll', 'Attendance', 'Integration'], 'reading_time_minutes' => 6, 'category_slug' => 'payroll-compliance'],
            ['title' => 'Security and Access Control in Multi-Site Facilities', 'excerpt' => 'Unified access policies, visitor management, and incident response across locations.', 'tags' => ['Security', 'Access Control', 'Facility Management'], 'reading_time_minutes' => 7, 'category_slug' => 'facility-management'],
            ['title' => 'Waste Management and Recycling in Commercial Buildings', 'excerpt' => 'Efficient segregation, vendor tie-ups, and reporting for sustainability goals.', 'tags' => ['Waste', 'Recycling', 'Sustainability'], 'reading_time_minutes' => 5, 'category_slug' => 'blog'],
            ['title' => 'Scaling Operations: From Single Site to Multi-Site', 'excerpt' => 'Lessons learned in standardising processes and building regional teams.', 'tags' => ['Scaling', 'Operations', 'Management'], 'reading_time_minutes' => 8, 'category_slug' => 'projects'],
            ['title' => 'Audit-Ready Documentation for Facility and Payroll', 'excerpt' => 'What to maintain, how to organise it, and how to respond to audits smoothly.', 'tags' => ['Audit', 'Documentation', 'Compliance'], 'reading_time_minutes' => 6, 'category_slug' => 'payroll-compliance'],
            ['title' => 'Future of Work: Flexible Spaces and Hybrid Facilities', 'excerpt' => 'Design and operations for spaces that support hybrid work and collaboration.', 'tags' => ['Future of Work', 'Hybrid', 'Design'], 'reading_time_minutes' => 7, 'category_slug' => 'blog'],
        ];

        $paragraph = 'Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.';

        foreach ($entries as $index => $entry) {
            $n = $index + 1;
            $imagePath = 'blogs/blog-' . $n . '.jpg';

            $categoryId = $defaultCategoryId;
            if (!empty($entry['category_slug']) && isset($categoryBySlug[$entry['category_slug']])) {
                $categoryId = $categoryBySlug[$entry['category_slug']];
            }

            Blog::create([
                'author_id' => 0,
                'parent_id' => 0,
                'category_id' => $categoryId,
                'title' => $entry['title'],
                'slug' => Str::slug($entry['title']),
                'excerpt' => $entry['excerpt'],
                'content' => '<p>' . $paragraph . '</p><p>' . $paragraph . '</p><p>' . $paragraph . '</p>',
                'thumbnail' => $imagePath,
                'featured_image' => $imagePath,
                'published_at' => now()->subDays(rand(1, 90)),
                'featured' => 0,
                'reading_time_minutes' => $entry['reading_time_minutes'],
                'views_count' => 0,
                'meta' => null,
                'tags' => $entry['tags'],
                'meta_title' => $entry['title'],
                'meta_description' => Str::limit($entry['excerpt'], 160),
                'meta_keywords' => null,
                'canonical_url' => null,
                'open_graph' => null,
                'status' => 'Active',
            ]);
        }
    }
}
