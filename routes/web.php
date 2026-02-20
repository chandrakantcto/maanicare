<?php

use App\Http\Controllers\CmsPagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiveController;
use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::post('/consultation-request', [App\Http\Controllers\ConsultationRequestController::class, 'store'])->name('consultation-request.store');
Route::post('/contact-enquiry', [App\Http\Controllers\ContactEnquiryController::class, 'store'])->name('contact-enquiry.store');
Route::post('/newsletter-subscribe', [App\Http\Controllers\NewsletterSubscriberController::class, 'store'])->name('newsletter-subscribe.store');

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blogs/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/case-studies', [App\Http\Controllers\CaseStudyController::class, 'index'])->name('case-studies');
Route::get('/case-studies/{slug}', [App\Http\Controllers\CaseStudyController::class, 'show'])->name('case-studies.show');

Route::controller(ServiveController::class)->prefix('services')
    ->name('services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/project-and-fit-out', 'projectAndFitOut')->name('project-and-fit-out');
        Route::get('/integrated-facility-management', 'integratedFacilityManagement')->name('integrated-facility-management');
        Route::get('/staffing-payroll-and-compliance', 'staffingPayrollAndCompliance')->name('staffing-payroll-and-compliance');
        Route::get('/on-demand', 'onDemand')->name('on-demand');
    });

Route::get('/our-story', [App\Http\Controllers\OurStoryController::class, 'index'])->name('our-story');
Route::get('/our-team', [App\Http\Controllers\OurTeamController::class, 'index'])->name('our-team');
Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients');

Route::controller(ProjectController::class)->prefix('projects')
    ->name('projects.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{project}', 'show')->name('show');
    });
Route::post('/projects/access-request', [App\Http\Controllers\ProjectAccessRequestController::class, 'store'])->name('projects.access-request.store');
Route::post('/projects/access-request/verify-otp', [App\Http\Controllers\ProjectAccessRequestController::class, 'verifyOtp'])->name('projects.access-request.verify-otp');


Route::controller(CmsPagesController::class)->group(function () {
    Route::get('/disclaimer', 'disclaimerPage')->name('disclaimer');
    Route::get('/privacy-policy', 'privacyPolicyPage')->name('privacy-policy');
    Route::get('/terms-and-conditions', 'termsAndConditionsPage')->name('terms-and-conditions');

});







