<?php

namespace App\Filament\Resources\Offices\Tables;

use App\Filament\Resources\Offices\OfficeResource;
use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class OfficesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Office Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('abbreviation')
                    ->label('Abbreviation')
                    ->sortable(),

                TextColumn::make('services_count')
                    ->label('Services')
                    ->counts('services')
                    ->badge()
                    ->color('info'),
                
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->button()
                    ->label(false)
                    ->icon('heroicon-o-pencil')
                    ->color('primary'),

                DeleteAction::make()
                    ->button()
                    ->label(false)
                    ->icon('heroicon-o-trash')
                    ->color('danger'),

                Action::make('view_services')
                    ->button()
                    ->label('Services')
                    ->color('info')
                    ->icon('heroicon-o-briefcase')
                    ->url(fn($record) => ServiceResource::getUrl('index', [
                        'office_id' => $record->id,
                    ])),

                Action::make('view_details')
                    ->button()
                    ->label('View Details')
                    ->color('success')
                    ->icon('heroicon-o-document-magnifying-glass')
                    ->url(fn($record) => OfficeResource::getUrl('view', [
                        'record' => $record->id,
                    ])),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
