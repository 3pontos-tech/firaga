<?php

namespace App\Filament\Components\Landing;

use Illuminate\Contracts\View\View;
use Webid\Druid\Components\ComponentInterface;

class PlansComponent implements ComponentInterface
{
    public static function blockSchema(): array
    {
        return [
            // uma parte de planos com um repeater pra cards???? mds do céu n sei
        ];
    }

    public static function fieldName(): string
    {
        return 'plans';
    }

    public static function toBlade(array $data): View
    {
        return view('components.landing.plans');
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function imagePreview(): string
    {
        return 'https://http.cat/599';
    }
}
