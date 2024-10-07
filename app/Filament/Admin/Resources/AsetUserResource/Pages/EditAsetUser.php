<?php

namespace App\Filament\Admin\Resources\AsetUserResource\Pages;

use App\Filament\Admin\Resources\AsetUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsetUser extends EditRecord
{
    protected static string $resource = AsetUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
