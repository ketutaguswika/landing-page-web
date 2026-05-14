<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tipe');
            $table->string('harga');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->integer('kamar_tidur'); // Tambah ini
            $table->integer('kamar_mandi'); // Tambah ini
            $table->string('gambar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};