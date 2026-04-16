<?php

declare(strict_types=1);

namespace App\Filament\Plugins\KnowledgeBase;

use Guava\FilamentKnowledgeBase\Enums\NodeType;
use Guava\FilamentKnowledgeBase\Models\FlatfileNode;

/**
 * @property-read string $panel_id
 */
class BetterFlatfileNode extends FlatfileNode
{
    public function getUrl(): string
    {
        return match ($this->getType()) {
            NodeType::Link => $this->getData()['url'],
            default => BetterViewDocumentation::getUrl(parameters: [
                'record' => $this,
            ], panel: $this->panel_id)
        };
    }
}
