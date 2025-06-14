<?php

namespace App\Filament\Components;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class CodeComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            MarkdownEditor::make('code'),
            TextInput::make('description'),
        ];
    }

    public static function fieldName(): string
    {
        return 'code';
    }

    public static function toBlade(array $data): View
    {
        return view('filament.components.code', [
            'code' => $data['code'] ?? '',
            'description' => $data['description'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://github.com/danielhe4rt.png';
    }
}
