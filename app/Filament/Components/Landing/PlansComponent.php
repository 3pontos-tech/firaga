<?php

namespace App\Filament\Components\Landing;

use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class PlansComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            // uma parte de planos com um repeater pra cards???? mds do céu n sei
            TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            TextInput::make('subheading')
                ->label(__('Subheading'))
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'plans';
    }

    public static function toBlade(array $data): View
    {
        return view('components.landing.plans', [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/599';
    }
}
