<?php

namespace App\Filament\Admin\Resources\HarUserResource\Pages;

use App\Filament\Admin\Resources\HarUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHarUsers extends ListRecords
{
    protected static string $resource = HarUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
