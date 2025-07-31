<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SplitWithImageQuoteComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-with-image-quote';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->collection(CustomComponent::SplitWithImageQuote->value)
                ->image()
                ->required(),

            Select::make('image_position')
                ->label('Image Position')
                ->options([
                    'left' => 'Left',
                    'right' => 'Right',
                ])
                ->default('left')
                ->required(),

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
            TextInput::make('cta_label')
                ->label('Call to Action Label')
                ->required(),
            TextInput::make('cta_url')
                ->label('Call to Action URL')
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::SplitWithImageQuote->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'image_position' => $data['image_position'] ?? 'left',
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'insights' => $data['insights'],
            'quote' => $data['quote'],
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
        ];
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
