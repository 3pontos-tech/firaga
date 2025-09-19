<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

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
            Select::make('hero_size')
                ->options([
                    'screen' => 'Tela cheia',
                    '[70vh]' => '70% da tela',
                ]),

            ...HeadlineComponent::form(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithBottomImage->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
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

    public static function getGroup(): string
    {
        return 'Hero';
    }
}
