<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function ohi()
    {
        return view('ohi');
    }
}
