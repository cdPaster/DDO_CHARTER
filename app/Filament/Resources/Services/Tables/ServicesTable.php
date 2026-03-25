<?php

namespace App\Filament\Resources\Services\Tables;

use App\Filament\Resources\Requirements\RequirementResource;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\Services\ServiceResource;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordUrl(null)
            ->columns([
                TextColumn::make('service_name')
                    ->wrap()
                    ->searchable()
                    ->label('Title'),

                TextColumn::make('service_description')
                    ->wrap()
                    ->grow(false),

                TextColumn::make('classification')
                    ->badge()
                    ->alignCenter()
                    ->grow(false)
                    ->color(fn($state) => match ($state) {
                        'Simple'          => 'success',
                        'Complex'         => 'info',
                        'Technical'       => 'warning',
                        'Highly Technical' => 'danger',
                        default           => 'gray',
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
            ->defaultSort('service_name')
            ->filters([
                SelectFilter::make('office')
                    ->relationship('office', 'name'),
                SelectFilter::make('classification')
                    ->options([
                        'Simple'          => 'Simple',
                        'Complex'         => 'Complex',
                        'Technical'       => 'Technical',
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
                    ->button()
                    ->color('info')
                    ->url(fn($record) => ServiceResource::getUrl('view', ['record' => $record]))
                    ->label('View Process'),
                //goes to the view custom page 
                Action::make('view_requirements')
                    ->button()
                    ->color('primary')
                    ->label('View Requirements')
                    ->icon('heroicon-o-clipboard-document-list')
                    ->url(fn($record) => \App\Filament\Resources\Requirements\RequirementResource::getUrl(
                        'view-requirements-by-office',
                        ['service_id' => $record->id]
                    )),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
