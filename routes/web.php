<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;



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

    Route::middleware('admin')->group(function () {
        Route::view('', 'admin.index')->name('index');
        Route::view('settings', 'admin.settings.index')->name('settings');
        Route::view('skills', 'admin.skills.index')->name('skills');
        Route::view('subscribers', 'admin.subscribers.index')->name('subscribers');
        Route::view('counters', 'admin.counters.index')->name('counters');
        Route::view('services', 'admin.services.index')->name('services');
        Route::view('messages', 'admin.messages.index')->name('messages');
        Route::view('categories', 'admin.categories.index')->name('categories');
        Route::view('projects', 'admin.projects.index')->name('projects');
    });
    Route::view('login', 'admin.auth.login')->Middleware('guest:admin')->name('login');

});
