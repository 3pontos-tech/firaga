<?php

namespace App\Filament\Components;

use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class CodeComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            MarkdownEditor::make('content'),
        ];
    }

    public static function fieldName(): string
    {
        return 'code';
    }

    public static function toBlade(array $data): View
    {
        return view('welcome', []);
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
