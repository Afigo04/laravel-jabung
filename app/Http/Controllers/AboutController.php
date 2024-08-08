<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAboutPage()
    {
        return view('about', ['style' => 'about']);
    }

    public function showSelengkapnyaPage()
    {
        return view('selengkapnya', ['style' => 'selengkapnya']);
    }
}
