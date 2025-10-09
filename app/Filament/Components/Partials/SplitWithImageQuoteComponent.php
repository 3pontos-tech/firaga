<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class SplitWithImageQuoteComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-with-image-quote';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),

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

            Repeater::make('insights')
                ->label('Insights')
                ->schema([
                    IconPicker::make('icon')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TextInput::make('description')
                        ->label('Description')
                        ->required(),
                ]),
            Textarea::make('quote')
                ->label('Quote')
                ->required(),

            Textarea::make('end_description')
                ->label('End Description')
                ->nullable(),

            TextInput::make('cta_label')
                ->label('Call to Action Label'),
            TextInput::make('cta_url')
                ->label('Call to Action URL')
                ->url(),
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
            'headline' => HeadlineComponent::make($data['headline']),
            'insights' => $data['insights'],
            'quote' => $data['quote'],
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return 'black';
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
