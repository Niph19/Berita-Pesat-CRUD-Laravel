<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataBerita extends Model
{
    protected $fillable = [
        'judulBerita',
        'gambarBerita',
        'isiBerita',
        'author',
        'tanggalTerbit',
    ];
}
