<?php

namespace App\Filament\Admin\Resources\AktivasiUserResource\Pages;

use App\Filament\Admin\Resources\AktivasiUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAktivasiUsers extends ListRecords
{
    protected static string $resource = AktivasiUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
