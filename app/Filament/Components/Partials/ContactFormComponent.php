<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ContactFormComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.sections.contact-form';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading')
                ->label('Heading')
                ->required(),
            Textarea::make('description')
                ->label('Description')
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::ContactForm->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'heading' => $data['heading'],
            'description' => $data['description'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/500';
    }

    public static function getGroup(): string
    {
        return 'Form';
    }
}
