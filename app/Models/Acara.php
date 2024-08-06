<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acara extends Model
{
    use HasFactory;
    protected $table = 'acara';
    protected $fillable = ['nama_acara', 'deskripsi', 'email acara', 'tanggal mulai', 'tanggal_berakhir', 'benefit', 'image_acara'];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->nama_acara, '-');
        });
    }
}