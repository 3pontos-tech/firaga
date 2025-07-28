<?php

namespace App\Enums;

use App\Filament\Components\Blog\MarkdownTextComponent;
use App\Filament\Components\Blog\RichTextComponent;
use App\Filament\Components\Heroes\HeroWithStatsAndImageComponent;
use App\Filament\Components\Media\FullWidthVideoComponent;
use App\Filament\Components\Partials\CtaFullWidthComponent;
use App\Filament\Components\Partials\CtaWithIconComponent;
use App\Filament\Components\Partials\FaqComponent;
use App\Filament\Components\Partials\GridHeroComponent;
use App\Filament\Components\Partials\HorizontalScrollerHighlightComponent;
use App\Filament\Components\Partials\PlansComponent;
use App\Filament\Components\Partials\QuoteComponent;
use App\Filament\Components\Partials\SplitWithHorizontalStepsComponent;
use App\Filament\Components\Partials\SplitWithVerticalStepsComponent;
use App\Filament\Components\Partials\TestimonialsComponent;
use Webid\Druid\Components\ComponentInterface;

enum CustomComponent: string
{
    case BlogMarkdownText = 'blog-markdown-text';

    case BlogRichText = 'blog-rich-text';

    case PartialGridHero = 'partials-grid-hero';

    case PartialFaq = 'partials-faq';

    case PartialQuote = 'partials-quote';

    case CallToActionFullWidthSection = 'call-to-action-section';
    case CallToActionWithIconSection = 'call-to-action-with-icon';

    case SplitWithVerticalSteps = 'split-with-vertical-steps';

    case HeroWithStatsAndImage = 'hero-with-stats-and-image';
    case SplitWithHorizontalSteps = 'split-with-horizontal-steps';

    case Plans = 'plans';

    case HorizontalScrollerHighlight = 'horizontal-scroller-highlight';

    case FullWidthVideo = 'full-width-video';

    case Testimonials = 'testimonials';

    public function getComponentClass(): string
    {
        return match ($this) {
            self::BlogMarkdownText => MarkdownTextComponent::class,
            self::BlogRichText => RichTextComponent::class,
            self::PartialGridHero => GridHeroComponent::class,
            self::PartialFaq => FaqComponent::class,
            self::PartialQuote => QuoteComponent::class,
            self::CallToActionFullWidthSection => CtaFullWidthComponent::class,
            self::CallToActionWithIconSection =>  CtaWithIconComponent::class,
            self::SplitWithVerticalSteps => SplitWithVerticalStepsComponent::class,
            self::SplitWithHorizontalSteps => SplitWithHorizontalStepsComponent::class,
            self::HorizontalScrollerHighlight => HorizontalScrollerHighlightComponent::class,
            self::Plans => PlansComponent::class,
            self::HeroWithStatsAndImage => HeroWithStatsAndImageComponent::class,
            self::FullWidthVideo => FullWidthVideoComponent::class,
            self::Testimonials => TestimonialsComponent::class,
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
