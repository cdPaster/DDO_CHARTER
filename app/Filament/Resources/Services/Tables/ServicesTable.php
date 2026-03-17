<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('office.name')
                    ->label('Office')
                    ->wrap()
                    ->sortable()
                    ->searchable(), // show related office name
                
                TextColumn::make('service_name')
                    ->wrap()
                     ->searchable()
                    ->label('Title'),

                TextColumn::make('classification')
                    ->badge()
                    ->grow(false) 
                    ->color(fn($state) => match ($state) {
                        'Simple' => 'success',
                        'Complex' => 'info',
                        'Technical' => 'warning',
                        'Highly Technical' => 'danger',
                    })
                    ->label('Classification'),

                TextColumn::make('service_type')
                    ->badge()
                    ->grow(false) 
                    ->color('primary')
                    ->searchable()
                    ->label('Type'),
                    
                TextColumn::make('who_may_avail')
                    ->wrap()
                    ->label('Who may avail'),
            ])
            ->filters([
                SelectFilter::make('office')
                    ->relationship('office', 'name'),
                SelectFilter::make('classification')
                    ->options([ 
                        'Simple' => 'Simple',
                        'Complex' => 'Complex',
                        'Technical' => 'Technical',
                        'Highly Technical' => 'Highly Technical',
                    ]),
            ])
            ->recordActions([
                EditAction::make()
                    ->button()
                    ->label('Edit'),
                DeleteAction::make()
                    ->button()
                    ->label('Delete'),
                ViewAction::make()
                    ->color('info')
                    ->label('View Details')
                    ->size('sm')
                    ->button()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
