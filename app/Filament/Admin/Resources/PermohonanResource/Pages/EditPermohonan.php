<?php

namespace App\Filament\Admin\Resources\PermohonanResource\Pages;

use App\Filament\Admin\Resources\PermohonanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermohonan extends EditRecord
{
    protected static string $resource = PermohonanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
