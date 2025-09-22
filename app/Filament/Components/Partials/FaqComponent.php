<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class FaqComponent extends AbstractCustomComponent
{
    protected static string $view = 'components.partials.faq';

    public static function blockSchema(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('hero')
                ->label('Hero Image')
                ->collection(CustomComponent::Faq->value)
                ->image()
                ->required(),
            Repeater::make('solutions')
                ->label(__('Solutions'))
                ->schema([
                    TextInput::make('question')
                        ->label(__('Question'))
                        ->required(),
                    Textarea::make('answer')
                        ->label(__('Answer'))
                        ->required(),
                ]),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::Faq->value;
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'solutions' => collect($data['solutions'] ?? []),
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        $solutions = collect($data['solutions'] ?? []);

        return $solutions->map(function ($solution): string {
            return ($solution['question'] ?? '') . ' ' . ($solution['answer'] ?? '');
        })->implode(' ');
    }

    public static function imagePreview(): string
    {
        return '';
    }

    public static function getGroup(): string
    {
        return 'Partial';
    }
}
