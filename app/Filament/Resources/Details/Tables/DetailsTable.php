<?php

namespace App\Filament\Resources\Details\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class DetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('client_step')
                    ->label('CLIENT STEP')
                    ->wrap(),

                TextColumn::make('agency_actions')
                    ->label('AGENCY ACTION')
                    ->html()
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';

                        $output = "<div class='space-y-1 text-sm'>";

                        foreach ($state as $index => $action) {
                            $output .= "
                                <div>
                                    <strong>{$action['step']}</strong> {$action['description']}
                                </div>
                            ";

                            // Optional divider (like your screenshot)
                            if ($index === 2) {
                                $output .= "<hr class='my-1'>";
                            }
                        }

                        $output .= "</div>";

                        return $output;
                    }),

                TextColumn::make('fees')
                    ->label('FEE')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('processing_time')
                    ->label('PROCESSING TIME')
                    ->color('primary'),

                TextColumn::make('person_responsible')
                    ->label('PERSON RESPONSIBLE')
                    ->wrap(),
            ])

            ->filters([
                //
            ])

            ->recordActions([
                EditAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}