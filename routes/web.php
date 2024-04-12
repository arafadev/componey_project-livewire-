<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// Site Routes
Route::prefix('/')->name('front.')->group(function () {
    Route::view('', 'front.index')->name('index');
    Route::view('about', 'front.about')->name('about');
    Route::view('contact', 'front.contact')->name('contact');
    Route::view('projects', 'front.projects')->name('projects');
    Route::view('services', 'front.services')->name('services');
    Route::view('team', 'front.team')->name('team');
    Route::view('testimonial', 'front.testimonial')->name('testimonial');
});

// Admins Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::view('', 'admin.index')->name('index');
    Route::view('login', 'admin.auth.login')->name('login');
});
