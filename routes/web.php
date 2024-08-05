<?php

use App\Http\Controllers\OrganisasiController;
use App\Models\Organisasi;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('page/welcome', ['title' => 'Home Page']);
});

// Sign Up
// Route::get('/sign-up', function () {
//     return view('page/signUp', ['title' => 'Sign Up']);
// });

Route::get('/organisasi', [OrganisasiController::class, 'show']);

Route::get('/organisasi/{id}', [OrganisasiController::class, 'index']);


Route::get('/webinar', function () {
    return view('page/webinar', ['title' => 'Webinar Page']);
});
