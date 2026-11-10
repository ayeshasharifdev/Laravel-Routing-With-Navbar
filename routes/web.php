<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Us Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');