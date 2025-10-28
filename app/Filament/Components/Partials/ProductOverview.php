<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class ProductOverview extends AbstractCustomComponent
{
    protected static string $view = 'components.partials.product-overview';

    public static function blockSchema(): array
    {
        return [
            Fieldset::make('hero')
                ->statePath('hero')
                ->schema([
                    IconPicker::make('badge')
                        ->columnSpanFull(),
                    TextInput::make('title'),
                    TextInput::make('description'),
                    ColorPicker::make('gradient_from')
                        ->required(),
                    ColorPicker::make('gradient_to'),
                ])
                ->columnSpanFull(),

            Group::make([
                Fieldset::make('timeline')
                    ->statePath('timeline')
                    ->schema([
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required(),
                        TextInput::make('description'),
                        Repeater::make('steps')
                            ->label(__('Steps'))
                            ->schema([
                                TextInput::make('header')
                                    ->label(__('Header'))
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(1)
                    ->columns(1),

                Fieldset::make('benefits')
                    ->statePath('benefits')
                    ->label(__('Benefits'))
                    ->schema([
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required(),
                        TextInput::make('description'),
                        Repeater::make('items')
                            ->label(__('Items'))
                            ->schema([
                                TextInput::make('header')
                                    ->label(__('Header'))
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(1)
                    ->columns(1),
            ])->columns(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::ProductOverview->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'hero' => collect($data['hero'] ?? []),
            'timeline' => collect($data['timeline'] ?? []),
            'benefits' => collect($data['benefits'] ?? []),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'black';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
