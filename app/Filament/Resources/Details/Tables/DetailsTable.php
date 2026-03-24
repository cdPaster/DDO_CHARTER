<?php

namespace App\Filament\Resources\Details\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class DetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service.service_name')
                    ->label('Service')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('client_step')
                    ->label('Client Step')
                    ->searchable()
                    ->wrap(),

                TextColumn::make('fees')
                    ->label('Fee')
                    ->default('None')
                    ->badge()
                    ->color(fn($state) => strtolower($state ?? 'none') === 'none' ? 'gray' : 'success'),

                TextColumn::make('processing_time')
                    ->label('Processing Time')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('person_responsible')
                    ->label('Person Responsible')
                    ->wrap(),
            ])
            ->filters([])
            ->recordActions([
                EditAction::make()->button(),
                DeleteAction::make()->button(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}