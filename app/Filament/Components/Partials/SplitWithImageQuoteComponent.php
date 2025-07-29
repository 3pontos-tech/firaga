<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class SplitWithImageQuoteComponent implements ComponentInterface
{
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
            Repeater::make('insights')
                ->label('Insights')
                ->schema([
                    TextInput::make('value')
                        ->label('Value')
                        ->required(),
                ]),
            Textarea::make('quote')
                ->label('Quote')
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::SplitWithImageQuote->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.split-with-image-quote', [
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'insights' => $data['insights'],
            'quote' => $data['quote'],
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/500';
    }
}
