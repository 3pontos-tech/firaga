<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Models\Testimonial;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class TestimonialsComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.testimonials';

    public static function blockSchema(): array
    {
        return [
            'badge' => TextInput::make('badge')
                ->label(__('Badge'))
                ->required(),
            'heading' => TextInput::make('heading')
                ->label(__('Heading'))
                ->required(),
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
            'heading' => $data['heading'],
            'badge' => $data['badge'],
            'testimonials' => Testimonial::query()->whereIn('id', $data['testimonials'])->get()
                ->map(function ($testimonial) {
                    return [
                        'id' => $testimonial->id,
                        'name' => $testimonial->name,
                        'role' => $testimonial->role,
                        'comment' => $testimonial->comment,
                        'avatar_url' => $testimonial->getFirstMediaUrl('avatar'),
                    ];
                })->values(),
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
}
