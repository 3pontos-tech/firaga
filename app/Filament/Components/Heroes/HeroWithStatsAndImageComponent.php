<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Fluent;
use Webid\Druid\Components\ComponentInterface;

class HeroWithStatsAndImageComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading')
                ->label('Heading')
                ->required()
                ->default('Invista no futuro com inteligência e precisão'),

            TextInput::make('subheading')
                ->label('Subheading')
                ->required()
                ->default('Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.'),

            TextInput::make('badge')
                ->label('Badge')
                ->nullable()
                ->default('Consultoria Financeira'),

            TextInput::make('cta_label')
                ->label('Button Text')
                ->required()
                ->default('Agende uma consultoria'),

            TextInput::make('cta_url')
                ->label('Button URL')
                ->required()
                ->default('/blog'),

            Repeater::make('metrics')
                ->label('Metrics')
                ->schema([
                    TextInput::make('label')
                        ->label('Label')
                        ->required(),
                    TextInput::make('value')
                        ->label('Value')
                        ->required(),
                    IconPicker::make('icon')
                        ->label('Icon')
                        ->required()
                        ->default('heroicon-o-tag'),
                ])
                ->default([
                    ['label' => 'Clientes Atendidos', 'value' => '1000+'],
                    ['label' => 'Sob Administração', 'value' => '70M'],
                    ['label' => 'Anos de experiência', 'value' => '9'],
                    ['label' => 'Crescimento Anual', 'value' => '300%'],
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithStatsAndImage->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.heroes.hero-with-stats-and-image', [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
            'badge' => $data['badge'],
            'cta_label' => $data['cta_label'],
            'cta_url' => $data['cta_url'],
            'metrics' => collect($data['metrics'] ?? [])->map(fn ($metric) => Fluent::make([
                'label' => $metric['label'] ?? '',
                'value' => $metric['value'] ?? '',
                'icon' => $metric['icon'] ?? 'heroicon-o-tag',
            ])),
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/500.png';
    }
}
