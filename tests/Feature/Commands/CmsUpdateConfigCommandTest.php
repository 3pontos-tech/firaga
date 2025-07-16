<?php

use function PHPUnit\Framework\assertSame;

beforeEach(function () {
    $this->cmsPath = config_path('cms.php');
    $this->originalCmsFile = File::get($this->cmsPath);
    $this->originalCmsConfig = config('cms');
});
afterEach(function () {
    File::put($this->cmsPath, $this->originalCmsFile);
    config()->set('cms', $this->originalCmsConfig);
});

test('should add the component created at cms components array', function () {
    $this->artisan('cms:update-config', [
        'class' => 'App\Filament\Components\Landing\MainHeroComponent2',
        'section' => 'landing',
    ])
        ->expectsOutput('Class App\Filament\Components\Landing\MainHeroComponent2 appended at config/cms.php under landing section.')
        ->assertExitCode(0);
    config()->set('cms', require config_path('cms.php'));
    assertSame(config('cms.components')[0]['class'], 'App\Filament\Components\Landing\MainHeroComponent2');
});
it('should fail if component already registered ', function () {
    $this->artisan('cms:update-config', [
        'class' => 'App\Filament\Components\Blog\MarkdownTextComponent',
        'section' => 'blog',
    ])
        ->expectsOutput('Class App\Filament\Components\Blog\MarkdownTextComponent already registered at config.')
        ->assertExitCode(1);
});

it('should fail if is an invalid section', function () {
    $this->artisan('cms:update-config', [
        'class' => 'App\Filament\Components\Blog\MarkdownTextComponent2',
        'section' => 'aaaa',
    ])
        ->expectsOutput('Invalid aaaa section.')
        ->assertExitCode(1);
});

