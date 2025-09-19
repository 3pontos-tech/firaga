<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Fluent;

class HorizontalScrollerHighlightComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.horizontal-scroller-highlight';

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
            TextInput::make('cta_url')
                ->label('CTA Link')
                ->hint('CTA: "Fale conosco para mais informações"')
                ->url()
                ->required(),
            Repeater::make('cards')
                ->label('Cards')
                ->cloneable()
                ->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    Textarea::make('description')
                        ->label('Description')
                        ->required(),
                    IconPicker::make('icon')
                        ->label('Icon')
                        ->required(),
                    TextInput::make('cta_label')
                        ->label('CTA Label')
                        ->required(),
                    TextInput::make('cta_url')
                        ->url()
                        ->label('CTA Link')
                        ->required(),
                ])
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HorizontalScrollerHighlight->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cta_url' => $data['cta_url'],
            'cards' => collect($data['cards'])->map(fn ($card) => Fluent::make([
                'title' => $card['title'],
                'description' => $card['description'],
                'icon' => $card['icon'],
                'cta_url' => $card['cta_url'],
                'cta_label' => $card['cta_label'],
            ])),
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

    public static function getGroup(): string
    {
        return 'Section';
    }
}
