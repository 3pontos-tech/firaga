<?php

namespace App\Filament\Components\Media;

use App\Enums\CustomComponent;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class FullWidthVideoComponent implements ComponentInterface
{

    public static function blockSchema(): array
    {
        return [
            'badge' => TextInput::make('badge')
                ->label(__('Badge'))
                ->required(),
            'heading' => TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
            'description' => TextInput::make('description')
                ->label(__('Description'))
                ->required(),
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

    public static function toBlade(array $data): View
    {
        return view('components.sections.video-full-width', [
            'badge' => $data['badge'] ?? '',
            'heading' => $data['heading'] ?? '',
            'description' => $data['description'] ?? '',
            'video_url' => $data['video_url'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/301.png';
    }
}
