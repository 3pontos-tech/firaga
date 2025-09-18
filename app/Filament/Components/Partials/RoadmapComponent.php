<?php

namespace App\Filament\Components\Partials;

use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class RoadmapComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.roadmap';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            'steps' => Repeater::make('steps')
                ->label(__('Steps'))
                ->schema([
                    TextInput::make('title')
                        ->label(__('Milestone Title'))
                        ->required(),

                    TextInput::make('description')
                        ->label(__('Milestone Description'))
                        ->required()
                        ->default('Description of the milestone.'),

                    IconPicker::make('icon')
                        ->label(__('Icon'))
                        ->required()
                        ->default('heroicon-o-check-circle'),

                    Select::make('has_cta')
                        ->label(__('Call to Action'))
                        ->reactive()
                        ->boolean(),

                    TextInput::make('cta_label')
                        ->label(__('Call to Action Label'))
                        ->required(fn ($get) => $get('has_cta'))
                        ->visible(fn ($get) => $get('has_cta')),
                    TextInput::make('cta_url')
                        ->label(__('Call to Action URL'))
                        ->url()
                        ->required(fn ($get) => $get('has_cta'))
                        ->visible(fn ($get) => $get('has_cta')),

                ])
                ->columns(1),
            'cta_label' => TextInput::make('cta_label')
                ->label(__('Call to Action Label'))
                ->required()
                ->default('Get Started'),
            'cta_url' => TextInput::make('cta_url')
                ->label(__('Call to Action URL'))
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'roadmap';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
            'steps' => $data['steps'] ?? [],
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
}
