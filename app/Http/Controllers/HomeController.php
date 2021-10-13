<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function services()
    {
        return view('layouts.services');
    }
}
