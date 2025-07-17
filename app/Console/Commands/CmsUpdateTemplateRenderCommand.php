<?php

namespace App\Console\Commands;

use App\View\TemplateRenderer;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use ReflectionClass;

class CmsUpdateTemplateRenderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:update-templaterender {class} {field}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add component to resolveComponent method in TemplateRender.php';

    /**
     * Execute the console command.
     *
     * @throws FileNotFoundException
     * @throws \ReflectionException
     */
    public function handle(): int
    {
        $class = trim($this->argument('class'));
        $field = trim($this->argument('field'));
        $reflector = new ReflectionClass($class);
        $filePath = $reflector->getFileName();

        if (! File::exists($filePath)) {
            $this->info("Class {$class} not found");

            return self::FAILURE;
        }

        $templateRenderPath = (new ReflectionClass(TemplateRenderer::class))->getFileName();

        $content = File::get($templateRenderPath);

        if (str_contains($content, "'{$field}'")) {
            $this->info("Component {$field} already registered at TemplateRender.");

            return self::FAILURE;
        }

        $useStatement = "use {$class};";

        if (! str_contains($content, $useStatement)) {
            $content = preg_replace(
                '/^(namespace\s+[^\s;]+;\s*)/m',
                "$1\n{$useStatement}\n",
                $content,
                1
            );
        }

        // Regex to found match statement inside resolveComponent method
        $pattern = '/(private function resolveComponent\(string \$type\): ComponentInterface\s*{.*?return match\s*\(\$type\)\s*{)(.*?)(};\s*})/s';

        if (! preg_match($pattern, $content, $matches)) {
            $this->error('Match statement was not found at resolveComponent method.');

            return self::FAILURE;
        }

        $beforeMatch = $matches[1];
        $cases = trim($matches[2]);
        $afterMatch = $matches[3];

        $lines = explode("\n", $cases);
        $inserted = false;
        $classParts = explode('\\', $class);
        $shortClassName = end($classParts);
        $newCase = "            '{$field}' => app({$shortClassName}::class),";


        foreach ($lines as $index => $line) {
            if (str_contains($line, 'default')) {
                array_splice($lines, $index, 0, $newCase);
                $inserted = true;
                break;
            }
        }

        if (! $inserted) {
            $this->error('It was not possible to add the component into match statement.');

            return self::FAILURE;
        }

        $newCases = implode("\n", $lines);
        $newContent = $beforeMatch . "\n" . $newCases . "\n" . $afterMatch;

        $content = preg_replace($pattern, $newContent, $content);

        File::put($templateRenderPath, $content);

        $this->info("{$field} Component successfully added into TemplateRender.");

        return self::SUCCESS;
    }
}
