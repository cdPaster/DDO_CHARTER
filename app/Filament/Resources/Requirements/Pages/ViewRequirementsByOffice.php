<?php

namespace App\Filament\Resources\Requirements\Pages;

use App\Filament\Resources\Requirements\RequirementResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class ViewRequirementsByOffice extends Page
{
    use InteractsWithRecord;

    protected static string $resource = RequirementResource::class;

    protected string $view = 'filament.resources.requirements.pages.view-requirements-by-office';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }
}
