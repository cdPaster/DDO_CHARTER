<?php

namespace App\Filament\Resources\Requirements\Pages;

use App\Models\Service;
use App\Models\Requirement;
use Filament\Resources\Pages\Page;
use App\Filament\Resources\Requirements\RequirementResource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
class ViewRequirementsByOffice extends Page implements HasTable
{
    use InteractsWithTable;

    protected static string $resource = RequirementResource::class;

    protected string $view = 'filament.resources.requirements.pages.view-requirements-by-office';

    public $service_id;
    public $service;

    public function mount(): void
    {
        $this->service_id = request()->get('service_id');
        $this->service    = Service::find($this->service_id);
    }

    // ── TABLE QUERY ──

    protected function getTableQuery(): Builder
    {
        return Requirement::query()
            ->when($this->service_id, fn($q) => $q->where('service_id', $this->service_id));
    }

    // ── TABLE COLUMNS ──

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('description')
                ->label('Checklist of Requirements')
                ->searchable()
                ->wrap(),

            Tables\Columns\TextColumn::make('where_to_secure')
                ->label('Where to Secure')
                ->wrap()
                ->placeholder('—'),
        ];
    }

    // ── TABLE HEADER ACTIONS (Add button lives here) ──

    protected function getTableHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add Requirement')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->modalHeading('Add Requirement')
                ->modalDescription(
                    $this->service
                        ? 'Service: ' . $this->service->service_name
                        : null
                )
                ->model(Requirement::class)
                ->form([
                    TextInput::make('description')
                        ->label('Checklist of Requirements')
                        ->required(),

                    TextInput::make('where_to_secure')
                        ->label('Where to Secure')
                        ->required(),

                    Hidden::make('service_id')
                        ->default($this->service_id),
                ])
                ->mutateFormDataUsing(function (array $data): array {
                    $data['service_id'] = $this->service_id;
                    return $data;
                })
                ->successNotificationTitle('Requirement added successfully'),
        ];
    }

    // TABLE ROW ACTIONS

    protected function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label('Edit')
                ->button()
                ->icon('heroicon-o-pencil')
                ->modalHeading('Edit Requirement')
                ->form([
                    TextInput::make('description')
                        ->label('Checklist of Requirements')
                        ->required(),

                    TextInput::make('where_to_secure')
                        ->label('Where to Secure')
                        ->required(),

                    Hidden::make('service_id'),
                ]),

            DeleteAction::make()
                ->label('Delete')
                ->button()
                ->icon('heroicon-o-trash'),
        ];
    }

   

    protected function getHeaderActions(): array
    {
        return [];
    }
}
