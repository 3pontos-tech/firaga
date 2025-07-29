<?php

namespace App\Enums\App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\TextInput;

class CallToActionWithImageComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-with-image';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading')
                ->label('Heading')
                ->required(),
            TextInput::make('description')
                ->label('Description')
                ->required(),
            TextInput::make('cta_label')
                ->label('CTA Label')
                ->required(),
            TextInput::make('cta_url')
                ->label('CTA URL')
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionWithImage->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cta_label' => $data['cta_label'],
            'cta_link' => $data['cta_link'],
            'image' => $data['image'],
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
