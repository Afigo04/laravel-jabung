<?php

namespace App\Http\Controllers;

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
        $docs = $this->documentService->getDocsByCategory("Penyuratan");
        return view('surat-menyurat', ['style' => 'surat-menyurat', 'berkas' => $docs]);
    }
}
