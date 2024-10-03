<?php

namespace App\Filament\Resources\KendalaResource\Pages;

use App\Filament\Resources\KendalaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKendala extends EditRecord
{
    protected static string $resource = KendalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
