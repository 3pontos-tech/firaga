<?php

use App\Filament\Components\AbstractCustomComponent;
use Illuminate\Support\Facades\Config;

test('should extends AbstractCustomComponent')
    ->expect('app\Filament\Components')
    ->toBeClasses()
    ->toImplement(AbstractCustomComponent::class);

it('should implement the interface methods')
    ->expect('app\Filament\Components')
    ->toHaveMethods(['blockSchema', 'fieldName', 'toBlade', 'toSearchableContent', 'imagePreview']);

test('component should be registered at config/cms', function (): void {
    $componentsConfig = Config::get('cms.components');
    expect($componentsConfig)
        ->toBeArray()
        ->and($componentsConfig)->not->toBeEmpty('The "cms.components" configuration array is empty.');

    foreach ($componentsConfig as $component) {
        expect($component)->toHaveKey('class', $component['class']);

        $componentClass = $component['class'];

        expect(class_exists($componentClass::class))
            ->and($componentClass::class)
            ->toStartWith('App\\Filament\\Components\\')
            ->toHaveSuffix('Component');
    }
});
