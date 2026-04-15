<?php

namespace App\Filament\Resources\Terms;

use App\Filament\Resources\Terms\Pages\CreateTerm;
use App\Filament\Resources\Terms\Pages\EditTerm;
use App\Filament\Resources\Terms\Pages\ListTerms;
use App\Filament\Resources\Terms\Schemas\TermForm;
use App\Filament\Resources\Terms\Tables\TermsTable;
use App\Models\Term;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TermResource extends Resource
{
    protected static ?string $model = Term::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static string|null|UnitEnum $navigationGroup = 'Administration';

    protected static ?string $recordTitleAttribute = 'title';

    public static function getModelLabel(): string
    {
        return 'Termo';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Termos';
    }

    public static function getNavigationLabel(): string
    {
        return 'Termos';
    }

    public static function form(Schema $schema): Schema
    {
        return TermForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TermsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTerms::route('/'),
            'create' => CreateTerm::route('/create'),
            'edit' => EditTerm::route('/{record}/edit'),
        ];
    }
}
