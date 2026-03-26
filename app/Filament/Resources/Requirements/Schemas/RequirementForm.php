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
        // Get service_id from the URL query
        $service_id = request()->get('service_id');

        return $schema
            ->components([

                TextInput::make('description')
                    ->label('Checklist of Requirements')
                    ->required(),

                TextInput::make('where_to_secure')
                    ->label('Where to Secure')
                    ->required(),

            ]);
    }
}