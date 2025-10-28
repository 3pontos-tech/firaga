<?php

namespace App\Filament\Components\DTOs;

use App\Enums\CustomComponent;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Utilities\Get;
use Ramsey\Uuid\Uuid;

readonly class ImageComponent
{
    public function __construct(
        public CustomComponent $component,
        public string $field,
        public string $componentId
    ) {}

    public static function form(
        CustomComponent $component,
        string $field = 'image',
        bool $isRequired = true
    ): array {
        $componentId = sprintf('%s_id', $field);

        return [
            Fieldset::make('Image')
                ->columns(1)
                ->schema([
                    Hidden::make($componentId)
                        ->formatStateUsing(fn ($state) => $state ?? Uuid::uuid4()->toString()),

                    SpatieMediaLibraryFileUpload::make($field)
                        ->label('Select Image')
                        ->customProperties(fn (Get $get): array => [
                            $componentId => $get($componentId),
                            'field' => $field,
                        ])
                        ->filterMediaUsing(
                            fn ($media, Get $get) => $media->where(
                                sprintf('custom_properties.%s', $componentId),
                                $get($componentId)
                            ),
                        )
                        ->visibility('public')
                        ->collection($component->value)
                        ->image()
                        ->required($isRequired),
                ]),
        ];
    }

    public static function make(
        CustomComponent $component,
        string $field,
        string $componentId
    ): static {
        return new static($component, $field, $componentId);
    }

    public function getCustomProperties(): array
    {
        return [
            'field' => substr($this->field, 0, -3),
            $this->field => $this->componentId,
        ];
    }
}
