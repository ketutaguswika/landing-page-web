<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        Unit::create([
            'nama_tipe' => 'Capela',
            'harga' => '1.5M',
            'luas_tanah' => '150',
            'luas_bangunan' => '120',
            'kamar_tidur' => 3, 
            'kamar_mandi' => 2, 
            'gambar' => 'Capela.jpg',
        ]);

        Unit::create([
            'nama_tipe' => 'The Maple',
            'harga' => '950JT',
            'luas_tanah' => '120',
            'luas_bangunan' => '90',
            'kamar_tidur' => 2, // Tambah ini
            'kamar_mandi' => 1, // Tambah ini
            'gambar' => 'The-Maple.jpg', 
        ]);
    }
}