<?php

namespace App\Filament\Resources\Offices\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class OfficesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id'),
                TextColumn::make('name')->label('Offices'),
                TextColumn::make('abbreviation')->label('Abbreviation')

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
                    ->label(false)
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->button(),
                ViewAction::make()
                    ->button()
                    ->label('View Services')
                    ->color('info')
                    ->url(fn($record) => route('filament.admin.pages.view-services', [
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
