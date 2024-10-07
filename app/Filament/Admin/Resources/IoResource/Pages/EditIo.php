<?php

namespace App\Filament\Admin\Resources\IoResource\Pages;

use App\Filament\Admin\Resources\IoResource;
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
