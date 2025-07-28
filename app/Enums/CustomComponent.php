<?php

namespace App\Enums;

enum CustomComponent: string
{
    case BlogMarkdownText = 'blog-markdown-text';

    case BlogRichText = 'blog-rich-text';

    case PartialGridHero = 'partials-grid-hero';

    case PartialFaq = 'partials-faq';

    case PartialQuote = 'partials-quote';

    case CallToActionSection = 'call-to-action-section';

    case SplitWithVerticalSteps = 'split-with-vertical-steps';

}
