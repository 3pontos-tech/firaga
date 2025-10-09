<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\ButtonComponent;
use App\Filament\Components\DTOs\CardComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\TextInput;

class SplitWithHorizontalStepsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-horizontal-three-steps';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            ...CardComponent::form('cards'),
            TextInput::make('cta_description'),
            ...ButtonComponent::form(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::SplitWithHorizontalSteps->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cards' => CardComponent::makeCollection($data['cards'] ?? []),
            'cta_description' => $data['cta_description'] ?? '',
            'actions' => collect($data['buttons'] ?? [])
                ->map(fn ($button): ButtonComponent => ButtonComponent::make($button)),
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
