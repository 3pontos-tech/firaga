<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use Database\Factories\CMS\PageFactory;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    public function run(): void
    {
        PageFactory::new()
            ->count(5)
            ->create();
    }
}
