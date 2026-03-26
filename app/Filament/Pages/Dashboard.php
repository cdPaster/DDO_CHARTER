<?php
namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;

class Dashboard extends Page
{
    // protected static ?string $navigationIcon = 'heroicon-o-home';
    protected  string $view = 'filament.pages.dashboard';
    protected static ?string $navigationLabel = 'Dashboard';

    public function getWidgets(): array
    {
        return [
            AccountWidget::class,
            FilamentInfoWidget::class,
            // Add more Filament widgets here if you want
        ];
    }
}