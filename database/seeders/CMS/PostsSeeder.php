<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use App\Models\Author;
use App\Models\CMS\Category;
use Database\Factories\CMS\CategoryFactory;
use Database\Factories\CMS\PostFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Webid\Druid\Facades\Druid;

class PostsSeeder extends Seeder
{
    /**
     * @throws FileCannotBeAdded
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function run(): void
    {
        foreach (config('firaga.consultants') as $consultant) {
            $consultant = Author::factory()->create($consultant);

            $imagePath = public_path(sprintf('images/consultants/%s.jpeg', $consultant['slug']));
            $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
            $filePath = storage_path('app/tmp/' . Str::uuid() . '.' . $extension);

            File::ensureDirectoryExists(dirname($filePath));

            File::copy($imagePath, $filePath);

            $consultant
                ->addMedia($filePath)
                ->toMediaCollection('avatar');
        }

        /** @var Author $author */
        $author = Author::factory()->create([
            'name' => 'Daniel Reis',
            'slug' => 'daniel-reis',
        ]);

        $author->addMediaFromUrl('https://github.com/danielhe4rt.png')
            ->toMediaCollection('avatar');

        foreach ($this->getCategoriesStructure() as $categoryByLocale) {
            if (!isset($categoryByLocale[Druid::getDefaultLocale()])) {
                return;
            }

            CategoryFactory::new()->create([
                ...$categoryByLocale[Druid::getDefaultLocale()],
                'lang' => Druid::getDefaultLocale(),
            ]);
        }

        foreach (config('firaga.articles') as $article) {
            $post = PostFactory::new()
                ->forCategory(Category::query()->inRandomOrder()->first())
                ->forAuthor($author)
                ->create($article);

            $imagePath = public_path('images/stock/office-coworkers.png');
            $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
            $filePath = storage_path('app/tmp/' . Str::uuid() . '.' . $extension);

            File::ensureDirectoryExists(dirname($filePath));

            File::copy($imagePath, $filePath);

            $post
                ->addMedia($filePath)
                ->toMediaCollection('cover');
        }
    }

    /**
     * @return array<int, array<string, array<string, string>>>
     */
    protected function getCategoriesStructure(): array
    {
        return [
            [
                'en' => [
                    'name' => 'News',
                    'slug' => 'news',
                ],
                'fr' => [
                    'name' => 'Actualités',
                    'slug' => 'actualites',
                ],
                'de' => [
                    'name' => 'Nachricht',
                    'slug' => 'nachricht',
                ],
            ],
            [
                'en' => [
                    'name' => 'Decryption',
                    'slug' => 'decryption',
                ],
                'fr' => [
                    'name' => 'Décryptage',
                    'slug' => 'decryptage',
                ],
                'de' => [
                    'name' => 'Entschlüsselung',
                    'slug' => 'entschlusselung',
                ],
            ],
            [
                'en' => [
                    'name' => 'Sponsored article',
                    'slug' => 'sponsored-article',
                ],
                'fr' => [
                    'name' => 'Article sponsorisé',
                    'slug' => 'article-sponsorise',
                ],
                'de' => [
                    'name' => 'Gesponserter Artikel',
                    'slug' => 'gesponserter-artikel',
                ],
            ],
        ];
    }
}
