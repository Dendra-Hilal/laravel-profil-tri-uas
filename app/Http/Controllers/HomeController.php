<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    return view('pages.home.index');
    }

    public function about()
    {
    return view('pages.home.about');
    }

    public function alumni()
    {
    return view('pages.home.alumni');
    }
    public function contact()
    {
    return view('pages.home.contact');
    }
    public function mahasiswa()
    {
    return view('pages.home.mahasiswa');
    }
    public function profil()
    {
    return view('pages.home.profil');
    }
    public function services()
    {
    return view('pages.home.services');
    }
}
