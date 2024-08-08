<?php

namespace App\Services;

use App\Models\PdfFile;
use Illuminate\Database\Eloquent\Collection;

class DocumentService
{
    // Get Document based on the category
    public function getDocsByCategory(string $category, int $amount = 20): Collection
    {
        $docs = PdfFile::whereHas('pdfCategory', function ($query) use ($category) {
            $query->where("name", $category);
        })->take($amount)->get();

        return $docs;
    }
}
