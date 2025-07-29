<?php

namespace App\Enums\App\Filament\Components\Partials;

use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class TwoColumnsImageFeatureGridComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.two-column-feature-grid';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('badge')
                ->label('Badge')
                ->required(),
            TextInput::make('heading')
                ->label('Heading')
                ->required(),
            Textarea::make('description')
                ->label('Description')
                ->required(),
            Repeater::make('cards')
                ->label('Cards')
                ->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    Textarea::make('description')
                        ->label('Description')
                        ->required(),
                ])
                ->minItems(1)
                ->maxItems(4)
                ->required(),
            TextInput::make('cta_label')
                ->label('CTA Label')
                ->required(),
            TextInput::make('cta_url')
                ->label('CTA Link')
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
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cards' => $data['cards'] ?? [],
            'cta_label' => $data['cta_label'],
            'cta_url' => $data['cta_url'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/200.png';
    }
}
