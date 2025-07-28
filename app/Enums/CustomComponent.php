<?php

namespace App\Enums;

use App\Filament\Components\Blog\MarkdownTextComponent;
use App\Filament\Components\Blog\RichTextComponent;
use App\Filament\Components\Heroes\HeroWithStatsAndImageComponent;
use App\Filament\Components\Landing\PlansComponent;
use App\Filament\Components\Partials\CtaComponent;
use App\Filament\Components\Partials\FaqComponent;
use App\Filament\Components\Partials\GridHeroComponent;
use App\Filament\Components\Partials\HorizontalScrollerHighlightComponent;
use App\Filament\Components\Partials\QuoteComponent;
use App\Filament\Components\Partials\SplitWithHorizontalStepsComponent;
use App\Filament\Components\Partials\SplitWithVerticalStepsComponent;
use Webid\Druid\Components\ComponentInterface;

enum CustomComponent: string
{
    case BlogMarkdownText = 'blog-markdown-text';

    case BlogRichText = 'blog-rich-text';

    case PartialGridHero = 'partials-grid-hero';

    case PartialFaq = 'partials-faq';

    case PartialQuote = 'partials-quote';

    case CallToActionSection = 'call-to-action-section';

    case SplitWithVerticalSteps = 'split-with-vertical-steps';

    case HeroWithStatsAndImage = 'hero-with-stats-and-image';
    case SplitWithHorizontalSteps = 'split-with-horizontal-steps';

    case Plans = 'plans';


    case HorizntalScrollerHighlight = 'horizontal-scroller-highlight';

    public function getComponentClass(): string
    {
        return match ($this) {
            self::BlogMarkdownText => MarkdownTextComponent::class,
            self::BlogRichText => RichTextComponent::class,
            self::PartialGridHero => GridHeroComponent::class,
            self::PartialFaq => FaqComponent::class,
            self::PartialQuote => QuoteComponent::class,
            self::CallToActionSection => CtaComponent::class,
            self::SplitWithVerticalSteps => SplitWithVerticalStepsComponent::class,
            self::SplitWithHorizontalSteps => SplitWithHorizontalStepsComponent::class,
            self::HorizntalScrollerHighlight => HorizontalScrollerHighlightComponent::class,

            self::Plans => PlansComponent::class,
            self::HeroWithStatsAndImage => HeroWithStatsAndImageComponent::class,
        };
    }

    public function getComponent(): ComponentInterface
    {
        return app($this->getComponentClass());
    }

    public static function allComponents(): array
    {
        return array_map(fn($component) => ['class' => $component->getComponent()], self::cases());
    }
}
