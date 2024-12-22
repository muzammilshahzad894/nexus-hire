<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\JobApplicationController;

// check if user is already logged in then redirect to dashboard
Route::middleware(['guest'])->group(function () {
    Route::match(['get', 'post'], '/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
});


// protected routes
Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
        
        Route::prefix('jobs')->group(function () {
            Route::get('/', [JobController::class, 'index'])->name('admin.jobs');
            Route::get('/create', [JobController::class, 'create'])->name('admin.jobs.create');
            Route::post('/store', [JobController::class, 'store'])->name('admin.jobs.store');
            Route::get('/edit/{id}', [JobController::class, 'edit'])->name('admin.jobs.edit');
            Route::post('/update/{id}', [JobController::class, 'update'])->name('admin.jobs.update');
            Route::get('/delete/{id}', [JobController::class, 'delete'])->name('admin.jobs.delete');
        });
        
        Route::get('/job-applications', [JobApplicationController::class, 'index'])->name('admin.job-applications');
        Route::get('/job-application/delete/{id}', [JobApplicationController::class, 'delete'])->name('admin.job-application.delete');
    });
});