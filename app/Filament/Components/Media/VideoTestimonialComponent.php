<?php

namespace App\Filament\Components\Media;

use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;

class VideoTestimonialComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.video-testimonial';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            'insights' => Repeater::make('insights')
                ->label(__('Testimonials Insights'))
                ->maxItems(3)
                ->schema([
                    TextInput::make('value')
                        ->label(__('Insight'))
                        ->required()
                        ->default('John Doe'),
                    IconPicker::make('icon'),
                ])
                ->columns(3)
                ->defaultItems(1),
            'video_url' => TextInput::make('video_url')
                ->label(__('Video URL'))
                ->required()
                ->url()
                ->default('https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
            'video_cards' => Repeater::make('video_cards')
                ->label(__('Video Cards'))
                ->schema([
                    TextInput::make('title')
                        ->label(__('Card Title'))
                        ->required()
                        ->default('Card Title'),
                    TextInput::make('value')
                        ->label(__('Card Description'))
                        ->required()
                        ->default('This is a description of the video card.'),
                ])
                ->columns(3)
                ->defaultItems(1),
            'cta_label' => TextInput::make('cta_label')
                ->label(__('CTA Label')),
            'cta_url' => TextInput::make('cta_url')
                ->label(__('CTA URL'))
                ->url(),
        ];
    }

    public static function fieldName(): string
    {
        return 'video-testimonial';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'insights' => $data['insights'] ?? [],
            'video_url' => $data['video_url'] ?? '',
            'video_cards' => $data['video_cards'] ?? [],
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'purple';
    }

    public static function getGroup(): string
    {
        return 'Media Section';
    }
}
