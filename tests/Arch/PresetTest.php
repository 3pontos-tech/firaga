<?php

declare(strict_types=1);

use App\Filament\Plugins\KnowledgeBase\BetterFlatfileNode;

arch('application must follow the defined Laravel architectural rules')
    ->preset()
    ->laravel()
    ->ignoring(BetterFlatfileNode::class);

arch('application must follow the defined PHP architectural rules')
    ->preset()
    ->php();

arch('application must follow security best practices')
    ->preset()
    ->security();
