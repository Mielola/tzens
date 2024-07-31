<?php

use App\Models\Organisasi;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('page/welcome', ['title' => 'Home Page']);
});

Route::get('/organisasi', function () {
    return view('page/organisasi', [
        'title' => 'Organisasi Page',
        'post' => Organisasi::ViewOrganisasi()
    ]);
});

Route::get('/organisasi/{slug}', function ($slug) {

    $organ = Organisasi::find($slug);

    return view('page/detailOrganisasi', ['title' => 'Detail Organisasi', 'post' => $organ]);
});


Route::get('/webinar', function () {
    return view('page/webinar', ['title' => 'Webinar Page']);
});
