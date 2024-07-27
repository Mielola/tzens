<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home Page']);
});

Route::get('/organisasi', function () {
    return view('organisasi', ['title' => 'Organisasi Page']);
});
