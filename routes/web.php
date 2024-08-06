<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\OrganisasiController;
use App\Models\Organisasi;
use Illuminate\Support\Facades\Route;



// Rute Awal
Route::get('/', function () {
    return view('page/welcome', ['title' => 'Home Page']);
});

// Organisasi
Route::get('/organisasi', [OrganisasiController::class, 'show']);
Route::get('/organisasi/{slug}', [OrganisasiController::class, 'index']);
Route::get('/search', [OrganisasiController::class, 'search'])->name('search');

// Webinar
Route::get('/webinar', [AcaraController::class, 'show']);


// Route::middleware(['auth'])->group(function () {
//     Route::get('/d', function () {
//         return view('page/welcome', ['title' => 'Home Page']);
//     })->name('custom.page');
// });

// Sign Up
// Route::get('/sign-up', function () {
//     return view('page/signUp', ['title' => 'Sign Up']);
// });
