<?php

namespace App\Filament\Resources\FinanceCategoryResource\Pages;

use App\Filament\Resources\FinanceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinanceCategories extends ListRecords
{
    protected static string $resource = FinanceCategoryResource::class;
    protected static ?string $title = 'List Kategori Pendapatan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Tambah Kategori"),
        ];
    }
}
