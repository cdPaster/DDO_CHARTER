<?php

namespace App\Filament\Resources\Details;

use App\Filament\Resources\Details\Pages\CreateDetail;
use App\Filament\Resources\Details\Pages\EditDetail;
use App\Filament\Resources\Details\Pages\ListDetails;
use App\Filament\Resources\Details\Pages\ViewDetail;
use App\Filament\Resources\Details\Schemas\DetailForm;
use App\Filament\Resources\Details\Tables\DetailsTable;
use App\Models\Detail;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class DetailResource extends Resource
{
    protected static ?string $model = Detail::class;

    protected static string|UnitEnum|null $navigationGroup = 'Charter';

    protected static ?int $navigationSort = 4;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->latest();
    }
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return DetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDetails::route('/'),
        ];
    }
}