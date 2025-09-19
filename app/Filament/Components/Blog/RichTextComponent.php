<?php

namespace App\Filament\Components\Blog;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\RichEditor;

class RichTextComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.blog.partials.rich-text';

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

    public static function setupRenderPayload(array $data): array
    {
        return [
            'content' => $data['content'] ?? '',
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/204.png';
    }

    public static function getGroup(): string
    {
        return 'Blog';
    }
}
