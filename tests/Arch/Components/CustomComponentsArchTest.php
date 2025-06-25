<?php

use Webid\Druid\Components\ComponentInterface;

test('should implements ComponentInterface')
    ->expect('app\Filament\Components')
    ->toBeClasses()
    ->toImplement(ComponentInterface::class);
