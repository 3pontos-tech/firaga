<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use App\Models\CMS\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    public function run(): void
    {
        Page::query()->truncate();

        foreach (config('firaga.pages') as $page) {
            $medias = $page['medias'] ?? [];
            unset($page['medias']);
            /** @var Page $page */
            $page = Page::factory()->create($page);

            foreach ($medias as $media) {
                $extension = pathinfo($media['path'], PATHINFO_EXTENSION);
                $filePath = storage_path('app/tmp/' . Str::uuid() . '.' . $extension);

                File::ensureDirectoryExists(dirname($filePath));

                File::copy($media['path'], $filePath);

                $page
                    ->addMedia($filePath)
                    ->withCustomProperties($media['custom_properties'] ?? [])
                    ->toMediaCollection($media['collection'] ?? 'default');
            }
        }
    }
}
