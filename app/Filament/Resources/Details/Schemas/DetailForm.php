<?php

namespace App\Filament\Resources\Details\Schemas;

use App\Models\Service;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Placeholder::make('service_label')
                    ->label('Service')
                    ->content(function () {
                        $serviceId = request()->query('service_id')
                            ?? request()->route('record');
                        if ($serviceId) {
                            $service = Service::find($serviceId);
                            return $service?->service_name ?? '—';
                        }
                        return '—';
                    })
                    ->visible(fn () => request()->has('service_id'))
                    ->columnSpanFull(),

                Hidden::make('service_id')
                    ->dehydrated(true)
                    ->visible(fn () => request()->has('service_id')),

                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::pluck('service_name', 'id'))
                    ->required()
                    ->searchable()
                    ->visible(fn () => !request()->has('service_id'))
                    ->columnSpanFull(),

                Section::make('Client Step')
                    ->columnSpanFull()
                    ->schema([

                        TextInput::make('client_step')
                            ->label('Client Step')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('agency_actions')
                            ->label('Agency Actions')
                            ->columnSpanFull()
                            ->schema([

                                TextInput::make('action')
                                    ->label('Agency Action')
                                    ->required()
                                    ->columnSpan(4),

                                TextInput::make('fee')
                                    ->label('Fee (₱)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->placeholder('Leave blank if none')
                                    ->nullable()
                                    ->columnSpan(2),

                                TextInput::make('processing_time')
                                    ->label('Processing Time')
                                    ->numeric()
                                    ->minValue(0)
                                    ->columnSpan(2),

                                Select::make('processing_time_unit')
                                    ->label('Unit')
                                    ->options([
                                        'minutes' => 'Minutes',
                                        'hours'   => 'Hours',
                                        'days'    => 'Days',
                                    ])
                                    ->default('minutes')
                                    ->columnSpan(2),

                                TextInput::make('person_responsible')
                                    ->label('Person Responsible')
                                    ->columnSpan(4),

                            ])
                            ->columns(12)
                            ->defaultItems(1)
                            ->addActionLabel('Add Agency Action')
                            ->reorderable()
                            ->collapsible(),
                    ]),
            ]);
    }
}