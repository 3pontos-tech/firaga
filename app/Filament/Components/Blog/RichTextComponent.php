<?php

namespace App\Filament\Components\Blog;

use App\Enums\CustomComponent;
use Filament\Forms\Components\RichEditor;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class RichTextComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            RichEditor::make('content'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::BlogRichText->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.blog.partials.rich-text', [
            'content' => $data['content'] ?? '',
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/204.png';
    }
}
