<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\FinanceCategory;
use App\Models\PdfFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        return redirect()->route('anggaran.year', ['year' => 2024]);
    }

    public function anggaranYear($year)
    {
        // variable use for store sum of the anggaran
        $jumlahAnggaran = [];
        // use for get all possible year in db
        $uniqueYears = Finance::select('year')->distinct()->pluck('year');
        // use for view document pendapatan
        $documents = PdfFile::whereHas('pdfCategory', function ($query) {
            $query->where("name", "Pendapatan");
        })->get();

        // get all data that in Pendapatan Desa category
        $pendapatanDesa = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Pendapatan Desa");
        })->get();
        $jumlahAnggaran[] = $pendapatanDesa->sum('amount');

        // get all data that in Belanja Desa category
        $belanjaDesa = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Belanja Desa");
        })->get();
        $jumlahAnggaran[] = $belanjaDesa->sum('amount');

        // get all data that in Pembiayaan Desa category
        $pembiayaanDesa = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Pembiayaan Desa");
        })->get();
        $jumlahAnggaran[] = $pembiayaanDesa->sum('amount');

        return view('anggaran', ['style' => 'anggaran', 'pendapatanDesa' => $pendapatanDesa, 'jumlahAnggaran' => $jumlahAnggaran, 'belanjaDesa' => $belanjaDesa, 'pembiayaanDesa' => $pembiayaanDesa, 'year' => $year, 'uniqueYear' => $uniqueYears, "docs" => $documents]);
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
