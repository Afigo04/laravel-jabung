<?php

namespace App\Filament\Resources\PdfCategoryResource\Pages;

use App\Filament\Resources\PdfCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPdfCategory extends EditRecord
{
    protected static string $resource = PdfCategoryResource::class;
    protected static ?string $title = 'Edit Kategori Berkas';


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label("Hapus Kategori"),
        ];
    }
}
