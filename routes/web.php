<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/welcome', ['title' => 'Home Page']);
});

Route::get('/organisasi', function () {
    return view('page/organisasi', [
        'title' => 'Organisasi Page',
        'post' => [
            [
                'id' => 1,
                'title' => 'Himpunan Rekayasa Perangkat Lunak',
                'author' => 'Muhammad Wildan',
                'date' => '31 Juli 2024',
                'slug' => 'organisasi-1',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti,
                ullam necessitatibus est atque labore eos minus vero sapiente enim, animi magni, autem in dolorum reiciendis
                repellat provident distinctio corporis laboriosam.',

            ],
            [
                'id' => 2,
                'title' => 'Himpunan Teknologi Telekomunikasi',
                'author' => 'Tatang Supratman',
                'date' => '09 Juli 2024',
                'slug' => 'organisasi-2',
                'content' => 'adipisicing elit. Corrupti,
                ullam necessitatibus est atque labore eos minus vero sapiente enim, animi magni, autem in dolorum reiciendis
                repellat provident distinctio corporis laboriosam.',

            ],
        ]
    ]);
});

Route::get('/webinar', function () {
    return view('page/webinar', ['title' => 'Webinar Page']);
});
