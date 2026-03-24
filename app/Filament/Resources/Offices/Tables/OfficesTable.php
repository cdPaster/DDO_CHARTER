<?php

namespace App\Filament\Resources\Offices\Tables;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class OfficesTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('name')->label('Office Name')->searchable(true),
                TextColumn::make('abbreviation')->label('Abbreviation')->sortable(),
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

                ViewAction::make('view_services')
                    ->button()
                    ->label('View Services')
                    ->color('info')
                    ->icon('heroicon-o-briefcase')
                    ->url(fn($record) => ServiceResource::getUrl('index', [
                        'office_id' => $record->id, // <-- pass office_id as query
                    ])),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
