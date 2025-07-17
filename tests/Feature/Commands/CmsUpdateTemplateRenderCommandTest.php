<?php

use App\Filament\Resources\AuthorResource\Pages\ListAuthors;
use App\View\TemplateRenderer;

it('should add the component to the template render ', function () {
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
