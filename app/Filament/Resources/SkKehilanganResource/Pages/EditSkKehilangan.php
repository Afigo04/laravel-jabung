<?php

namespace App\Filament\Resources\SkKehilanganResource\Pages;

use App\Filament\Resources\SkKehilanganResource;
use App\Models\SkKehilangan;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkKehilangan extends EditRecord
{
    protected static string $resource = SkKehilanganResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if($data['status'] && $data['nomor_sk'] != null) {
            dd($data);
        }
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
