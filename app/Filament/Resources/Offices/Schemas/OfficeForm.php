<?php

namespace App\Filament\Resources\Offices\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class OfficeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                FileUpload::make('attachment')->label('Attachment')
                    ->disk('public')        // store in storage/app/public
                    ->directory('attachments') // optional: store in a subfolder
                    ->visibility('public'),

                TextInput::make('name'),
                TextInput::make('abbreviation'),

            ]);
    }
}
