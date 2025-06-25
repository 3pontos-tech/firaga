<?php

use App\View\TemplateRenderer;
use Illuminate\Support\Facades\Config;
use Illuminate\View\ViewException;
use Webid\Druid\Components\ComponentInterface;

test('should implements ComponentInterface')
    ->expect('app\Filament\Components')
    ->toBeClasses()
    ->toImplement(ComponentInterface::class);

it('should implement the interface methods')
    ->expect('app\Filament\Components')
    ->toHaveMethods(['blockSchema', 'fieldName', 'toBlade', 'toSearchableContent', 'imagePreview']);

test('component should be registered at config/cms', function () {
    $componentsConfig = Config::get('cms.components');
    expect($componentsConfig)
        ->toBeArray()
        ->and($componentsConfig)->not->toBeEmpty('The "cms.components" configuration array is empty.');

    foreach ($componentsConfig as $component) {
        expect($component)->toHaveKey('class', $component['class']);

        $componentClass = $component['class'];

        expect(class_exists($componentClass))
            ->and($componentClass)
            ->toStartWith('App\Filament\Components' . '\\')
            ->toHaveSuffix('Component');
    }
});

test('component should be registered at TemplateRendererClass', function () {
    $templateRenderer = app(TemplateRenderer::class);
    $templateRenderer->render('Component That is not Registered');
})->throws(ViewException::class);
