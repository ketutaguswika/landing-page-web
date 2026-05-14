<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function promo()
    {
        return view('pages.promo');
    }

    public function berita()
    {
        return view('pages.berita');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }
}
