<?php

namespace App\Filament\Resources\Requirements\Pages;

use App\Filament\Resources\Requirements\RequirementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRequirement extends CreateRecord
{
    protected static string $resource = RequirementResource::class;

    // ✅ Redirect back to filtered list with service_id
    protected function getRedirectUrl(): string
    {
        $service_id = request()->get('service_id');

        return $service_id
            ? RequirementResource::getUrl('index', ['service_id' => $service_id])
            : RequirementResource::getUrl('index');
    }
    public $service_id;
    public $service;
    // moubt method to accept the service
    public function mount(): void
    {
        parent::mount();

        // Read service_id from query string
        $this->service_id = request()->get('service_id');
        $this->service = \App\Models\Service::find($this->service_id);
    }
}
