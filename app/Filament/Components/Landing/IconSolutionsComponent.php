<?php

namespace App\Filament\Components\Landing;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class IconSolutionsComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            TextInput::make('section'),
            TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            TextInput::make('description')
                ->label(__('Description'))
                ->required(),
            Repeater::make('solutions')
                ->label(__('Solutions'))
                ->schema([
                    IconPicker::make('icon')
                        ->label(__('Icon'))
                        ->required(),
                    TextInput::make('title')
                        ->label(__('Title'))
                        ->required(),
                    TextInput::make('description')
                        ->label(__('Description'))
                        ->required(),
                    TextInput::make('redirect_url')
                        ->label(__('Redirect URL'))
                        ->url()
                        ->required(),
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return 'icon_solutions';
    }

    public static function toBlade(array $data): View
    {
        return view('components.landing.our-solutions', [
            'section' => $data['section'],
            'heading' => $data['heading'],
            'description' => $data['description'],
            'solutions' => collect($data['solutions'] ?? []),
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/404';
    }
}
