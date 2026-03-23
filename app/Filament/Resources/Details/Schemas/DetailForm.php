<?php

namespace App\Filament\Resources\Details\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // 🔹 Service Select (required)
                Select::make('service_id')
                    ->relationship('service', 'service_name') // matches your DB column
                    ->label('Service')
                    ->required()
                    ->preload(),

                // 🔹 Client Step
                TextInput::make('client_step')
                    ->label('Client Step')
                    ->required(),

                // 🔹 Fees
                TextInput::make('fees')
                    ->label('Fees')
                    ->default('None'),

                // 🔹 Processing Time
                TextInput::make('processing_time')
                    ->label('Processing Time'),

                // 🔹 Person Responsible
                TextInput::make('person_responsible')
                    ->label('Person Responsible'),

                // 🔹 Repeater for Agency Actions (JSON)
                Repeater::make('agency_actions')
                    ->label('Agency Actions')
                    ->schema([
                        TextInput::make('step')
                            ->label('Step No.')
                            ->placeholder('e.g. 1.1'),

                        TextInput::make('description')
                            ->label('Description'),
                    ])
                    ->defaultItems(1)
                    ->columnSpanFull(),
            ]);
    }
}