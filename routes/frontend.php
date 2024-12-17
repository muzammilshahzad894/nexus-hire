<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/jobboard', [FrontendController::class, 'jobboard'])->name('frontend.jobboard');