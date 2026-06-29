<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{
    protected $table = 'fashion';
    protected $primaryKey = 'id_fashion';

    protected $fillable = [
        'gambar',
        'nama_item',
        'ukuran',
        'warna',
        'brand',
    ];
}