<?php

namespace App\Filament\Resources\PdfFileResource\Pages;

use App\Filament\Resources\PdfFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdfFiles extends ListRecords
{
    protected static string $resource = PdfFileResource::class;
    protected static ?string $title = 'List Berkas';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Tambah Berkas"),
        ];
    }
}
