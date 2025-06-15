<?php

namespace App\Filament\Components\Partials;

use App\Enums\CustomComponent;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class FaqComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            CuratorPicker::make('thumbnail')
                ->label(__('Thumbnail'))
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
        return CustomComponent::PartialFaq->value;
    }

    public static function toBlade(array $data): View
    {
        return view('components.partials.faq', [
            'thumbnail' => Media::query()->find($data['thumbnail']),
            'solutions' => collect($data['solutions'] ?? []),
        ]);
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
}
