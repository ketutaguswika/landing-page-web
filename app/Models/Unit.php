<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nama_tipe',
        'harga',
        'luas_tanah',
        'luas_bangunan',
        'kamar_tidur', // Tambah ini
        'kamar_mandi', // Tambah ini
        'gambar',
    ];
}