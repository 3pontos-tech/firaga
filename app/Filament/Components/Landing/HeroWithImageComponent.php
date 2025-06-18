<?php

namespace App\Filament\Components\Landing;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class HeroWithImageComponent implements ComponentInterface
{

    public static function blockSchema(): array
    {
        return [
            TextInput::make('heading')->required(),
            TextInput::make('subheading')->required(),
            TextInput::make('description')->required(),
            CuratorPicker::make('image')
                ->required()
                ->preserveFilenames()
                ->columnSpanFull(),
        ];
    }

    public static function fieldName(): string
    {
        // TODO: Implement fieldName() method.
        return 'hero_with_image';
    }

    public static function toBlade(array $data): View
    {
        $image = Media::query()->find($data['image'])->getSignedUrl();
        return view('components.landing.heroWithImage', [
            'heroWithImageData' => $data,
            'urlImage' => $image,
        ]);
    }

    public static function toSearchableContent(array $data): string
    {
        // TODO: Implement toSearchableContent() method.
        return '';
    }

    public static function imagePreview(): string
    {
        // TODO: Implement imagePreview() method.
        return 'https://github.com/rafascripts.png';
    }
}
