<?php

namespace App\Filament\Resources\SkKehilanganResource\Pages;

use App\Filament\Resources\SkKehilanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkKehilangans extends ListRecords
{
    protected static string $resource = SkKehilanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
