<?php

namespace App\Filament\Resources\PdfCategoryResource\Pages;

use App\Filament\Resources\PdfCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdfCategories extends ListRecords
{
    protected static string $resource = PdfCategoryResource::class;
    protected static ?string $title = 'List Kategori Berkas';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Tambah Kategori"),
        ];
    }
}
