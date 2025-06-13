<?php

namespace App\Filament\Resources\CMS;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class CommonFields
{
    /**
     * @return array<int, Field>
     */
    public static function getCommonSeoFields(): array
    {
        return [
            Section::make(__('SEO Information'))
                ->label(__('filament.seo'))
                ->schema([
                    TextInput::make('meta_title')
                        ->label(__('filament.metaTitle')),
                    Textarea::make('meta_description')
                        ->label(__('filament.metaDescription')),
                    TextInput::make('meta_keywords')
                        ->label(__('filament.metaKeywords')),
                    Toggle::make('disable_indexation')
                        ->label(__('filament.disableIndexation'))
                        ->helperText(__('filament.disableIndexationHelper')),
                ])
                ->columns(1),

            Section::make(__('Open Graph Information'))
                ->label(__('filament.openGraph'))
                ->schema([
                    TextInput::make('opengraph_title')
                        ->label(__('filament.openGraphTitle')),
                    Textarea::make('opengraph_description')
                        ->label(__('filament.openGraphDescription')),
                    CuratorPicker::make('opengraph_picture')
                        ->label(__('filament.openGraphPicture'))
                        ->preserveFilenames(),
                    TextInput::make('opengraph_picture_alt')
                        ->label(__('filament.openGraphPictureAlt')),
                ])
                ->columns(1),
        ];
    }
}
