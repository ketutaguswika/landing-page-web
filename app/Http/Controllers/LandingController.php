<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Menarik semua data unit dari database MySQL
        $units = Unit::all();

        // Mengirim variabel $units ke view welcome.blade.php
        return view('welcome', compact('units'));
    }

    // TAMBAHKAN FUNCTION INI
    public function show($id)
    {
        // Mencari data unit berdasarkan ID, jika tidak ada akan otomatis Error 404
        $unit = Unit::findOrFail($id);

        // Mengirim data satu unit saja ke halaman detail
        return view('units.show', compact('unit'));
    }
}