<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
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

    public static function form(): array
    {
        return [
            TextInput::make('card.title')
                ->label('Title')
                ->required()
                ->default('Default Card Title'),

            Repeater::make('card.items')
                ->label('Cards')
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

            TextInput::make('card.description')
                ->label('Description')
                ->required()
                ->default('Default card description.'),

        ];
    }

    public static function make(array $data): self
    {
        return new self(
            title: $data['title'],
            description: $data['description'],
            icon: $data['icon'] ?? null,
            actions: ButtonComponent::makeCollection($data),
        );
    }

    public static function makeCollection(array $data): Collection
    {

        return collect($data)->map(fn ($card): \App\Filament\Components\DTOs\CardComponent => self::make($card));
    }
}
