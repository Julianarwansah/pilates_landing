<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pilates');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/welcome', function () {
    return view('welcome');
});
