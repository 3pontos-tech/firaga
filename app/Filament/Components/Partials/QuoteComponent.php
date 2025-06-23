<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\Textarea;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class QuoteComponent implements ComponentInterface
{

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

    public static function toBlade(array $data): View
    {
        return view('components.partials.quote', [
            'headline' => $data['headline'] ?? '',
            'description' => $data['description'] ?? '',
            'quote' => $data['quote'] ?? '',
        ]);
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
