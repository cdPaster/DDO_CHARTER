<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('office_id')
                    ->label('Office')
                    ->relationship('office', 'name') // links to office name
                    ->required()
                    ->hidden(fn($get) => filled(request()->get('office_id')))
                    ->required()
                    ->dehydrated(), 



                TextInput::make('service_name')->required(),
                TextInput::make('service_description'),

                Select::make('service_type')
                    ->label('Service Type')
                    ->multiple()
                    ->options([
                        'G2C' => 'G2C',
                        'G2B' => 'G2B',
                        'G2G' => 'G2G',
                    ]),

                Select::make('classification')
                    ->label('classification')
                    ->options([
                        'Simple' => 'Simple',
                        'Complex' => 'Complex',
                        'Technical' => 'Technical',
                        'Highly Technical' => 'Highly Technical',

                    ])
                    ->label('Type')
                    ->required(),
                TextInput::make('who_may_avail'),
                // TextInput::make('fees_required'),
                // TextInput::make('processing_time'),
            ]);
    }
}
