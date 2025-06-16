<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use App\Models\CMS\Category;
use Database\Factories\AuthorFactory;
use Database\Factories\CMS\CategoryFactory;
use Database\Factories\CMS\PostFactory;
use Illuminate\Database\Seeder;
use Webid\Druid\Facades\Druid;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        $user = AuthorFactory::new()->create();

        foreach ($this->getCategoriesStructure() as $categoryByLocale) {
            if (! isset($categoryByLocale[Druid::getDefaultLocale()])) {
                return;
            }

            CategoryFactory::new()->create([
                ...$categoryByLocale[Druid::getDefaultLocale()],
                'lang' => Druid::getDefaultLocale(),
            ]);
        }

        foreach (config('firaga.articles') as $article) {
            PostFactory::new()
                ->forCategory(Category::query()->inRandomOrder()->first())
                ->forAuthor($user)
                ->create($article);
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
