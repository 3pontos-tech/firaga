<?php

namespace App\Filament\Components\Blog;

use App\Enums\CustomComponent;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class TextComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            'content' => MarkdownEditor::make('content'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::BlogMarkdownText->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.blog.partials.text', [
            'content' => $data['content'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/201.png';
    }
}
