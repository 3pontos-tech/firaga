<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class CtaFullWidthComponent implements ComponentInterface
{

    public static function blockSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->label(__('Title')),
            TextInput::make('cta_label')
                ->required()
                ->label(__('Call to Action Label')),
            TextInput::make('cta_url')
                ->required()
                ->url()
                ->label(__('Call to Action URL')),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionFullWidthSection->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.cta-full-width', [
            'title' => $data['title'],
            'cta_label' => $data['cta_label'],
            'cta_url' => $data['cta_url'],
        ]);
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
