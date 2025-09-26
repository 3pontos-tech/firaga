<?php

namespace App\Filament\Components\DTOs;

use App\Enums\CustomComponent;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Get;
use Ramsey\Uuid\Uuid;

class ImageComponent
{
    public static function form(
        CustomComponent $component,
        string          $field = 'image',
    )
    {
        return [
            Fieldset::make('Headline')
                ->columns(1)
                ->schema([
                    Hidden::make('component_id')
                        ->formatStateUsing(fn($state) => $state ?? Uuid::uuid4()->toString()),

                    SpatieMediaLibraryFileUpload::make($field)
                        ->label('Hero Image')
                        ->customProperties(fn(Get $get): array => [
                            'component_id' => $get('component_id'),
                        ])
                        ->filterMediaUsing(
                            fn($media, Get $get) => $media->where(
                                'custom_properties.component_id',
                                $get('component_id')
                            ),
                        )
                        ->collection($component->value)
                        ->image()
                        ->required(),
                ]),
        ];
    }
}