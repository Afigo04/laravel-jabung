<?php

namespace App\Http\Controllers;

use App\Models\SkKehilangan;
use App\Services\DocumentService;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    protected $documentService;

    public function __construct(DocumentService $documentService)
    {
        $this->documentService = $documentService;
    }
    public function showSuratMenyurat()
    {
        return view('surat-menyurat', ['style' => 'surat-menyurat']);
    }

    public function showSuratKehilangan()
    {
        return view("surat-menyurat.kehilangan", data: ['style' => 'surat-menyurat']);
    }
    public function showSuratDomisili() 
    {
        return view("surat-menyurat.kehilangan", data: ['style' => 'surat-menyurat']);
    }
    public function showSuratUsaha()
    {
        return view("surat-menyurat.kehilangan", data: ['style' => 'surat-menyurat']);
    }
    public function showSuratSolar()
    {
        return view("surat-menyurat.kehilangan", data: ['style' => 'surat-menyurat']);
    }

    public function createKehilangan(Request $request) 
    {
        $validated = $request->validate([
            "nomor_sk" => 'nullable|numeric',
            "nama_lengkap" => 'required|string|max:100',
            "nik" => 'required|string|max:100',
            "nkk" => 'required|string|max:100',
            "ttl" => 'required|string|max:100',
            "gender" => 'required|string|max:100',
            "kewarganegaraan" => 'required|string|max:100',
            "pekerjaan" => 'required|string|max:100',
            "agama" => 'required|string|max:100',
            "alamat" => 'required|string|max:100',
            "barang_hilang" => 'required|string|max:100',
            "tanggal_hilang" => 'required|string|max:100',
            "waktu_hilang" => 'required|string|max:100',
            "tempat_hilang" => 'required|string|max:100',
            "keperluan" => 'required|string|max:100',
            "no_whatsapp" => 'required|string|max:100',
            "tanggal_surat" => 'nullable|string|max:100',
            "status" => 'nullable|numeric',
        ]);

        SkKehilangan::create($validated);
        
        return redirect()->route('surat.menyurat.skk');
    }
}
