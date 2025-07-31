<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Textarea;

class QuoteComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.partials.quote';

    public static function blockSchema(): array
    {
        return [
            Textarea::make('headline'),
            Textarea::make('description'),
            Textarea::make('quote')
                ->required()
                ->label('Quote')
                ->placeholder('Enter the quote here'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::PartialQuote->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => $data['headline'] ?? '',
            'description' => $data['description'] ?? '',
            'quote' => $data['quote'] ?? '',
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/404.png';
    }
}
