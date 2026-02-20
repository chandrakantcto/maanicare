<?php

namespace App\Providers;

use App\Services\FeaturedCaseStudiesService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('partials.insights-that-build-trust', function ($view) {
            $view->with('featuredCaseStudies', app(FeaturedCaseStudiesService::class)->getFeatured());
        });
    }
}
