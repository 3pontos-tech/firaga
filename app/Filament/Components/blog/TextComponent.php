<?php

namespace App\Filament\Components\blog;

use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class TextComponent implements ComponentInterface
{

    public static function blockSchema(): array
    {
        // TODO: Implement blockSchema() method.
        return [
            TextInput::make('title')
                ->label(__('Title'))
                ->required(),
            TextInput::make('subtitle')
                ->label(__('Subtitle'))
                ->required(),
            TextInput::make('content')
                ->label(__('Content'))
                ->required()
        ];
    }

    public static function fieldName(): string
    {
        // TODO: Implement fieldName() method.
        return 'Text';
    }

    public static function toBlade(array $data): View
    {
        // TODO: Implement toBlade() method.
        return view();
    }

    public static function toSearchableContent(array $data): string
    {
        // TODO: Implement toSearchableContent() method.
        return '';
    }

    public static function imagePreview(): string
    {
        // TODO: Implement imagePreview() method.
        return '';
    }
}
