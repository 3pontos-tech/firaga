<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class GridHeroComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            'subheading' => TextInput::make('subheading'),
            'heading' => TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            'description' => TextInput::make('description')
                ->label(__('Description'))
                ->maxLength(255)
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::PartialGridHero->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.partials.grid-hero', [
            'subheading' => $data['subheading'] ?? '',
            'heading' => $data['heading'] ?? '',
            'description' => $data['description'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/301.png';
    }
}
