<?php
it('creates a new component', function () {

    $classPath = app_path('Filament/Components/Blog/MainHero2Component.php');
    $viewPath = resource_path('views/components/blog/main-hero2.blade.php');
    $originalCmsArray = config('cms.components');

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

    config()->set('cms.components', $originalCmsArray);
});

it('should not create a component that already exists', function () {
    $this->artisan('make:cms-component', [
        'name' => 'MainHero',
        '--section' => 'landing',
    ])
        ->expectsOutput('❌ The Component MainHeroComponent already exists.')
        ->assertExitCode(1);
});
