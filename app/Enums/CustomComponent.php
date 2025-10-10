<?php

namespace App\Enums;

use App\Filament\Components\AbstractCustomComponent;
use App\Filament\Components\Blog\MarkdownTextComponent;
use App\Filament\Components\Blog\RichTextComponent;
use App\Filament\Components\CTAs\CallToActionWithImageComponent;
use App\Filament\Components\CTAs\CtaFullWidthComponent;
use App\Filament\Components\CTAs\CtaWithIconComponent;
use App\Filament\Components\Heroes\HeroWithBackgroundImageComponent;
use App\Filament\Components\Heroes\HeroWithBottomImageComponent;
use App\Filament\Components\Heroes\HeroWithCenteredTitleComponent;
use App\Filament\Components\Heroes\HeroWithCodeSnippetComponent;
use App\Filament\Components\Heroes\HeroWithImageComponent;
use App\Filament\Components\Heroes\HeroWithStatsAndImageComponent;
use App\Filament\Components\Heroes\HeroWithTitleOnly;
use App\Filament\Components\Media\FullWidthVideoComponent;
use App\Filament\Components\Media\VideoTestimonialComponent;
use App\Filament\Components\Partials\ContactFormComponent;
use App\Filament\Components\Partials\FaqComponent;
use App\Filament\Components\Partials\FlowTimeline;
use App\Filament\Components\Partials\HorizontalScrollerHighlightComponent;
use App\Filament\Components\Partials\InfoStatsComponent;
use App\Filament\Components\Partials\PlansComponent;
use App\Filament\Components\Partials\QuoteComponent;
use App\Filament\Components\Partials\RoadmapComponent;
use App\Filament\Components\Partials\SplitWithHorizontalStepsComponent;
use App\Filament\Components\Partials\SplitWithImageQuoteComponent;
use App\Filament\Components\Partials\SplitWithVerticalStepsComponent;
use App\Filament\Components\Partials\TestimonialsComponent;
use App\Filament\Components\Partials\TwoColumnsImageFeatureGridComponent;

enum CustomComponent: string
{
    case BlogMarkdownText = 'blog-markdown-text';

    case BlogRichText = 'blog-rich-text';

    case HeroWithBackgroundImage = 'hero-with-background-image';
    case HeroWithCodeSnippet = 'hero-with-code-snippet';

    case HeroWithTitleOnly = 'hero-with-title-only';

    case Faq = 'faq';

    case InfoStats = 'info-stats';


    case FlowTimeline = 'flow-timeline';
    case TwoColumnsImageFeatureGrid = 'two-columns-image-feature-grid';

    case SplitWithVerticalSteps = 'split-with-vertical-steps';
    case SplitWithImageQuote = 'split-with-image-quote';


    case SplitWithHorizontalSteps = 'split-with-horizontal-steps';

    case Plans = 'plans';

    case HorizontalScrollerHighlight = 'horizontal-scroller-highlight';

    case VideoTestimonial = 'video-testimonial';
    case FullWidthVideo = 'full-width-video';

    case Testimonials = 'testimonials';


    case CallToActionFullWidthSection = 'call-to-action-section';
    case CallToActionWithIconSection = 'call-to-action-with-icon';
    case CallToActionWithImage = 'call-to-action-with-image';

    case ContactForm = 'contact-form';


    public function getComponentClass(): string
    {
        return match ($this) {
            self::InfoStats => InfoStatsComponent::class,
            self::BlogMarkdownText => MarkdownTextComponent::class,
            self::BlogRichText => RichTextComponent::class,
            self::Faq => FaqComponent::class,
            self::CallToActionFullWidthSection => CtaFullWidthComponent::class,
            self::CallToActionWithIconSection => CtaWithIconComponent::class,
            self::SplitWithVerticalSteps => SplitWithVerticalStepsComponent::class,
            self::SplitWithHorizontalSteps => SplitWithHorizontalStepsComponent::class,
            self::SplitWithImageQuote => SplitWithImageQuoteComponent::class, // Assuming this is the correct mapping
            self::HorizontalScrollerHighlight => HorizontalScrollerHighlightComponent::class,
            self::Plans => PlansComponent::class,
            self::FullWidthVideo => FullWidthVideoComponent::class,
            self::Testimonials => TestimonialsComponent::class,
            self::HeroWithCodeSnippet => HeroWithCodeSnippetComponent::class,
            self::VideoTestimonial => VideoTestimonialComponent::class,
            self::TwoColumnsImageFeatureGrid => TwoColumnsImageFeatureGridComponent::class,
            self::CallToActionWithImage => CallToActionWithImageComponent::class,
            self::HeroWithBackgroundImage => HeroWithBackgroundImageComponent::class,
            self::ContactForm => ContactFormComponent::class,
            self::FlowTimeline => FlowTimeline::class,
            self::HeroWithTitleOnly => HeroWithTitleOnly::class
        };
    }

    public function getComponent(): AbstractCustomComponent
    {
        return app($this->getComponentClass());
    }

    public static function allComponents(): array
    {
        return array_map(fn(CustomComponent $component): array => ['class' => $component->getComponent()], self::cases());
    }
}
