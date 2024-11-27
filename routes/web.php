<?php

use Illuminate\Support\Facades\Route;

// web.php
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chi-è-mirko', function () {
    return view('about');
})->name('chi-è-mirko');

Route::get('/OHI', function () {
    return view('ohi');
})->name('ohi');

Route::get('/curriculum', function () {
    return view('curriculum');
});
