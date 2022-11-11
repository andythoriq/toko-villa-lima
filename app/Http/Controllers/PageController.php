<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('halaman.beranda', ['title' => 'Beranda']);
    }
    public function gallery()
    {
        return view('halaman.gallery', ['title' => 'Ballery']);
    }
    public function contact()
    {
        return view('halaman.contact', ['title' => 'Bontact']);
    }
}
