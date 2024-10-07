<?php

namespace App\Filament\Admin\Resources\IoResource\Pages;

use App\Filament\Admin\Resources\IoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIos extends ListRecords
{
    protected static string $resource = IoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
