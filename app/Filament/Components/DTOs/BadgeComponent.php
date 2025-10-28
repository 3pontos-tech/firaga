<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Guava\FilamentIconPicker\Forms\IconPicker;

class BadgeComponent
{
    public function __construct(
        public ?string $label,
        public ?string $icon,
        public bool $hasBadge,
    ) {}

    public static function form(?string $parent): array
    {
        $parent = in_array($parent, [null, '', '0'], true) ? null : $parent . '.';

        return [
            Toggle::make($parent . 'has_badge')
                ->label('Has Badge?')
                ->live(debounce: 50)
                ->default(false),
            IconPicker::make($parent . 'icon')
                ->label('Icon')
                ->visible(fn ($get) => $get($parent . 'has_badge'))
                ->default('heroicon-o-tag'),
            TextInput::make($parent . 'label')
                ->visible(fn ($get) => $get($parent . 'has_badge'))
                ->label('Badge')
                ->nullable()
                ->default('Consultoria Financeira'),
        ];
    }

    public static function make(array $data): self
    {
        if (! isset($data['badge'])) {
            return new self(
                label: null,
                icon: null,
                hasBadge: false,
            );
        }

        $badge = $data['badge'];

        return new self(
            label: $badge['label'] ?? null,
            icon: $badge['icon'] ?? null,
            hasBadge: $badge['has_badge'] ?? false,
        );
    }
}
