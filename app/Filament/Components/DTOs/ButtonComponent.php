<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Collection;

class ButtonComponent
{
    public function __construct(
        public string $label,
        public string $url,
        public string $target,
        public string $icon,
        public string $iconPosition
    ) {}

    public static function form(?string $parent = null): array
    {
        $parent = $parent !== null && $parent !== '' && $parent !== '0' ? $parent . '.' : null;

        return [
            Toggle::make($parent . 'has_actions')
                ->label('Has Buttons?')
                ->live(debounce: 50)
                ->default(false),
            Repeater::make($parent . 'buttons')
                ->visible(fn ($get) => $get($parent . 'has_actions'))
                ->label('Buttons')
                ->schema([
                    TextInput::make('label')
                        ->label('Label')
                        ->required(),
                    TextInput::make('url')
                        ->label('URL')
                        ->required(),
                    IconPicker::make('icon'),
                    Select::make('icon_position')
                        ->label('Icon Position')
                        ->options([
                            'leading' => 'Leading',
                            'trailing' => 'Trailing',
                        ])
                        ->default('trailing'),
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

    public static function make(array $payload): self
    {
        return new self(
            label: $payload['label'] ?? '',
            url: $payload['url'] ?? '',
            target: $payload['target'] ?? '_blank',
            icon: $payload['icon'] ?? '',
            iconPosition: $payload['icon_position'] ?? 'leading',
        );
    }

    public static function makeCollection(array $payload): Collection
    {
        if (! isset($payload['buttons'])) {
            return collect();
        }

        $payload = $payload['buttons'];

        if (! $payload['has_actions']) {
            return collect();
        }

        return collect($payload['buttons'] ?? [])
            ->map(fn ($button): ButtonComponent => self::make($button));
    }
}
