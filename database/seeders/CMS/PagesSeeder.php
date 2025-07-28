<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use Database\Factories\CMS\PageFactory;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    public function run(): void
    {
        foreach (config('firaga.pages') as $page) {
            PageFactory::new()->create($page);
        }
    }
}
