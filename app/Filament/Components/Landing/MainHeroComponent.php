<?php

namespace App\Filament\Components\Landing;

use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class MainHeroComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading'),
            TextInput::make('subheading')
                ->label(__('Subheading'))
                ->required(),
            TextInput::make('button_text'),
            TextInput::make('button_url')
                ->url(),
        ];
    }

    public static function fieldName(): string
    {
        return 'main_hero';
    }

    public static function toBlade(array $data): View
    {
        return view('components.landing.hero', [
            'heroData' => $data,
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://github.com/danielhe4rt.png';
    }
}
