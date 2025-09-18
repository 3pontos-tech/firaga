<?php

namespace App\Filament\Components\DTOs;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Collection;

class HeadlineComponent
{
    /**
     * @param  Collection<int, ButtonComponent>  $actions
     */
    public function __construct(
        public ?BadgeComponent $badge,
        public string $heading,
        public array $keywords,
        public ?string $description,
        public string $position,
        public string $size,
        public Collection $actions,
    ) {}

    public static function form(): array
    {
        return [
            Fieldset::make('Headline')
                ->columns(1)
                ->schema([
                    TextInput::make('headline.heading')
                        ->label('Heading')
                        ->reactive()
                        ->afterStateUpdated(fn ($state, $set) => $set('headline.keywords', str($state)->explode(' ')))
                        ->required()
                        ->default('Invista no futuro com inteligência e precisão'),
                    TagsInput::make('headline.keywords')
                        ->label('Keywords'),
                    Select::make('headline.size')
                        ->label('Size')
                        ->options([
                            'sm' => 'Small',
                            'md' => 'Medium',
                            'lg' => 'Large',
                            'xl' => 'Extra Large',
                            '2xl' => '2x Extra Large',
                            '3xl' => '3x Extra Large',
                            '4xl' => '4x Extra Large',
                        ]),
                    Select::make('headline.position')
                        ->label('Position')
                        ->options([
                            'left' => 'Left',
                            'center' => 'Center',
                            'right' => 'Right',
                        ])
                        ->default('left'),

                    TextInput::make('headline.description')
                        ->label('Subheading')
                        ->default('Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.'),
                    ...BadgeComponent::form('headline.badge'),
                    ...ButtonComponent::form('headline.buttons'),
                ])];
    }

    public static function make(array $data): self
    {
        return new self(
            badge: BadgeComponent::make($data),
            heading: $data['heading'],
            keywords: $data['keywords'] ?? [],
            description: $data['description'],
            position: $data['position'] ?? 'left',
            size: $data['size'] ?? 'md',
            actions: ButtonComponent::makeCollection($data),
        );
    }
}
