<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use App\Filament\Components\DTOs\ImageComponent;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Ramsey\Uuid\Uuid;

class CtaFullWidthComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-full-width';

    public static function blockSchema(): array
    {
        return [
            ...ImageComponent::form(CustomComponent::CallToActionFullWidthSection),

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
            'headline' => HeadlineComponent::make($data['headline']),
            'component_id' => $data['component_id'],
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

    public static function getGroup(): string
    {
        return 'CTA';
    }
}
