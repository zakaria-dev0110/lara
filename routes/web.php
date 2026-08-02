<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});

Route::get('/about', fn() => view('about'));

Route::get('/contact', fn() => view('contact'));