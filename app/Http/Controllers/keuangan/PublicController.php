<?php

namespace App\Http\Controllers\keuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index()
    {
        return view('index', ['style' => 'index']);
    }
    public function about()
    {
        return view('about', ['style' => 'about']);
    }
    public function suratMenyurat()
    {
        return view('surat-menyurat', ['style' => 'surat-menyurat']);
    }
    public function anggaran()
    {
        return view('anggaran', ['style' => 'anggaran']);
    }
    public function galery()
    {
        return view('galery', ['style' => 'galery']);
    }
    public function pengaduan()
    {
        return view('pengaduan', ['style' => 'pengaduan']);
    }
    public function selengkapnya()
    {
        return view('selengkapnya', ['style' => 'selengkapnya']);
    }
}
