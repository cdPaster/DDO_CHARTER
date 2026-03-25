<?php

namespace App\Filament\Resources\Requirements\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;
use App\Models\Service;

class RequirementForm
{
    public static function configure(Schema $schema): Schema
    {
        $service_id = request()->get('service_id');

        return $schema
            ->components([

                TextInput::make("description")->label('Checklist of Requirements'),
                TextInput::make("where_to_secure"),
                
                // Show service selector only if no service_id is provided
                $service_id 
                    ? Hidden::make('service_id')
                        ->default($service_id)
                    : Select::make('service_id')
                        ->label('Service')
                        ->options(Service::all()->pluck('service_name', 'id'))
                        ->searchable()
                        ->required(),
            ]);
    }
}