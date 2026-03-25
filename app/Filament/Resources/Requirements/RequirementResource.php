<?php

namespace App\Filament\Resources\Requirements;

use App\Filament\Resources\Requirements\Pages\CreateRequirement;
use App\Filament\Resources\Requirements\Pages\EditRequirement;
use App\Filament\Resources\Requirements\Pages\ListRequirements;
use App\Filament\Resources\Requirements\Schemas\RequirementForm;
use App\Filament\Resources\Requirements\Tables\RequirementsTable;
use App\Models\Requirement;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RequirementResource extends Resource
{
    protected static ?string $model = Requirement::class;
    protected static ?int $navigationSort = 3;
    protected static string|UnitEnum|null $navigationGroup = 'Charter';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return RequirementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        // Configure the base table
        $table = RequirementsTable::configure($table);

        // Filter by service_id if provided
        $serviceId = request()->query('service_id');
        if ($serviceId) {
            $table->modifyQueryUsing(
                fn(Builder $query) => $query->where('service_id', $serviceId)
            );
        }

        // Optional: Filter by office_id if provided
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
            'index' => ListRequirements::route('/'),
            // 'create' => CreateRequirement::route('/create'),
            // 'edit' => EditRequirement::route('/{record}/edit'),
            'view-requirements-by-office' =>
            Pages\ViewRequirementsByOffice::route('/view-requirements-by-office'),
        ];
    }
}
