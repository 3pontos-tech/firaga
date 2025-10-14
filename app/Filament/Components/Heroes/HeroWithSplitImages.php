<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class HeroWithSplitImages extends AbstractCustomComponent
{
    protected static string $view = 'components.heroes.hero-with-split-images';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->multiple()
                ->minFiles(3)
                ->maxFiles(3)
                ->label('Hero Image')
                ->collection(CustomComponent::HeroWithSplitImages->value)
                ->image()
                ->required(),
            ...HeadlineComponent::form(),
            TextInput::make('cta_label')
                ->label('CTA Label')
                ->required(),
            IconPicker::make('cta_icon'),
            TextInput::make('cta_url')
                ->label('CTA URL')
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithSplitImages->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cta_label' => $data['cta_label'],
            'cta_icon' => $data['cta_icon'] ?? '',
            'cta_url' => $data['cta_url'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return '#3c0000';
    }

    public static function getGroup(): string
    {
        return 'Hero';
    }
}
