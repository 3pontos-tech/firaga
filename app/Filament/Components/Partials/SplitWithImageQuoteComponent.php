<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Enums\PageTheme;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use App\Filament\Components\DTOs\ImageComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class SplitWithImageQuoteComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-with-image-quote';

    public static function blockSchema(): array
    {
        return [
            ...ImageComponent::form(CustomComponent::SplitWithImageQuote, 'header', isRequired: false),

            TextInput::make('header_text')
                ->label('Header Text'),

            ...HeadlineComponent::form(),

            ...ImageComponent::form(CustomComponent::SplitWithImageQuote, 'hero'),

            Select::make('image_position')
                ->label('Image Position')
                ->options([
                    'left' => 'Left',
                    'right' => 'Right',
                ])
                ->default('left')
                ->required(),

            Textarea::make('quote')
                ->label('Quote')
                ->required(),

            TextInput::make('badge')
                ->label('Badge')
                ->required(),

            Textarea::make('start_description')
                ->label('Start Description')
                ->nullable(),

            Repeater::make('insights')
                ->label('Insights')
                ->schema([
                    IconPicker::make('icon')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                ]),

            Textarea::make('end_description')
                ->label('End Description')
                ->nullable(),

            TextInput::make('cta_label')
                ->label('Call to Action Label'),
            TextInput::make('cta_url')
                ->label('Call to Action URL')
                ->url(),

            Select::make('component_theme')
                ->label('Component Theme')
                ->options(PageTheme::class)
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::SplitWithImageQuote->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'header' => ImageComponent::make(CustomComponent::SplitWithImageQuote, 'header_id', $data['header_id'] ?? ''),
            'header_text' => $data['header_text'] ?? '',
            'hero' => ImageComponent::make(CustomComponent::SplitWithImageQuote, 'hero_id', $data['hero_id'] ?? ''),
            'image_position' => $data['image_position'] ?? 'left',
            'badge' => $data['badge'],
            'headline' => HeadlineComponent::make($data['headline']),
            'insights' => $data['insights'],
            'quote' => $data['quote'],
            'start_description' => $data['start_description'] ?? '',
            'end_description' => $data['end_description'] ?? '',
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
            'component_theme' => $data['component_theme'] ?? ''
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
