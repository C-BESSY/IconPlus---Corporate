<?php

namespace App\Filament\Admin\Resources\AsetUserResource\Pages;

use App\Filament\Admin\Resources\AsetUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsetUsers extends ListRecords
{
    protected static string $resource = AsetUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
