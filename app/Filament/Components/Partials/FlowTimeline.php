<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class FlowTimeline extends AbstractCustomComponent
{
    protected static string $view = 'components.partials.flow-timeline';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            Repeater::make('timeline')
                ->label(__('Timeline'))
                ->schema([
                    TextInput::make('title')
                        ->label(__('Title'))
                        ->required(),
                    IconPicker::make('card_icon')
                        ->label(__('Card Icon')),
                    TextInput::make('card_title')
                        ->label(__('Card Title'))
                        ->required(),
                    TextInput::make('card_description')
                        ->label(__('Card Description'))
                        ->required(),
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::FlowTimeline->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'timeline' => collect($data['timeline'] ?? []),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return '';
    }

    public static function getGroup(): string
    {
        return 'Partial';
    }
}
