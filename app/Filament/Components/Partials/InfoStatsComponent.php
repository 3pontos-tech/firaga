<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Fluent;

class InfoStatsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.info-stats';

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
        return CustomComponent::InfoStats->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
            'badge' => $data['badge'],
            'metrics' => collect($data['metrics'] ?? [])->map(fn ($metric) => Fluent::make([
                'label' => $metric['label'] ?? '',
                'value' => $metric['value'] ?? '',
                'icon' => $metric['icon'] ?? 'heroicon-o-tag',
            ])),
        ];
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
