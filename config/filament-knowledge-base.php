<?php

declare(strict_types=1);

use App\Filament\Plugins\KnowledgeBase\BetterFlatfileNode;
use Filament\Support\Icons\Heroicon;
use Guava\FilamentKnowledgeBase\Enums\NodeType;

return [
    'flatfile-model' => BetterFlatfileNode::class,

    'cache' => [
        'prefix' => env('FILAMENT_KB_CACHE_PREFIX', 'filament_kb_'),
        'ttl' => env('FILAMENT_KB_CACHE_TTL', 86400),
    ],

    'icons' => [
        NodeType::Documentation->value => Heroicon::OutlinedDocument,
        NodeType::Link->value => Heroicon::OutlinedLink,
        NodeType::Group->value => null,
    ],
];
