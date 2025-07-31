<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;

class CtaFullWidthComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-full-width';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->label(__('Title')),
            TextInput::make('cta_label')
                ->required()
                ->label(__('Call to Action Label')),
            TextInput::make('cta_url')
                ->required()
                ->url()
                ->label(__('Call to Action URL')),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionFullWidthSection->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'title' => $data['title'],
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
        return 'https://http.cat/500.png';
    }
}
