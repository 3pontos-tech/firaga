<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;

class HeroWithBottomImageComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.heroes.hero-with-bottom-image';

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
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithBottomImage->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'heading' => $data['heading'],
            'subheading' => $data['subheading'],
            'badge' => $data['badge'],
            'cta_label' => $data['cta_label'],
            'cta_url' => $data['cta_url'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/200.png';
    }
}
