<?php

namespace App\Filament\Resources\Details\Pages;

use App\Filament\Resources\Details\DetailResource;
use Filament\Resources\Pages\ViewRecord;

class ViewDetail extends ViewRecord
{
    protected static string $resource = DetailResource::class;

    protected string $view = 'filament.resources.details.view-detail';

    public function getViewData(): array
    {
        $record = $this->record->load('service');

        $agencyActions = is_string($record->agency_actions)
            ? json_decode($record->agency_actions, true)
            : ($record->agency_actions ?? []);

        return [
            'record' => $record,
            'steps'  => [
                [
                    'step_number'    => 1,
                    'client_step'    => $record->client_step,
                    'agency_actions' => collect($agencyActions)->map(fn ($a) => [
                        'action'             => $a['action'] ?? '—',
                        'fee'                => $a['fee'] ?? 'None',
                        'processing_time'    => $a['processing_time'] ?? '—',
                        'person_responsible' => $a['person_responsible'] ?? '—',
                    ])->toArray(),
                ],
            ],
        ];
    }
}