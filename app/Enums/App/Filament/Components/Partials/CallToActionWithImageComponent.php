<?php

namespace App\Enums\App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class CallToActionWithImageComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading')
                ->label('Heading')
                ->required(),
            TextInput::make('description')
                ->label('Description')
                ->required(),
            TextInput::make('cta_label')
                ->label('CTA Label')
                ->required(),
            TextInput::make('cta_url')
                ->label('CTA URL')
                ->url()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionWithImage->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.cta-with-image', [
            'heading' => $data['heading'],
            'description' => $data['description'],
            'cta_label' => $data['cta_label'],
            'cta_link' => $data['cta_link'],
            'image' => $data['image'],
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/200.png';
    }
}
