<?php

namespace App\View;

use App\Enums\CustomComponent;
use App\Filament\Components\Blog\MarkdownTextComponent;
use App\Filament\Components\Blog\RichTextComponent;
use App\Filament\Components\Landing\HeroWithImageComponent;
use App\Filament\Components\Landing\IconSolutionsComponent;
use App\Filament\Components\Landing\MainHeroComponent;
use App\Filament\Components\Landing\PlansComponent;
use App\Filament\Components\Partials\CtaComponent;
use App\Filament\Components\Partials\FaqComponent;
use App\Filament\Components\Partials\GridHeroComponent;
use App\Filament\Components\Partials\QuoteComponent;
use App\Filament\Components\Partials\SplitWithVerticalStepsComponent;
use Illuminate\Contracts\View\View;
use Illuminate\View\ViewException;
use Webid\Druid\Components\ComponentInterface;

class TemplateRenderer
{
    public static function make(): self
    {
        return new self;
    }

    /**
     * @throws ViewException
     */
    public function render(string $type, array $data = []): View
    {
        $component = $this->resolveComponent($type);

        return $component->toBlade($data);
    }

    private function resolveComponent(string $type): ComponentInterface
    {
        if (!CustomComponent::tryFrom($type)) {
            throw new ViewException("Component type '{$type}' is not recognized.");
        }

        return CustomComponent::from($type)->getComponent();
    }
}
