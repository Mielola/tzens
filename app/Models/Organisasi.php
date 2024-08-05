<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisasi extends Model
{
    use HasFactory;
    protected $table = 'organisasi';
    protected $fillable = ['nama_organisasi', 'deskripsi', 'email_organisasi', 'tanggal_mulai', 'tanggal_berakhir', 'benefit'];

    private function find($id)
    {
        $organisasi = organisasi::findOrFail($id);

    }
}


