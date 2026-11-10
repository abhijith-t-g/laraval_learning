<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-traditional', function () {
    return view('test-traditional');
});

Route::get('/test-modern', function () {
    return view('test-modern');
});
