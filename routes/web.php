<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/chi-sono', 'HomeController@about');
Route::get('/contatti', 'HomeController@contact');
Route::get('/ohi', 'HomeController@ohi');
