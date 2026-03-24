<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Details\Schemas\DetailForm;
use App\Filament\Resources\Services\ServiceResource;
use App\Models\Detail;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Schema;

class ViewService extends ViewRecord
{
    protected static string $resource = ServiceResource::class;
    protected string $view = 'filament.resources.services.view-service';


    //title
    public function getTitle(): string
    {
        $officeName = $this->record->office?->name;

        return $officeName
            ? "Process for {$this->record->service_name} "
            : "Details of {$this->record->service_name}";
    }
    //sub title
    public function getSubheading(): ?string
    {
        $officeName = $this->record->office?->name;

        return $officeName
            ? "{$officeName}"
            : " {$officeName}";
    }

    public function getSteps(): array
    {
        return Detail::where('service_id', $this->record->id)
            ->orderBy('step_number')
            ->get()
            ->map(fn($detail) => [
                'detail_id'      => $detail->id,
                'step_number'    => $detail->step_number,
                'client_step'    => $detail->client_step,
                'agency_actions' => $detail->agency_actions ?? [],
            ])
            ->toArray();
    }

    public function addDetailAction(): Action
    {
        return Action::make('addDetail')
            ->label('Add Details')
            ->icon('heroicon-m-plus')
            ->modalHeading('Add Detail')
            ->modalWidth('4xl')
            ->fillForm(fn() => ['service_id' => $this->record->id])
            ->schema(fn(Schema $schema) => DetailForm::configure($schema))
            ->action(function (array $data) {
                Detail::create($data);
                $this->redirect(request()->header('Referer'));
            });
    }

    public function editDetailAction(): Action
    {
        return Action::make('editDetail')
            ->modalHeading('Edit Detail')
            ->modalWidth('4xl')
            ->schema(fn(Schema $schema) => DetailForm::configure($schema))
            ->fillForm(function (array $arguments) {
                $detail = Detail::find($arguments['id']);
                return $detail ? $detail->toArray() : [];
            })
            ->action(function (array $data, array $arguments) {
                $detail = Detail::find($arguments['id']);
                $detail?->update($data);
                $this->redirect(request()->header('Referer'));
            });
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
