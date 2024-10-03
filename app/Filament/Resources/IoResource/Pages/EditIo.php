<?php

namespace App\Filament\Resources\IoResource\Pages;

use App\Filament\Resources\IoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIo extends EditRecord
{
    protected static string $resource = IoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
