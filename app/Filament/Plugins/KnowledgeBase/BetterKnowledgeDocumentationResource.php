<?php

declare(strict_types=1);

namespace App\Filament\Plugins\KnowledgeBase;

use BackedEnum;
use Closure;
use Filament\Resources\Resource;
use Guava\FilamentKnowledgeBase\Facades\KnowledgeBase;
use Guava\FilamentKnowledgeBase\Models\FlatfileNode;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;

class BetterKnowledgeDocumentationResource extends Resource
{
    protected static ?string $slug = 'docs';

    protected static string|null|BackedEnum $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = true;

    public static function getModel(): string
    {
        return KnowledgeBase::model();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'title',
            'data',
        ];
    }

    public static function getPages(): array
    {
        return [
            'view' => BetterViewDocumentation::route('/{record?}'),
        ];
    }

    public static function getGlobalSearchResultUrl(Model $record): ?string
    {
        /** @var FlatfileNode $record */
        return BetterViewDocumentation::getUrl(['record' => $record], panel: KnowledgeBase::panel()->getId());
    }

    public static function getGlobalSearchResultTitle(Model $record): string|Htmlable
    {
        /** @var FlatfileNode $record */
        return $record->getTitle();
    }

    public static function resolveRecordRouteBinding(int|string $key, ?Closure $modifyQuery = null): ?Model
    {
        $record = parent::resolveRecordRouteBinding($key);

        /** @var FlatfileNode|null $record */
        if (!$record?->isActive()) {
            return null;
        }

        return $record;
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-knowledge-base::translations.knowledge-base');
    }
}
