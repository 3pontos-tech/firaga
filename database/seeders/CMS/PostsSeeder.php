<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use App\Models\CMS\Category;
use Database\Factories\AuthorFactory;
use Database\Factories\CMS\CategoryFactory;
use Database\Factories\CMS\PostFactory;
use Illuminate\Database\Seeder;
use Webid\Druid\Facades\Druid;
use Webmozart\Assert\Assert;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        $user = AuthorFactory::new()->create();
        Assert::notNull($user);

        foreach ($this->getCategoriesStructure() as $categoryByLocale) {
            if (! isset($categoryByLocale[Druid::getDefaultLocale()])) {
                return;
            }

            /** @var Category $category */
            CategoryFactory::new()->create([
                ...$categoryByLocale[Druid::getDefaultLocale()],
                'lang' => Druid::getDefaultLocale(),
            ]);
        }

        foreach ($this->pages() as $article) {
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

    public function pages(): array
    {
        return [
            'budget-planning' => [
                'title' => 'Planejamento de Orçamento',
                'excerpt' => 'Planejamento de orçamento é essencial para o controle financeiro.',
                'meta_title' => 'Orçamento Individual e Familiar',
                'meta_description' => 'Página sobre Orçamento Individual e Familiar da Fire|ce.',
                'meta_keywords' => 'orçamento, financeiro, planejamento, familiar',
                'opengraph_title' => 'Orçamento Individual e Familiar',
                'slug' => 'orcamento-individual-familiar',
                'opengraph_description' => 'Planejamento de orçamento para indivíduos e famílias que desejam controlar, organizar e direcionar melhor seus recursos.',
                'content' => [
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/articles/family-individual-budget.md')),
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'short-medium-long-term' => [
                'title' => 'Curto, Médio e Longo Prazo',
                'excerpt' => 'Aprenda como organizar suas finanças em curto, médio e longo prazo com estratégias que fazem o tempo trabalhar a seu favor.',
                'meta_title' => 'Curto, Médio e Longo Prazo',
                'meta_description' => 'Aprenda como organizar suas finanças em curto, médio e longo prazo com estratégias que fazem o tempo trabalhar a seu favor.',
                'meta_keywords' => 'planejamento financeiro, curto prazo, médio prazo, longo prazo, investimentos, metas financeiras, reserva de emergência, aposentadoria, educação financeira, organização financeira, estratégia de investimentos',
                'opengraph_title' => 'Orçamento Individual e Familiar',
                'slug' => 'se-organizando-no-curto-medio-longo-prazo',
                'opengraph_description' => 'Aprenda como organizar suas finanças em curto, médio e longo prazo com estratégias que fazem o tempo trabalhar a seu favor.',
                'content' => [
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/articles/short-medium-long-term.md')),
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'inflacao-e-como-se-proteger' => [
                'title' => 'Inflação e Como se Proteger',
                'excerpt' => 'Entenda o impacto da inflação no seu dia a dia e descubra estratégias práticas para proteger seu poder de compra.',
                'meta_title' => 'Inflação e Como se Proteger',
                'meta_description' => 'Entenda o impacto da inflação no seu dia a dia e descubra estratégias práticas para proteger seu poder de compra.',
                'meta_keywords' => 'inflação, planejamento financeiro, IPCA, taxa de juros, economia, investimentos, poder de compra, tesouro direto, tesouro IPCA, proteção financeira',
                'opengraph_title' => 'Inflação e Como se Proteger',
                'slug' => 'inflacao-e-como-se-proteger',
                'opengraph_description' => 'Entenda o impacto da inflação no seu dia a dia e descubra estratégias práticas para proteger seu poder de compra.',
                'content' => [
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/articles/short-medium-long-term.md')),
                        ],
                    ],
                ],
                'status' => 'published',
            ],

        ];
    }
}
