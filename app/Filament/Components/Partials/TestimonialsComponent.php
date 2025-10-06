<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use App\Models\Testimonial;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class TestimonialsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.testimonials';

    public static function blockSchema(): array
    {
        return [
            ...HeadlineComponent::form(),
            'testimonials' => Select::make('testimonials')
                ->label(__('Testimonials'))
                ->options(fn () => Testimonial::all()->pluck('name', 'id'))
                ->multiple(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::Testimonials->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'testimonials' => Testimonial::query()->whereIn('id', $data['testimonials'])->get(),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/301.png';
    }

    public static function getGroup(): string
    {
        return 'Section';
    }
}
