<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Services\Pages\CreateService;
use App\Filament\Resources\Services\Pages\EditService;
use App\Filament\Resources\Services\Pages\ListServices;
use App\Filament\Resources\Services\Pages\ViewService;
use App\Filament\Resources\Services\Schemas\ServiceForm;
use App\Filament\Resources\Services\Tables\ServicesTable;
use App\Models\Service;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Infolist;

class ServiceResource extends Resource
{
    protected static ?string $modelHeader = 'Service';
    protected static ?int $navigationSort = 2;

    protected static ?string $model = Service::class;
    protected static string|UnitEnum|null $navigationGroup = 'Charter';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    // public static function getRecordTitleAttribute(): string
    // {
    //     return 'service_name';
    // }
    public static function form(Schema $schema): Schema
    {
        return ServiceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        // Configure the base table
        $table = ServicesTable::configure($table);

        // Apply office filter if query parameter exists
        $officeId = request()->query('office_id');
        if ($officeId) {
            $table->modifyQueryUsing(
                fn(Builder $query) => $query->where('office_id', $officeId)
            );
        }

        return $table;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListServices::route('/'),
            // 'create' => CreateService::route('/create'),
            // 'edit'   => EditService::route('/{record}/edit'),
            'view'   => ViewService::route('/{record}'),
        ];
    }
}
