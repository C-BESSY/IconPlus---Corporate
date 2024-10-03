<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $title = 'Dashboard';
    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $slug = 'dashboard';

    public static function getNavigationGroup(): ?string
    {
        return 'Reports';
    }
}
