<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return 'Halo! Selamat datang di project Laravel 13 saya.';
});