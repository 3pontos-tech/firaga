<?php

declare(strict_types=1);

namespace App\Filament\Plugins\KnowledgeBase;

use Guava\FilamentKnowledgeBase\Filament\Pages\ViewDocumentation;

class BetterViewDocumentation extends ViewDocumentation
{
    protected static string $resource = BetterKnowledgeDocumentationResource::class;
}
