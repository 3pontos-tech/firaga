<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\CardComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Support\Fluent;

class SplitWithHorizontalStepsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.split-horizontal-three-steps';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            Select::make('grid_columns')
                ->options([
                    2 => '2 Columns',
                    3 => '3 Columns',
                    4 => '4 Columns',
                ])
                ->label('Grid Columns')
                ->default(3)
                ->required(),
            Select::make('card_type')
                ->options([
                    'cta' => 'CTA',
                    'slim' => 'Slim',
                ])
                ->label('Card Type')
                ->default('cta')
                ->required(),
            ...CardComponent::form(),
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
            'grid_columns' => $data['grid_columns'] ?? 3,
            'card_type' => $data['card_type'] ?? 'cta',
            'cards' => CardComponent::makeCollection($data['cards'] ?? [])
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
}
