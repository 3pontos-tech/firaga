<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;

class HeroWithTitleOnly extends AbstractCustomComponent
{
    protected static string $view = 'components.heroes.hero-with-title-only';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithTitleOnly->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'orange';
    }

    public static function getGroup(): string
    {
        return 'Hero';
    }
}
