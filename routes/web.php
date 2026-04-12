<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;


Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class);
});
require __DIR__.'/settings.php';
