<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Fluent;

class PlansComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.plans';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            Fieldset::make('Plans')
                ->columnSpanFull()
                ->schema([
                    Repeater::make('plans')
                        ->label(__('Plans'))
                        ->cloneable()
                        ->columnSpanFull()
                        ->collapsible()
                        ->schema([
                            Select::make('best_plan')
                                ->label(__('Best Plan?'))
                                ->boolean()
                                ->required(),
                            Select::make('name')
                                ->label(__('Plan Type'))
                                ->options([
                                    'gold' => 'Gold',
                                    'platinum' => 'Platinum',
                                    'black' => 'Black',
                                ])
                                ->required(),
                            TextInput::make('description')
                                ->label(__('Description'))
                                ->required(),
                            TextInput::make('note')
                                ->label(__('Note'))
                                ->nullable(),
                            Repeater::make('benefits')
                                ->label(__('Features'))
                                ->cloneable()
                                ->schema([
                                    Toggle::make('is_highlighted')->default(false),

                                    TextInput::make('value')
                                        ->label(__('Feature'))
                                        ->required(),
                                ]),
                            TextInput::make('cta_label')
                                ->label(__('Button Text'))
                                ->required(),
                            TextInput::make('cta_url')
                                ->label(__('Button URL'))
                                ->required(),
                        ])
                        ->reorderableWithButtons()
                        ->required(),
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::Plans->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'plans' => collect($data['plans'] ?? [])->map(fn ($plan) => Fluent::make([
                'best_plan' => $plan['best_plan'] ?? false,
                'name' => $plan['name'],
                'description' => $plan['description'],
                'note' => $plan['note'] ?? null,
                'benefits' => collect($plan['benefits']),
                'cta_label' => $plan['cta_label'],
                'cta_url' => $plan['cta_url'],
            ])),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/599';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
