<?php

namespace App\Filament\Resources\AktivasiResource\Pages;

use App\Filament\Resources\AktivasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAktivasi extends EditRecord
{
    protected static string $resource = AktivasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
