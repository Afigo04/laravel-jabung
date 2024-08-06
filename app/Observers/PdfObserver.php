<?php

namespace App\Observers;

use App\Models\PdfFile;
use Illuminate\Support\Facades\Storage;

class PdfObserver
{
    /**
     * Handle the PdfFile "created" event.
     */
    public function created(PdfFile $pdfFile): void
    {
        //
    }

    /**
     * Handle the PdfFile "updated" event.
     */
    public function updated(PdfFile $pdfFile): void
    {
        if ($pdfFile->isDirty('photo_path')) {
            Storage::disk('public')->delete($pdfFile->getOriginal('photo_path'));
        }
    }

    /**
     * Handle the PdfFile "deleted" event.
     */
    public function deleted(PdfFile $pdfFile): void
    {
        if (!is_null($pdfFile->photo_path)) {
            Storage::disk('public')->delete($pdfFile->photo_path);
        }
    }

    /**
     * Handle the PdfFile "restored" event.
     */
    public function restored(PdfFile $pdfFile): void
    {
        //
    }

    /**
     * Handle the PdfFile "force deleted" event.
     */
    public function forceDeleted(PdfFile $pdfFile): void
    {
        //
    }
}
