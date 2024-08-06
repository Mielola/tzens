<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class organisasi extends Model
{
    use HasFactory;
    protected $table = 'organisasi';
    protected $fillable = ['slug', 'nama_organisasi', 'deskripsi', 'email_organisasi', 'tanggal_mulai', 'tanggal_berakhir', 'benefit'];

    private function find($id)
    {
        $organisasi = organisasi::findOrFail($id);

    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $slug = Str::slug($model->nama_organisasi, '-');
            $originalSlug = $slug;
            $count = 1;

            while (organisasi::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            $model->slug = $slug;
        });
    }

}


