<?php

namespace App\Filament\Resources\Details\Pages;

use App\Filament\Resources\Details\DetailResource;
use App\Filament\Resources\Requirements\RequirementResource;
use App\Filament\Resources\Services\ServiceResource;
use App\Models\Detail;
use App\Models\Service;
use App\Models\Requirement;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
// use Filament\Tables\Actions\Action;
use Filament\Actions\Action;


class ListDetails extends ListRecords
{
    protected static string $resource = DetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    /**
     * Navigation tabs rendered above the table.
     * Each tab links to a different resource index page.
     * The active tab (Details/Balance) has no URL — it's the current page.
     */
    protected function getTableHeaderActions(): array
    {
        return [
            Action::make('tab_services')
                ->label('Services')
                ->badge(Service::count())
                ->button()
                ->color('gray')
                ->outlined()
                ->url(ServiceResource::getUrl('index')),

            Action::make('tab_requirements')
                ->label('Requirements')
                ->badge(Requirement::count())
                ->button()
                ->color('gray')
                ->outlined()
                ->url(RequirementResource::getUrl('index')),

            Action::make('tab_process')
                ->label('Process')
                ->badge(Detail::count())
                ->button()
                ->color('primary')  // active tab — solid color
                ->url('#'),         // current page, no navigation needed
        ];
    }
}