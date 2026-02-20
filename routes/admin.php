<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CaseStudyCategoryController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\AccessRequestController;
use App\Http\Controllers\Admin\ContactEnquiryController;
use App\Http\Controllers\Admin\ConsultationRequestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsletterSubscriberController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Auth\Admin\ForgotPasswordController;
use App\Http\Controllers\Auth\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/', 'showLoginForm')->name('admin');
        Route::post('/login', 'login')->name('login');
    });
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('/forgot-password', 'showForgotPasswordForm')->name('forgot-password');
        Route::post('/forgot-password', 'forgotPassword')->name('forgot-password');

        Route::get('/forgot-password-otp', 'showForgotPasswordOtpForm')->name('forgot-password-otp');
        Route::post('/forgot-password-otp', 'forgotPasswordOtp')->name('forgot-password-otp');

        Route::get('/reset-password', 'showResetPasswordForm')->name('reset-password');
        Route::post('/reset-password', 'resetPassword')->name('reset-password');
    });

});

Route::middleware(['admin'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(RoleController::class)->prefix('roles')->name('roles.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{role}', 'show')->name('show');
        Route::get('/{role}/edit', 'edit')->name('edit');
        Route::put('/{role}', 'update')->name('update');
        Route::delete('/{role}', 'destroy')->name('destroy');
    });

    Route::controller(BlogCategoryController::class)->prefix('blog-categories')->name('blog-categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blog_category}', 'show')->name('show');
        Route::get('/{blog_category}/edit', 'edit')->name('edit');
        Route::put('/{blog_category}', 'update')->name('update');
        Route::delete('/{blog_category}', 'destroy')->name('destroy');
    });

    Route::post('editor/upload-image', [BlogController::class, 'uploadContentImage'])->name('editor.upload-image');

    Route::controller(BlogController::class)->prefix('blogs')->name('blogs.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::post('/upload-content-image', 'uploadContentImage')->name('upload-content-image');
        Route::get('/{blog}', 'show')->name('show');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog}', 'destroy')->name('destroy');
    });

    Route::controller(CaseStudyCategoryController::class)->prefix('case-study-categories')->name('case-study-categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{case_study_category}', 'show')->name('show');
        Route::get('/{case_study_category}/edit', 'edit')->name('edit');
        Route::put('/{case_study_category}', 'update')->name('update');
        Route::delete('/{case_study_category}', 'destroy')->name('destroy');
    });

    Route::controller(ProjectCategoryController::class)->prefix('project-categories')->name('project-categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{project_category}', 'show')->name('show');
        Route::get('/{project_category}/edit', 'edit')->name('edit');
        Route::put('/{project_category}', 'update')->name('update');
        Route::delete('/{project_category}', 'destroy')->name('destroy');
    });

    Route::controller(CaseStudyController::class)->prefix('case-studies')->name('case-studies.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{case_study}', 'show')->name('show');
        Route::get('/{case_study}/edit', 'edit')->name('edit');
        Route::put('/{case_study}', 'update')->name('update');
        Route::delete('/{case_study}', 'destroy')->name('destroy');
    });

    Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{project}', 'show')->name('show');
        Route::get('/{project}/edit', 'edit')->name('edit');
        Route::put('/{project}', 'update')->name('update');
        Route::delete('/{project}', 'destroy')->name('destroy');
    });

    Route::controller(AccessRequestController::class)->prefix('access-requests')->name('access-requests.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{access_request}', 'show')->name('show');
        Route::delete('/{access_request}', 'destroy')->name('destroy');
    });

    Route::controller(ConsultationRequestController::class)->prefix('consultation-requests')->name('consultation-requests.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{consultation_request}', 'show')->name('show');
        Route::delete('/{consultation_request}', 'destroy')->name('destroy');
    });

    Route::controller(ContactEnquiryController::class)->prefix('contact-enquiries')->name('contact-enquiries.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{contact_enquiry}', 'show')->name('show');
        Route::delete('/{contact_enquiry}', 'destroy')->name('destroy');
    });

    Route::controller(NewsletterSubscriberController::class)->prefix('newsletter-subscribers')->name('newsletter-subscribers.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{newsletter_subscriber}', 'show')->name('show');
        Route::delete('/{newsletter_subscriber}', 'destroy')->name('destroy');
    });

    Route::controller(ClientController::class)->prefix('clients')->name('clients.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{client}', 'show')->name('show');
        Route::get('/{client}/edit', 'edit')->name('edit');
        Route::put('/{client}', 'update')->name('update');
        Route::delete('/{client}', 'destroy')->name('destroy');
    });

});
