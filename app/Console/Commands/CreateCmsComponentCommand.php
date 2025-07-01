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
    protected $signature = 'make:cms-component {name} {--section=landing}';

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
        $section = strtolower($this->option('section'));

        $parts = explode('/', $name);
        $classBase = Str::studly(array_pop($parts));
        $subfolder = Str::studly($parts[0] ?? $section);

        $className = "{$classBase}Component";
        $namespace = "App\\Filament\\Components\\{$subfolder}";

        $classPath = app_path("Filament/Components/{$subfolder}/{$className}.php");
        $bladeFolder = resource_path('views/components/' . strtolower($subfolder));
        $bladePath = "{$bladeFolder}/" . Str::kebab($classBase) . '.blade.php';

        if (File::exists($classPath)) {
            $this->error("❌ The Component {$className} already exists.");

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
        return self::SUCCESS;
    }

    private function replacePlaceholders(string $stub, array $replacements): string
    {
        return str_replace(array_keys($replacements), array_values($replacements), $stub);
    }
}
