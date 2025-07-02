<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CmsUpdateConfigCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:update-config {class} {section}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add component class to config/cms.php under correct section';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $class = trim($this->argument('class'));
        $section = strtolower($this->argument('section'));
        $configPath = config_path('cms.php');

        if (! File::exists($configPath)) {
            $this->error('The config/cms.php file was not found.');

            return self::FAILURE;
        }

        $content = File::get($configPath);

        if (str_contains($content, $class)) {
            $this->info("Class {$class} already registered at config.");

            return self::FAILURE;
        }

        $sectionComments = [
            'landing' => '// Landing Components',
            'blog' => '// Blog components',
            'partials' => '// Partial components',
        ];

        if (! isset($sectionComments[$section])) {
            $this->error("Invalid {$section} section.");

            return self::FAILURE;
        }

        $comment = $sectionComments[$section];
        $lines = explode("\n", $content);
        $inserted = false;

        foreach ($lines as $i => $line) {
            if (str_contains($line, $comment)) {
                array_splice($lines, $i + 1, 0, "        ['class' => {$class}::class],");
                $inserted = true;
                break;
            }
        }

        if (! $inserted) {
            $this->error("There is no comment named {$section} at config/cms.");

            return self::FAILURE;
        }

        File::put($configPath, implode("\n", $lines));

        $this->info("Class {$class} appended at config/cms.php under {$section} section.");

        return self::SUCCESS;
    }
}
