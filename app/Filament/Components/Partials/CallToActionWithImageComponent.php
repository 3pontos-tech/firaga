<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class CallToActionWithImageComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-with-image';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->collection(CustomComponent::CallToActionWithImage->value)
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
        return CustomComponent::CallToActionWithImage->value;
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

    public static function imagePreview(): string
    {
        return 'https://http.cat/200.png';
    }

    public static function getGroup(): string
    {
        return 'CTA';
    }
}
