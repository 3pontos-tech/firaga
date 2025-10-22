<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\CardComponent;
use App\Filament\Components\DTOs\HeadlineComponent;

class InfoStatsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.info-stats';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            ...CardComponent::form('cards'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::InfoStats->value;
    }

    public static function setupRenderPayload(array $data): array
    {

        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'metrics' => CardComponent::makeCollection($data['cards'] ?? []),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'black';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
