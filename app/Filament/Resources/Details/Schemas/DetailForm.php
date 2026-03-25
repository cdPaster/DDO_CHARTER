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
    /**
     * Get service ID from livewire data or route context
     */
    private static function getServiceId(): ?int
    {
        // Check route parameter (service passed in URL)
        $routeService = request()->route('service');
        if ($routeService !== null) {
            return is_numeric($routeService) ? (int) $routeService : $routeService->id ?? null;
        }

        // Check query parameter as fallback
        if (request()->has('service_id')) {
            return (int) request()->query('service_id');
        }

        return null;
    }

    /**
     * Check if service context exists (don't ask for service)
     */
    private static function hasServiceContext(): bool
    {
        return self::getServiceId() !== null;
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // Display service name (read-only) when service is already selected
                Placeholder::make('service_display')
                    ->label('Service')
                    ->content(function () {
                        $serviceId = self::getServiceId();
                        if ($serviceId) {
                            $service = Service::find($serviceId);
                            return $service?->service_name ?? 'Service not found';
                        }
                        return '—';
                    })
                    ->visible(fn () => self::hasServiceContext())
                    ->columnSpanFull(),

                // Hidden field to automatically store service_id
                Hidden::make('service_id')
                    ->default(fn () => self::getServiceId())
                    ->dehydrated(true)
                    ->required(),

                // Service selector - only shown if NO service context (standalone form)
                Select::make('service_id')
                    ->label('Service')
                    ->placeholder('Choose a service to add process details...')
                    ->options(Service::query()->pluck('service_name', 'id'))
                    ->required()
                    ->searchable()
                    ->preload()
                    ->visible(fn () => !self::hasServiceContext())
                    ->columnSpanFull(),

                Section::make('Client Step')
                    ->columnSpanFull()
                    ->columns(12)
                    ->schema([

                        TextInput::make('client_step')
                            ->label('Client Step Description')
                            ->placeholder('e.g., Document Submission')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('agency_actions')
                            ->label('Agency Actions')
                            ->columnSpanFull()
                            ->columns([
                                'default' => 1,
                                'sm' => 1,
                                'md' => 12,
                                'lg' => 12,
                            ])
                            ->schema([

                                TextInput::make('action')
                                    ->label('Agency Action')
                                    ->placeholder('e.g., Review Documents')
                                    ->required()
                                    ->columnSpan([
                                        'default' => 12,
                                        'sm' => 12,
                                        'md' => 12,
                                        'lg' => 12,
                                    ]),

                                TextInput::make('fee')
                                    ->label('Fee (₱)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->placeholder('0.00')
                                    ->nullable()
                                    ->columnSpan([
                                        'default' => 12,
                                        'sm' => 12,
                                        'md' => 3,
                                        'lg' => 2,
                                    ]),

                                TextInput::make('processing_time')
                                    ->label('Processing Time')
                                    ->numeric()
                                    ->minValue(0)
                                    ->placeholder('e.g., 5')
                                    ->required()
                                    ->columnSpan([
                                        'default' => 6,
                                        'sm' => 6,
                                        'md' => 2,
                                        'lg' => 3,
                                    ]),

                                Select::make('processing_time_unit')
                                    ->label('Unit')
                                    ->options([
                                        'minutes' => 'Minutes',
                                        'hours'   => 'Hours',
                                        'days'    => 'Days',
                                    ])
                                    ->default('minutes')
                                    ->columnSpan([
                                        'default' => 6,
                                        'sm' => 6,
                                        'md' => 2,
                                        'lg' => 2,
                                    ]),

                                TextInput::make('person_responsible')
                                    ->label('Person Responsible')
                                    ->placeholder('e.g., John Doe')
                                    ->columnSpan([
                                        'default' => 12,
                                        'sm' => 12,
                                        'md' => 5,
                                        'lg' => 5,
                                    ]),

                            ])
                            ->defaultItems(1)
                            ->addActionLabel('+ Add Agency Action')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['action'] ?? null),
                    ]),
            ]);
    }
}