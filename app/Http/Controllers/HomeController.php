<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Beranda',
        ]);
    }

    public function berita()
    {
        return view('berita', [
            'title' => 'Berita',
        ]);
    }

    public function galeri()
    {
        return view('galeri', [
            'title' => 'Galeri Inovasi',
        ]);
    }
}
