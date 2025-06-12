<?php

namespace App\Filament\Components\Landing;

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
            Repeater::make('plansData')
                ->label(__('Plans'))
                ->schema([
                    Select::make('name')
                        ->label(__('Plan Type'))
                        ->options([
                            'Gold' => 'Gold',
                            'Platinum' => 'Platinum',
                            'Black' => 'Black',
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
                            TextInput::make('item')
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
        if (isset($data['plansData'])) {
            foreach ($data['plansData'] as &$plan) {
                if (isset($plan['items'])) {
                    $plan['items'] = collect($plan['items'])->pluck('item')->toArray();
                }
            }
        }

        return view('components.landing.plans', [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
            'plansData' => collect($data['plansData'] ?? []),
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
