<?php

namespace App\Filament\Resources\Details\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;
class DetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Notifications')
                            ->icon(Heroicon::Bell)
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                // ...
                            ]),
                        // ...
                    ])
            ]);
    }
}
