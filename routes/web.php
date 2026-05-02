<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;


use App\Http\Controllers\Portfolio\HomeController;
use App\Http\Controllers\Portfolio\AboutController;
use App\Http\Controllers\Portfolio\ProjectsController;
use App\Http\Controllers\Portfolio\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('portfolio.home');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
});

Route::name('portfolio.')->group(function () {
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});
require __DIR__.'/settings.php';
