<?php

namespace App\Filament\Components\Partials;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class PlansComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            // uma parte de planos com um repeater pra cards???? mds do céu n sei
            TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            TextInput::make('subheading')
                ->label(__('Subheading'))
                ->required(),
            Repeater::make('plans')
                ->label(__('Plans'))
                ->schema([
                    Select::make('name')
                        ->label(__('Plan Type'))
                        ->options([
                            'gold' => 'Gold',
                            'platinum' => 'Platinum',
                            'black' => 'Black',
                        ])
                        ->required(),
                    TextInput::make('description')
                        ->label(__('Description'))
                        ->required(),
                    TextInput::make('note')
                        ->label(__('Note'))
                        ->nullable(),
                    Repeater::make('items')
                        ->label(__('Features'))
                        ->schema([
                            TextInput::make('feature')
                                ->label(__('Feature'))
                                ->required(),
                        ]),
                    TextInput::make('button.text')
                        ->label(__('Button Text'))
                        ->required(),
                    TextInput::make('button.url')
                        ->label(__('Button URL'))
                        ->required(),
                ])
                ->reorderableWithButtons()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'plans';
    }

    public static function toBlade(array $data): View
    {

        if (isset($data['plans'])) {
            foreach ($data['plans'] as &$plan) {
                if (isset($plan['items'])) {
                    $plan['items'] = collect($plan['items'])->pluck('feature')->toArray();
                }
            }
        }

        return view('components.landing.plans', [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
            'plansData' => collect($data['plans'] ?? []),
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/599';
    }
}
