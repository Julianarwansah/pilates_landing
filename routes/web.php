<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pilates');
});

Route::get('/welcome', function () {
    return view('welcome');
});
