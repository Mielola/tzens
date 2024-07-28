<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/welcome', ['title' => 'Home Page']);
});

Route::get('/organisasi', function () {
    return view('page/organisasi', ['title' => 'Organisasi Page']);
});

Route::get('/webinar', function () {
    return view('page/webinar', ['title' => 'Webinar Page']);
});
