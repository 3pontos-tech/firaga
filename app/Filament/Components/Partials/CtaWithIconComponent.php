<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class CtaWithIconComponent implements ComponentInterface
{

    public static function blockSchema(): array
    {
        return [
            'title' => TextInput::make('title')
                ->required()
                ->label(__('Title')),
            'cta_label' => TextInput::make('cta_label')
                ->required()
                ->label(__('Call to Action Label')),
            'cta_url' => TextInput::make('cta_url')
                ->required()
                ->url()
                ->label(__('Call to Action URL')),
            'icon' => IconPicker::make('icon')
                ->required()
                ->label(__('Icon')),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::CallToActionWithIconSection->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.cta-with-icon', [
            'title' => $data['title'] ?? '',
            'cta_label' => $data['cta_label'] ?? '',
            'cta_url' => $data['cta_url'] ?? '',
            'icon' => $data['icon'] ?? '',
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
