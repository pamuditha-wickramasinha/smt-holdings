<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// All routes point to home for testing
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/services', [HomeController::class, 'index'])->name('services');
Route::get('/blog', [HomeController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [HomeController::class, 'index'])->name('blog.show');
Route::get('/contact', [HomeController::class, 'index'])->name('contact');
Route::post('/contact', [HomeController::class, 'index'])->name('contact.submit');
Route::post('/newsletter/subscribe', [HomeController::class, 'index'])->name('newsletter.subscribe');
Route::get('/search', [HomeController::class, 'index'])->name('search');

// Serve images from resources/images/ at URL /images/{path}
Route::get('images/{path}', [ImageController::class, 'show'])
    ->where('path', '.*')
    ->name('images.show');

// Dynamic theme colors served as CSS via Blade view
Route::get('/css/dynamic-colors.css', function () {
    return response()->view('css.dynamic-colors')->header('Content-Type', 'text/css');
})->name('theme.colors');