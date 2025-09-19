<?php

namespace App\Filament\Components\Heroes;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;

class HeroWithCenteredTitleComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.partials.grid-hero';

    public static function blockSchema(): array
    {
        return [
            'subheading' => TextInput::make('subheading'),
            'heading' => TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            'description' => TextInput::make('description')
                ->label(__('Description'))
                ->maxLength(255)
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HeroWithCenteredTitle->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'subheading' => $data['subheading'] ?? '',
            'heading' => $data['heading'] ?? '',
            'description' => $data['description'] ?? '',
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/301.png';
    }
    public static function getGroup(): string
    {
        return 'Hero';
    }
}
