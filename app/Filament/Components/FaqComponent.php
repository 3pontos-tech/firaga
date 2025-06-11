<?php

namespace App\Filament\Components;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class FaqComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            Repeater::make('faq')
                ->schema([
                    TextInput::make('questions')
                        ->label(__('Question'))
                        ->required(),
                    TextInput::make('answers')
                        ->label(__('Answer'))
                        ->required(),
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return 'faq';
    }

    public static function toBlade(array $data): View
    {
        return view('filament.components.faq', [
            'data' => 123,
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return '/vendor/druid/cms/images/components/hint_component.png';
    }
}
