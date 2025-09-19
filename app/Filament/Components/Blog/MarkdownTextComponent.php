<?php

namespace App\Filament\Components\Blog;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\MarkdownEditor;

class MarkdownTextComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.blog.partials.text';

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
        return 'https://http.cat/201.png';
    }

    public static function getGroup(): string
    {
        return 'Blog';
    }
}
