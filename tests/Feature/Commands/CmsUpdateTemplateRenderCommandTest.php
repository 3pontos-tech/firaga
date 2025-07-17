<?php

use Illuminate\Support\Facades\File;
use App\Filament\Components\Landing\MainHeroComponent;
use App\Filament\Resources\AuthorResource\Pages\ListAuthors;
use App\View\TemplateRenderer;

it('should add the component to the template render ', function (): void {
    $templateRenderPath = (new ReflectionClass(TemplateRenderer::class))->getFileName();
    $originalTemplateRender = File::get($templateRenderPath);

    $this->artisan('cms:update-templaterender', [
        'class' => ListAuthors::class,
        'field' => 'list-authors',
    ])
        ->expectsOutput('list-authors Component successfully added into TemplateRender.')
        ->assertExitCode(0);

    $modifiedTemplateRender = File::get($templateRenderPath);
    $expectedStringInFile = "            'list-authors' => app(ListAuthors::class),";
    $importedClass = "use App\Filament\Resources\AuthorResource\Pages\ListAuthors;";
    $this->assertStringContainsString($expectedStringInFile, $modifiedTemplateRender);
    $this->assertStringContainsString($importedClass, $modifiedTemplateRender);
    File::put($templateRenderPath, $originalTemplateRender);
});

it('should throws exception if file does not exists', function (): void {
    $this->artisan('cms:update-templaterender', [
        'class' => 'class-that-does-not-exists',
        'field' => 'list-authors',
    ]);
})->throws(Exception::class);

it('should fail if the component is already registered', function (): void {
    $this->artisan('cms:update-templaterender', [
        'class' => MainHeroComponent::class,
        'field' => 'main_hero',
    ])
        ->expectsOutput('Component main_hero already registered at TemplateRender.')
        ->assertExitCode(1);
});
