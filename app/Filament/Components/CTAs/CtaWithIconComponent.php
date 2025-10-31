<?php

namespace App\Filament\Components\CTAs;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;
use Guava\IconPicker\Forms\Components\IconPicker;

class CtaWithIconComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-with-icon';

    public static function blockSchema(): array
    {
        return [
            'title' => TextInput::make('title')
                ->required()
                ->label(__('Title')),
            'cta_label' => TextInput::make('cta_label')
                ->required()
                ->label(__('Call to Action Label')),
            'cta_url' => TextInput::make('cta_url')
                ->required()
                ->url()
                ->label(__('Call to Action URL')),
            'icon' => IconPicker::make('icon')
                ->required()
                ->label(__('Icon')),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionWithIconSection->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'title' => $data['title'] ?? '',
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
            'icon' => $data['icon'] ?? '',
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
        return 'CTA';
    }
}
