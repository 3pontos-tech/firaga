<?php

namespace App\Filament\Components\CTAs;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use App\Filament\Components\DTOs\ImageComponent;

class CtaFullWidthComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-full-width';

    public static function blockSchema(): array
    {
        return [
            ...ImageComponent::form(CustomComponent::CallToActionFullWidthSection, 'header'),

            ...HeadlineComponent::form(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionFullWidthSection->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'header' => ImageComponent::make(CustomComponent::CallToActionFullWidthSection, 'header_id', $data['header_id'] ?? ''),
            'headline' => HeadlineComponent::make($data['headline'])
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
