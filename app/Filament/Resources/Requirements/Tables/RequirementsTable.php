<?php

namespace App\Filament\Resources\Requirements\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;


// use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;

class RequirementsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make("service.service_name")->wrap(),
                TextColumn::make('description')
                    ->label('Requirement')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->lineClamp(3),

                TextColumn::make('where_to_secure')
                    ->label('Where to Secure')
                    ->searchable()
                    ->color('info')
                    // ->badge()
                    ->sortable()
                    ->wrap()
                    ->lineClamp(2),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make()
                    ->label(false)
                    ->color('danger')
                    ->button(),
                EditAction::make()->color('primary')->label(false)
                        ->button(),
                ViewAction::make('view_services')
                    ->button()
                    ->color('info')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
