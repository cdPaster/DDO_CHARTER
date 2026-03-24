<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Office;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    public ?int $office_id = null;
    public ?Office $office = null;

    protected ?string $heading = null;
    protected ?string $subheading = null;

    public function mount(): void
    {
        $this->office_id = request()->get('office_id');
        $this->office = Office::find($this->office_id);

        // Dynamic heading (plain text)
        $this->heading = $this->office
            ? 'Services for ' . $this->office->name
            : 'Services';

        // Dynamic subheading (plain text)
        $this->subheading = $this->office
            ? 'Manage services under this office.'
            : 'Manage all services.';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    // Table query filtered by office
    protected function getTableQuery(): Builder
    {
        $query = parent::getTableQuery();

        if ($this->office_id) {
            $query = $query->where('office_id', $this->office_id);
        }

        return $query;
    }
}