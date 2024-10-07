<?php

namespace App\Filament\Admin\Resources\AktivasiResource\Pages;

use App\Filament\Admin\Resources\AktivasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAktivasis extends ListRecords
{
    protected static string $resource = AktivasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
