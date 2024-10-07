<?php

namespace App\Filament\Admin\Resources\SalesUserResource\Pages;

use App\Filament\Admin\Resources\SalesUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalesUser extends EditRecord
{
    protected static string $resource = SalesUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
