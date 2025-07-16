<?php

use App\Console\Commands\CmsUpdateConfigCommand;
use Mockery\MockInterface;

it('creates a new component', function () {
    $cmsPath = config_path('cms.php');
    $cmsBackup = File::get($cmsPath);
    $originalConfig = config('cms');
    $this->instance(
        CmsUpdateConfigCommand::class,
        Mockery::mock(new CmsUpdateConfigCommand, function (MockInterface $mock) {
            $mock->shouldReceive('run')->once()->andReturn(0);
        })->makePartial()
    );
    $classPath = app_path('Filament/Components/Blog/MainHero2Component.php');
    $viewPath = resource_path('views/components/blog/main-hero2.blade.php');

    $this->artisan('make:cms-component', [
        'name' => 'MainHero2',
        '--section' => 'blog',
    ])
        ->expectsOutput('✅ Class and Blade successfully created.')
        ->assertExitCode(0);

    expect(file_exists($classPath))->toBeTrue()
        ->and(file_exists($viewPath))->toBeTrue();
    unlink($classPath);
    unlink($viewPath);
});

it('should not create a component that already exists', function () {
    $this->artisan('make:cms-component', [
        'name' => 'MainHero',
        '--section' => 'landing',
    ])
        ->expectsOutput('❌ The Component MainHeroComponent already exists.')
        ->assertExitCode(1);
});
