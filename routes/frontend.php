<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\JobController;
use App\Http\Controllers\LogViewerController;

Route::get('logs', [LogViewerController::class, 'index']);

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'contactPost'])->name('frontend.contactPost');
Route::get('/jobboard', [FrontendController::class, 'jobboard'])->name('frontend.jobboard');
Route::post('/job/apply', [JobController::class, 'apply'])->name('frontend.job.apply');