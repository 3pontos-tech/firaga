<?php

use Webid\Druid\Components\ComponentInterface;

test('should implements ComponentInterface')
    ->expect('app\Filament\Components')
    ->toBeClasses()
    ->toImplement(ComponentInterface::class);

it('should implement the interface methods')
    ->expect('app\Filament\Components')
    ->toHaveMethods(['blockSchema', 'fieldName', 'toBlade', 'toSearchableContent', 'imagePreview']);
