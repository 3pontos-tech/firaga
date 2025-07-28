<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Models\Testimonial;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;

class TestimonialsComponent implements \Webid\Druid\Components\ComponentInterface
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
            'subheading' => TextInput::make('subheading')
                ->label(__('Subheading'))
                ->required(),
            'testimonials' => Select::make('testimonials')
                ->label(__('Testimonials'))
                ->options(fn () => Testimonial::all()->pluck('name', 'id'))
                ->multiple()
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::Testimonials->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.sections.testimonials', [
            'heading' => $data['heading'],
            'badge' => $data['badge'],
            'subheading' => $data['subheading'],
            'testimonials' => Testimonial::whereIn('id', $data['testimonials'])->get(),
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
