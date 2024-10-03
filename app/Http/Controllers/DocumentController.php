<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Services\DocumentService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


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
        return view("surat-menyurat.domisili", data: ['style' => 'surat-menyurat']);
    }
    public function showSuratUsaha()
    {
        return view("surat-menyurat.usaha", data: ['style' => 'surat-menyurat']);
    }
    public function showSuratSolar()
    {
        return view("surat-menyurat.kehilangan", data: ['style' => 'surat-menyurat']);
    }

    public function sendSurat(Request $request) 
    {
        try {
            $validated = $request->validate([
                "nama_lengkap" => "required|string|max:50",
                "ttl" => "required|string|max:50",
                "nik" => "required|string|max:16",
                "gender" => "required|string|max:10",
                "pekerjaan" => "required|string|max:50",
                "agama" => "required|string|max:50",
                "alamat" => "required|string|max:100",
                "keperluan" => "required|string|max:100",
                "document_category_id" => "required|string",
    
                // document kehilangan
                "nkk" => "nullable|string|max:16",
                "kewarganegaraan" => "nullable|string|max:50",
                "tanggal_hilang" => "nullable|string|max:50",
                "barang_hilang" => "nullable|string|max:50",
                "waktu_hilang" => "nullable|string|max:50",
                "tempat_hilang" => "nullable|string|max:50",
                "no_whatsapp" => "nullable|string|max:50",
                
                // document domisili
                "status" => "nullable|string|max:50",
    
                // document usaha
                "nama_usaha" => "nullable|string|max:50",
                "jenis_usaha" => "nullable|string|max:50",
                "klasifikasi" => "nullable|string|max:50",
                "penanggung_jawab" => "nullable|string|max:50",
                "alamat_usaha" => "nullable|string|max:100",
                "berlaku_mulai" => "nullable|string|max:50",
            ]);

            // dd($validated);
    
            Document::query()->insert($validated);
            return redirect()->route('surat.menyurat')->with(['success' => "Data Berhasil Dikirim"]);
        } catch (ValidationException $e) {
            return redirect()->route('surat.menyurat',)->withErrors(["errors" => $e->getMessage()]);
        }
    }

    
    public function showPdfSolar()
    {
        $data = [];
        $pdf = Pdf::loadView('pdf.solar', ['data' => $data]);
        return $pdf->stream();
    }

    public function showHtmlSolar()
    {
        return view('pdf.solar');
    }

    public function downloadPdf($id, $typeDocs) 
    {
        $dataPdf = Document::findOrFail($id);

        if(!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.' . $typeDocs , ['data' => $dataPdf]);
        return $pdf->download($dataPdf->nama_lengkap . '_' . $dataPdf->nik . '_' . $dataPdf->category->name . '.pdf');
    }
}
