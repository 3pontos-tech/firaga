<?php

use App\Console\Commands\CmsUpdateConfigCommand;
use App\Console\Commands\CmsUpdateTemplateRenderCommand;
use Mockery\MockInterface;

describe('tests that need mocking', function (): void {
    beforeEach(function (): void {
        $this->instance(
            CmsUpdateConfigCommand::class,
            Mockery::mock(new CmsUpdateConfigCommand, function (MockInterface $mock): void {
                $mock->expects('run')->andReturns(0);
            })->makePartial()
        );
        $this->instance(
            CmsUpdateTemplateRenderCommand::class,
            Mockery::mock(new CmsUpdateTemplateRenderCommand, function (MockInterface $mock): void {
                $mock->expects('run')->andReturns(0);
            })->makePartial()
        );
    });
    it('creates a new component', function (): void {
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

    it('should see options when user dont write the section option ', function (): void {
        $classPath = app_path('Filament/Components/Blog/MainHero2Component.php');
        $viewPath = resource_path('views/components/blog/main-hero2.blade.php');

        $this->artisan('make:cms-component', [
            'name' => 'MainHero2',
        ])
            ->expectsQuestion('Select the section (subfolder) for this component:', 'Blog');
        unlink($classPath);
        unlink($viewPath);
    });
});

it('should not create a component that already exists', function (): void {
    $this->artisan('make:cms-component', [
        'name' => 'MainHero',
        '--section' => 'landing',
    ])
        ->expectsOutput('❌ The Component MainHeroComponent already exists.')
        ->assertExitCode(1);
});
