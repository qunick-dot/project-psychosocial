<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Admin\BlogController;


use Illuminate\Support\Facades\Route;

// ==========================
// Frontend Routes
// ==========================
Route::view('/', 'index');
Route::view('/index', 'index');
Route::view('/about', 'about');
Route::view('/service', 'service');
Route::view('/contact', 'contact');
Route::view('/blog', 'blog');
Route::view('/appointment-book', 'appointment-book');

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

Route::get('/blog', [BlogsController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogsController::class, 'show'])->name('blog.show');

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
    Route::resource('blog', BlogController::class)->names([
        'index' => 'admin.blog.index',
        'create' => 'admin.blog.create',
        'store' => 'admin.blog.store',
        'show' => 'admin.blog.show',
        'edit' => 'admin.blog.edit',
        'update' => 'admin.blog.update',
        'destroy' => 'admin.blog.destroy',
    ]);
    // Admin Contact Routes
    Route::prefix('dashboards/users')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contacts.index');
        Route::get('/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
        Route::post('/', [ContactController::class, 'store'])->name('admin.contacts.store');
        Route::delete('/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    });
});
