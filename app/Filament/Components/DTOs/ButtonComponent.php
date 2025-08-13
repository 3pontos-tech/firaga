<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Collection;

class ButtonComponent
{
    public function __construct(
        public string $label,
        public string $url,
        public string $target,
    )
    {
    }

    public static function form(string $parent = ''): array
    {
        return [
            Toggle::make($parent . '.has_buttons')
                ->label('Has Buttons?')
                ->live(debounce: 50)
                ->default(false),
            Repeater::make($parent . '.buttons')
                ->visible(fn($get) => $get($parent . '.has_buttons'))
                ->label('Buttons')
                ->schema([
                    TextInput::make('label')
                        ->label('Label')
                        ->required(),
                    TextInput::make('url')
                        ->label('URL')
                        ->required(),
                    Select::make('target')
                        ->label('Target')
                        ->options([
                            '_blank' => 'New Tab',
                            '_self' => 'Same Tab',
                        ])
                        ->default('_blank'),
                ]),
        ];
    }

    public static function make(string $parent, array $payload): self
    {
        return new self(
            label: $payload['label'] ?? '',
            url: $payload['url'] ?? '',
            target: $payload['target'] ?? '_blank',
        );
    }

    public static function makeCollection(string $parent, array $payload): Collection
    {

        if ($payload[$parent]['has_buttons'] ?? false) {
            return collect();
        }

        return collect($payload[$parent]['buttons'] ?? [])
            ->map(fn ($button) => self::make($parent, $button));
    }
}