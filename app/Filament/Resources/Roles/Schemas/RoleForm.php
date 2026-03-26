<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CheckboxList;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Permission;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Role Name')
                ->required()
                ->unique(ignoreRecord: true),

            CheckboxList::make('permissions')
                ->relationship('permissions', 'name')
                ->options(
                    Permission::all()->pluck('name', 'id')
                )
                ->columns(2)
                ->label('Permissions'),
        ]);
    }
}