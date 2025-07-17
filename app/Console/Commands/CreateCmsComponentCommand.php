<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateCmsComponentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:cms-component {name} {--section=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a CMS component class and Blade view for custom components';

    /**
     * Execute the console command.
     *
     * @throws FileNotFoundException
     */
    public function handle(): int
    {
        $name = trim($this->argument('name'));

        $parts = explode('/', $name);
        $classBase = Str::studly(array_pop($parts));
        $subfolder = isset($parts[0]) && $parts[0] !== ''
            ? Str::studly($parts[0])
            : null;

        if (! $subfolder) {
            $subfolder = $this->option('section')
                ? Str::studly($this->option('section'))
                : $this->askForSection();
        }

        $className = $classBase . 'Component';
        $namespace = 'App\Filament\Components\\' . $subfolder;

        $classPath = app_path(sprintf('Filament/Components/%s/%s.php', $subfolder, $className));
        $bladeFolder = resource_path('views/components/' . strtolower($subfolder));
        $bladePath = $bladeFolder . '/' . Str::kebab($classBase) . '.blade.php';

        if (File::exists($classPath)) {
            $this->error(sprintf('❌ The Component %s already exists.', $className));

            return self::FAILURE;
        }

        $classStub = File::get(resource_path('stubs/cms-component/ComponentClass.stub'));
        $classContent = $this->replacePlaceholders($classStub, [
            '{{ namespace }}' => $namespace,
            '{{ class }}' => $className,
            '{{ fieldName }}' => strtolower($classBase),
            '{{ viewFolder }}' => strtolower($subfolder),
            '{{ viewName }}' => Str::kebab($classBase),
        ]);

        File::put($classPath, $classContent);

        $viewStub = File::get(resource_path('stubs/cms-component/ComponentView.stub'));
        $viewContent = $this->replacePlaceholders($viewStub, [
            '{{ classKebab }}' => Str::kebab($classBase),
        ]);

        File::put($bladePath, $viewContent);

        $this->info('✅ Class and Blade successfully created.');

        $section = $subfolder;
        $class = sprintf('%s\%s', $namespace, $className);
        $this->call('cms:update-config', [
            'class' => $class,
            'section' => $section,
        ]);
        $this->call('cms:update-templaterender', [
            'class' => $class,
            'field' => strtolower($classBase),
        ]);

        return self::SUCCESS;
    }

    private function replacePlaceholders(string $stub, array $replacements): string
    {
        return str_replace(array_keys($replacements), array_values($replacements), $stub);
    }

    private function askForSection(): string
    {
        $existing = collect(File::directories(app_path('Filament/Components')))
            ->map(fn ($dir) => Str::studly(basename($dir)))
            ->filter()
            ->values()
            ->all();

        if (! in_array('Landing', $existing)) {
            array_unshift($existing, 'Landing');
        }

        return $this->choice(
            'Select the section (subfolder) for this component:',
            $existing,
            array_search('Landing', $existing, true)
        );
    }
}
