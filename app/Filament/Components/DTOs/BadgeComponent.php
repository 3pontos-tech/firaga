<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Guava\FilamentIconPicker\Forms\IconPicker;

class BadgeComponent
{
    public function __construct(
        public ?string $label = null,
        public ?string $icon = null,
        public bool    $hasBadge,
    )
    {
    }

    public static function form(string $parent = ''): array
    {
        return [
            Toggle::make($parent . '.badge.has_badge')
                ->label('Has Badge?')
                ->live(debounce: 50)
                ->default(false),
            IconPicker::make($parent . '.badge.icon')
                ->label('Icon')
                ->visible(fn($get) => $get($parent . '.badge.has_badge'))
                ->default('heroicon-o-tag'),
            TextInput::make($parent . 'badge.label')
                ->visible(fn($get) => $get($parent . '.badge.has_badge'))
                ->label('Badge')
                ->nullable()
                ->default('Consultoria Financeira'),
        ];
    }

    public static function make(string $parent, array $data): self
    {

        $badge = $data[$parent]['badge'];
        return new self(
            label: $badge['label'] ?? null,
            icon: $badge['icon'] ?? null,
            hasBadge: $badge['has_badge'] ?? false,
        );
    }
}