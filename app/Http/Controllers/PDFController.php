<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            "nomor_sk" => "001",
            "nama" => "Patrick",
            "nik" => "123456789123",
            "ttl" => "Bikini Bottom, 30 Februari 2004",
            "gender" => "Laki-laki",
            "kewarganegaraan" => "USA",
            "pekerjaan" => "Kasir",
            "agama" => "Islam",
            "alamat" => "Jl. Bikini Bottom no 32",
            "keperluan" => "Membeli beras",
            "nkk" => "123351234912",
            "tgl_hilang" => "Senin/30 Februari",
            "wkt_hilang" => "20:00",
            "tmp_hilang" => "Desa Wringinanom",
            "tgl_surat" => "21 Februari 2024",
        ];

        $pdf = Pdf::loadView('pdf.document', ['data' => $data]);
        return $pdf->download('document.pdf');
    }

    public function viewPDF()
    {
        $dataPdf = [
            "nomor_sk" => "001",
            "nama" => "Patrick",
            "nik" => "123456789123",
            "ttl" => "Bikini Bottom, 30 Februari 2004",
            "gender" => "Laki-laki",
            "kewarganegaraan" => "USA",
            "pekerjaan" => "Kasir",
            "agama" => "Islam",
            "alamat" => "Jl. Bikini Bottom no 32",
            "keperluan" => "Membeli beras",
            "nkk" => "123351234912",
            "tgl_hilang" => "Senin/30 Februari",
            "wkt_hilang" => "20:00",
            "tmp_hilang" => "Desa Wringinanom",
            "tgl_surat" => "21 Februari 2024",
        ];

        return view('pdf.document', ['data' => $dataPdf]);
    }
}