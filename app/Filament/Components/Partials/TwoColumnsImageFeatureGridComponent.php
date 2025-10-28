<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\IconPicker\Forms\Components\IconPicker;

class TwoColumnsImageFeatureGridComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.two-column-feature-grid';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->collection(CustomComponent::TwoColumnsImageFeatureGrid->value)
                ->image()
                ->required(),
            ...HeadlineComponent::form(),
            Repeater::make('cards')
                ->label('Cards')
                ->schema([
                    IconPicker::make('icon')
                        ->label('Icon')
                        ->required(),
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    Textarea::make('description')
                        ->label('Description')
                        ->required(),
                ])
                ->minItems(1)
                ->maxItems(6)
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'two-columns-image-feature-grid';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cards' => $data['cards'] ?? [],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'black';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
