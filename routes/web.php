<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// web.php
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chi-è-mirko', function () {
    return view('about');
})->name('chi-è-mirko');

Route::get('/contattami', function () {
    return view('contact');
})->name('contattami');

Route::get('/OHI', function () {
    return view('ohi');
})->name('ohi');

Route::get('/curriculum', function () {
    return view('curriculum');
});

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'sendMail']);
