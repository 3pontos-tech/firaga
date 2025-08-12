<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;

class HeroWithBackgroundImageComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.heroes.hero-with-background-image';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->collection(CustomComponent::HeroWithBackgroundImage->value)
                ->image()
                ->required(),
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

            Select::make('hero_size')
                ->options([
                    'screen' => 'Tela cheia',
                    '[70vh]' => '70% da tela',
                ]),

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
            'hero_size' => $data['hero_size'] ?? 'screen',
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
