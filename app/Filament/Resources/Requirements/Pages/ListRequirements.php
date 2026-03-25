<?php

namespace App\Filament\Resources\Requirements\Pages;

use App\Filament\Resources\Requirements\RequirementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRequirements extends ListRecords
{
    protected static string $resource = RequirementResource::class;
    // protected  string $view = 'filament.resources.requirements.pages.list-requirements'; // ← add this


    protected ?string $heading = null;
    protected ?string $subheading = null;

    public ?int $service_id = null;
    public $service;

    public function mount(): void
    {
        $this->service_id = request()->get('service_id');
        $this->service = \App\Models\Service::find($this->service_id);

        // ✅ Set heading & subheading here (clean like Service page)
        $this->heading = $this->service
            ? 'Requirements for ' . $this->service->service_name
            : 'Requirements';

        $this->subheading = $this->service
            ? 'Manage requirements for this service.'
            : 'Manage all requirements.';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
