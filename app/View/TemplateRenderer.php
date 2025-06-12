<?php

namespace App\View;

use App\Enums\CustomComponent;
use App\Filament\Components\Blog\TextComponent;
use App\Filament\Components\CodeComponent;
use App\Filament\Components\FaqComponent;
use App\Filament\Components\Landing\IconSolutionsComponent;
use App\Filament\Components\Landing\MainHeroComponent;
use Illuminate\Contracts\View\View;
use Illuminate\View\ViewException;
use Webid\Druid\Components\ComponentInterface;

class TemplateRenderer
{
    public static function make(): self
    {
        return new self;
    }

    public function render(string $type, array $data = []): View
    {

        $component = $this->resolveComponent($type);

        return $component->toBlade($data);
    }

    private function resolveComponent(string $type): ComponentInterface
    {
        return match ($type) {
            CustomComponent::BlogMarkdownText->value => app(TextComponent::class),
            'faq' => app(FaqComponent::class),
            'code' => app(CodeComponent::class),
            'main_hero' => app(MainHeroComponent::class),
            'icon_solutions' => app(IconSolutionsComponent::class),
            default => throw new ViewException(__('Unsupported component type: :type', ['type' => $type])),
        };

    }
}
