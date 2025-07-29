<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Fluent;

class SplitWithHorizontalStepsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-horizontal-three-steps';

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
                    IconPicker::make('icon')
                        ->label('Icon')
                        ->required(),
                    TextInput::make('cta_label')
                        ->label('CTA Label')
                        ->required(),
                    TextInput::make('cta_link')
                        ->label('CTA Link')
                        ->url()
                        ->required(),
                ])
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::SplitWithHorizontalSteps->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cards' => collect($data['cards'])->map(fn ($card) => Fluent::make([
                'title' => $card['title'],
                'description' => $card['description'],
                'icon' => $card['icon'],
                'cta_label' => $card['cta_label'],
                'cta_link' => $card['cta_link'],
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
}
