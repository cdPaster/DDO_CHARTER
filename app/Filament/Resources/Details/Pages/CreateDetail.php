<?php

namespace App\Filament\Resources\Details\Pages;

use App\Filament\Resources\Details\DetailResource;
use App\Models\Service;
use Filament\Resources\Pages\CreateRecord;

class CreateDetail extends CreateRecord
{
    protected static string $resource = DetailResource::class;

    public ?Service $service = null;

    public function mount(): void
    {
        parent::mount();

        if (request()->has('service_id')) {
            $this->service = Service::find(request()->query('service_id'));

            $this->form->fill([
                'service_id' => request()->query('service_id'),
            ]);
        }
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['service_id']) && request()->has('service_id')) {
            $data['service_id'] = request()->query('service_id');
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return \App\Filament\Resources\Services\ServiceResource::getUrl('view', [
            'record' => $this->record->service_id,
        ]);
    }
}