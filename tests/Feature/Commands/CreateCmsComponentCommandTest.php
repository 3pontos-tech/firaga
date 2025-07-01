<?php

it('creates a new component', function () {

    $classPath = app_path('Filament/Components/Landing/MainHero2Component.php');
    $viewPath = resource_path('views/components/landing/main-hero2.blade.php');

    $this->artisan('make:cms-component', ['name' => 'MainHero2'])
        ->expectsOutput('✅ Class and Blade successfully created.')
        ->assertExitCode(0);

    expect(file_exists($classPath))->toBeTrue()
        ->and(file_exists($viewPath))->toBeTrue();
    unlink($classPath);
    unlink($viewPath);
});

it('should not create a component that already exists', function () {
    $this->artisan('make:cms-component', ['name' => 'MainHero'])
        ->expectsOutput('❌ The Component MainHeroComponent already exists.')
        ->assertExitCode(1);
});
