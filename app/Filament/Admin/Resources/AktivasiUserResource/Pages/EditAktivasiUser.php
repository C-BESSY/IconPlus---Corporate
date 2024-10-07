<?php

namespace App\Filament\Admin\Resources\AktivasiUserResource\Pages;

use App\Filament\Admin\Resources\AktivasiUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAktivasiUser extends EditRecord
{
    protected static string $resource = AktivasiUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
