<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Office;

class ViewServices extends Page
{
    protected string $view = 'filament.pages.view-services';

    protected static bool $shouldRegisterNavigation = false;

    public Office $office;
    public $services;

    public function mount(): void
    {
        $record = request()->query('record');
        
        $this->office = Office::with([
            'services.requirements',
            'services.steps',
        ])->findOrFail($record);

        $this->services = $this->office->services;
    }
}