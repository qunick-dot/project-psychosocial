<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\BlogController;



use Illuminate\Support\Facades\Route;

// ==========================
// Frontend Routes
// ==========================
Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/about', 'about');
Route::view('/service', 'service');
Route::view('/contact', 'contact');
// Route::view('/blog', 'blog');
Route::view('/appointment-book', 'appointment-book');
Route::view('/team-member', 'team-member');

// ==========================
// Contact Routes
// ==========================
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ==========================
// Consultation Routes
// ==========================
Route::prefix('consultations')->group(function () {
    Route::get('/', [ConsultationController::class, 'create'])->name('consultations.create');
    Route::post('/', [ConsultationController::class, 'store'])->name('consultations.store');
    Route::post('/{id}/status', [ConsultationController::class, 'updateStatus'])->name('consultations.update-status');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');


Route::get('/counselors', [\App\Http\Controllers\CounselorController::class, 'index'])->name('counselors.index');
Route::get('/counselors/{slug}', [\App\Http\Controllers\CounselorController::class, 'show'])->name('counselors.show');

Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ClientReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ClientReviewController::class, 'store'])->name('reviews.store');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/category/{slug}', [BlogController::class, 'byCategory'])->name('blogs.by-category');
Route::get('/tag/{slug}', [BlogController::class, 'byTag'])->name('blogs.by-tag');
// ==========================
// Admin Auth Routes
// ==========================
Route::middleware('web')->prefix('admin/auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.auth.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.auth.login.post');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.auth.logout');
});

// ==========================
// Admin Routes (Protected)
// ==========================
Route::middleware(['web', 'admin'])->prefix('admin')->group(function () {
    
    // Admin Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [ConsultationController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('services', ServicesController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'show' => 'admin.services.show',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);
    
    Route::resource('counselors', \App\Http\Controllers\Admin\CounselorController::class)->names([
        'index' => 'admin.counselors.index',
        'create' => 'admin.counselors.create',
        'store' => 'admin.counselors.store',
        'show' => 'admin.counselors.show',
        'edit' => 'admin.counselors.edit',
        'update' => 'admin.counselors.update',
        'destroy' => 'admin.counselors.destroy',
    ]);

    Route::resource('reviews', \App\Http\Controllers\Admin\ReviewController::class)->names([
        'index' => 'admin.reviews.index',
        'create' => 'admin.reviews.create',
        'store' => 'admin.reviews.store',
        'show' => 'admin.reviews.show',
        'edit' => 'admin.reviews.edit',
        'update' => 'admin.reviews.update',
        'destroy' => 'admin.reviews.destroy',
    ]);
    Route::resource('categories', CategoryController::class)->names([
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'show' => 'admin.categories.show',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]);
    
    // Tag Routes
    Route::resource('tags', TagController::class)->names([
        'index' => 'admin.tags.index',
        'create' => 'admin.tags.create',
        'store' => 'admin.tags.store',
        'show' => 'admin.tags.show',
        'edit' => 'admin.tags.edit',
        'update' => 'admin.tags.update',
        'destroy' => 'admin.tags.destroy',
    ]); 
    
    // Blog Routes
    Route::resource('blogs', AdminBlogController::class)->names([
        'index' => 'admin.blogs.index',
        'create' => 'admin.blogs.create',
        'store' => 'admin.blogs.store',
        'show' => 'admin.blogs.show',
        'edit' => 'admin.blogs.edit',
        'update' => 'admin.blogs.update',
        'destroy' => 'admin.blogs.destroy',
    ]);
    
});

    // Admin Contact Routes
    Route::prefix('dashboards/users')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contacts.index');
        Route::get('/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
        Route::post('/', [ContactController::class, 'store'])->name('admin.contacts.store');
        Route::delete('/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    });
Route::get('/blog-schema', function() {
    $columns = \Illuminate\Support\Facades\Schema::getColumnListing('blog_posts');
    return $columns;
});