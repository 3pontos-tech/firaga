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
            $category = CategoryFactory::new()->create([
                ...$categoryByLocale[Druid::getDefaultLocale()],
                'lang' => Druid::getDefaultLocale(),
            ]);

            PostFactory::new()
                ->count(5)
                ->forCategory($category)
                ->forAuthor($user)
                ->create();
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
                'meta_title' => 'Orçamento Individual e Familiar',
                'meta_description' => 'Página sobre Orçamento Individual e Familiar da Fire|ce.',
                'meta_keywords' => 'orçamento, financeiro, planejamento, familiar',
                'opengraph_title' => 'Orçamento Individual e Familiar',
                'slug' => 'orcamento-individual-familiar',
                'opengraph_description' => 'Planejamento de orçamento para indivíduos e famílias que desejam controlar, organizar e direcionar melhor seus recursos.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Serviços',
                            'heading' => 'Orçamento Individual e Familiar',
                            'description' => 'Recupere o controle da sua vida financeira com planejamento, clareza e estrutura.',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/budget-planning.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'Para quem é indicado o serviço de orçamento individual e familiar?',
                                    'answer' => 'Para pessoas que desejam estruturar sua vida financeira, ganhar clareza sobre gastos, organizar prioridades e alcançar objetivos com mais segurança.',
                                ],
                                [
                                    'question' => 'Como funciona o acompanhamento?',
                                    'answer' => 'Você terá reuniões para diagnóstico, estruturação do orçamento e orientações práticas para manter o plano no dia a dia. É um processo educativo e estratégico.',
                                ],
                                [
                                    'question' => 'Posso contratar esse serviço mesmo já tendo renda estável?',
                                    'answer' => 'Sim. Mesmo com renda, muitas pessoas perdem dinheiro por falta de estrutura e estratégia. O orçamento bem feito otimiza seu uso do dinheiro e gera mais tranquilidade.',
                                ],
                                [
                                    'question' => 'Esse serviço pode ajudar quem está endividado?',
                                    'answer' => 'Sim. O planejamento orçamentário é essencial para quem deseja sair do vermelho e retomar o controle financeiro com responsabilidade.',
                                ],
                            ],
                        ],
                    ],
                ],
                'status' => 'published',
            ],

        ];
    }
}
