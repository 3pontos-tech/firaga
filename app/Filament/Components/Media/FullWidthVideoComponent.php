<?php

namespace App\Filament\Components\Media;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\TextInput;

class FullWidthVideoComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.video-full-width';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            'video_url' => TextInput::make('video_url')
                ->label(__('Video URL'))
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::FullWidthVideo->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'video_url' => $data['video_url'] ?? '',
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
