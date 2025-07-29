<?php

namespace App\Filament\Components\Landing;

use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;

class MainHeroComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.landing.hero';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading'),
            TextInput::make('subheading')
                ->label(__('Subheading'))
                ->required(),
            TextInput::make('button_text'),
            TextInput::make('button_url')
                ->url(),
        ];
    }

    public static function fieldName(): string
    {
        return 'main_hero';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'heroData' => $data,
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://github.com/danielhe4rt.png';
    }
}
