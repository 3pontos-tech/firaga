<?php

namespace App\Enums\App\Filament\Components\Partials;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class TwoColumnsImageFeatureGridComponent implements ComponentInterface
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
            TextInput::make('cta_link')
                ->label('CTA Link')
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'two-columns-image-feature-grid';
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.two-column-feature-grid', [
            'badge' => $data['badge'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cards' => $data['cards'] ?? [],
            'cta_label' => $data['cta_label'],
            'cta_link' => $data['cta_link'],
        ]);
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
