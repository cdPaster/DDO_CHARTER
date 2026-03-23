<?php

namespace App\Filament\Resources\Requirements\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Models\Service;

class RequirementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("where_to_secure")->required(),
                TextInput::make("description")->required(),
                
                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::all()->pluck('service_name', 'id'))
                    ->required(),
            ]);
    }
}
