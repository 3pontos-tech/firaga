<?php

namespace App\Filament\Resources\CMS;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;

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
                        ->label(__('filament.meta_title')),
                    Textarea::make('meta_description')
                        ->label(__('filament.meta_description')),
                    TextInput::make('meta_keywords')
                        ->label(__('filament.meta_keywords')),
                    Toggle::make('disable_indexation')
                        ->label(__('filament.disable_indexation'))
                        ->helperText(__('filament.disable_indexation_helper')),
                ])
                ->columns(1),

            Section::make(__('Open Graph Information'))
                ->label(__('filament.open_graph'))
                ->schema([
                    TextInput::make('opengraph_title')
                        ->label(__('filament.open_graph_title')),
                    Textarea::make('opengraph_description')
                        ->label(__('filament.open_graph_description')),
                    TextInput::make('opengraph_picture_alt')
                        ->label(__('filament.open_graph_picture_alt')),
                ])
                ->columns(1),
        ];
    }
}
