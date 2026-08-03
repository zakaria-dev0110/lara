<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});

Route::get('/about', function() {
    $jobs = array(
        [
            "id" => 1,
            "Job" => "Software Engineer",
            "Salary" => "25,000"
        ],
        [
            "id" => 2,
            "Job" => "Veterinary Doctor",
            "Salary" => "15,000"
        ],
        [
            "id" => 3,
            "Job" => "Teacher",
            "Salary" => "6,000"
        ],
    );
    return view('about', ['jobs' => $jobs]);
});

Route::get('/contact', fn() => view('contact'));