<?php

namespace App\Filament\Admin\Resources\InstalasiResource\Pages;

use App\Filament\Admin\Resources\InstalasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstalasi extends EditRecord
{
    protected static string $resource = InstalasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
