<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\DTOs\HeadlineComponent;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Ramsey\Uuid\Uuid;

class CtaFullWidthComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.cta-full-width';

    public static function blockSchema(): array
    {
        return [
            Hidden::make('component_id')
                ->formatStateUsing(fn ($state) => $state ?? Uuid::uuid4()->toString()),
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->customProperties(fn (Get $get): array => [
                    'component_id' => $get('component_id'),
                ])
                ->filterMediaUsing(
                    fn ($media, Get $get) => $media->where(
                        'custom_properties.component_id',
                        $get('component_id')
                    ),
                )
                ->collection(CustomComponent::CallToActionFullWidthSection->value)
                ->image()
                ->required(),

            ...HeadlineComponent::form(),

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

    public static function setupRenderPayload(array $data): array
    {
        return [
            'headline' => HeadlineComponent::make($data['headline']),
            'cta_label' => $data['cta_label'],
            'cta_url' => $data['cta_url'],
            'component_id' => $data['component_id'],
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
