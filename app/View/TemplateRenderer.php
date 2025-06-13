<?php

namespace App\View;

use App\Enums\CustomComponent;
use App\Filament\Components\Blog\MarkdownTextComponent;
use App\Filament\Components\Blog\RichTextComponent;
use App\Filament\Components\Landing\IconSolutionsComponent;
use App\Filament\Components\Landing\MainHeroComponent;
use App\Filament\Components\Landing\PlansComponent;
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
            CustomComponent::BlogMarkdownText->value => app(MarkdownTextComponent::class),
            CustomComponent::BlogRichText->value => app(RichTextComponent::class),
            'main_hero' => app(MainHeroComponent::class),
            'icon_solutions' => app(IconSolutionsComponent::class),
            'plans' => app(PlansComponent::class),
            default => throw new ViewException(__('Unsupported component type: :type', ['type' => $type])),
        };

    }
}
