<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Organisasi
{
    public static function ViewOrganisasi()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        // Tidak Menggunakan Arrow Function

        // return Arr::first(static::ViewOrganisasi(), function ($organ) use ($slug) {
        //     return $organ['slug'] == $slug;
        // });

        // Menggunakan Arrow Function
        $post = Arr::first(static::ViewOrganisasi(), fn($organ) => $organ['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
