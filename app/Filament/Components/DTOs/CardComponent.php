<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Fieldset;
use Guava\IconPicker\Forms\Components\IconPicker;
use Illuminate\Support\Collection;

class CardComponent
{
    /**
     * @param  Collection<int, ButtonComponent>  $actions
     */
    public function __construct(
        public string $title,
        public string $description,
        public ?string $icon,
        public Collection $actions,
    ) {}

    public static function form(?string $parent = null): array
    {
        $parent = in_array($parent, [null, '', '0'], true) ? null : $parent . '.';

        return [
            Fieldset::make('Cards')
                ->columns(1)
                ->schema([
                    Toggle::make($parent . 'has_cards')
                        ->label('Has Cards?')
                        ->live(debounce: 50)
                        ->default(false),
                    Select::make($parent . 'grid_columns')
                        ->options([
                            2 => '2 Columns',
                            3 => '3 Columns',
                            4 => '4 Columns',
                        ])
                        ->label('Grid Columns')
                        ->visible(fn ($get) => $get($parent . 'has_cards'))
                        ->default(3)
                        ->required(),
                    Select::make($parent . 'card_type')
                        ->options([
                            'cta' => 'CTA',
                            'slim' => 'Slim',
                        ])
                        ->visible(fn ($get) => $get($parent . 'has_cards'))
                        ->label('Card Type')
                        ->default('cta')
                        ->required(),
                    Repeater::make($parent . 'items')
                        ->label('Cards')
                        ->visible(fn ($get) => $get($parent . 'has_cards'))
                        ->cloneable()
                        ->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required(),
                            Textarea::make('description')
                                ->label('Description')
                                ->required(),
                            IconPicker::make('icon')
                                ->label('Icon')
                                ->required(),
                            ...ButtonComponent::form(),
                        ])
                        ->required(),
                ]),
        ];
    }

    public static function make(array $data): self
    {
        return new self(
            title: $data['title'],
            description: $data['description'],
            icon: $data['icon'] ?? null,
            actions: collect($data['buttons'] ?? [])
                ->map(fn (array $button): ButtonComponent => ButtonComponent::make($button)),
        );
    }

    public static function makeCollection(array $data): Collection
    {
        if (isset($data['has_cards']) && $data['has_cards'] !== true) {
            return collect();
        }

        return CardCollection::newCollection(
            cardType: $data['card_type'],
            columns: $data['grid_columns'],
            items: array_map(fn (array $item): CardComponent => self::make($item), $data['items'] ?? []),
        );
    }
}
