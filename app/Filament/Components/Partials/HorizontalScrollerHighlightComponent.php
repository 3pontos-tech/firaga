<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\CardComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Fluent;

class HorizontalScrollerHighlightComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.horizontal-scroller-highlight';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            ...CardComponent::form('cards'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HorizontalScrollerHighlight->value;
    }

    public static function setupRenderPayload(array $data): array
    {

        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cards' => CardComponent::makeCollection($data['cards'] ?? []),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/500';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
