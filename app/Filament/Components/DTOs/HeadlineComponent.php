<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Collection;

class HeadlineComponent
{
    /**
     * @param BadgeComponent|null $badge
     * @param string $heading
     * @param string $description
     * @param Collection<int, ButtonComponent> $actions
     */
    public function __construct(
        public ?BadgeComponent $badge,
        public string          $heading,
        public string          $description,
        public Collection      $actions,
    )
    {
    }

    public static function form(): array
    {
        return [
            TextInput::make('headline.heading')
                ->label('Heading')
                ->required()
                ->default('Invista no futuro com inteligência e precisão'),

            TextInput::make('headline.description')
                ->label('Subheading')
                ->required()
                ->default('Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.'),
            ...BadgeComponent::form('headline'),
            ...ButtonComponent::form('headline'),
        ];
    }

    public static function make(array $data): self
    {
        return new self(
            badge: BadgeComponent::make('headline', $data),
            heading: $data['headline']['heading'],
            description: $data['headline']['description'],
            actions: ButtonComponent::makeCollection('headline', $data),
        );
    }
}