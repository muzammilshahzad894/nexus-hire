<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\JobController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/jobboard', [FrontendController::class, 'jobboard'])->name('frontend.jobboard');
Route::post('/job/apply', [JobController::class, 'apply'])->name('frontend.job.apply');