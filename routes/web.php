<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/chi-è-mirko', [HomeController::class, 'about']);
Route::get('/contattami', [HomeController::class, 'contact']);
Route::get('/ohi', [HomeController::class, 'ohi']);
