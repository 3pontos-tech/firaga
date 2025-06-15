<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use Awcodes\Curator\Database\Factories\MediaFactory;
use Database\Factories\CMS\PageFactory;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->pages() as $page) {
            PageFactory::new()->create($page);
        }
    }

    public function pages(): array
    {
        return [
            'custom-planning' => [
                'meta_title' => 'Planejamento Personalizado',
                'meta_description' => 'Página de Planejamento Personalizado.',
                'meta_keywords' => 'planejamento, personalizado',
                'opengraph_title' => 'Planejamento Personalizado',
                'slug' => 'planejamento-personalizado',
                'opengraph_description' => 'Página de Planejamento Personalizado.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Serviços',
                            'heading' => 'Planejamento Personalizado',
                            'description' => 'Descubra o plano ideal para organizar, crescer e proteger seu patrimônio com inteligência.',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/custom-planning.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'Qual pacote é o mais indicado para o meu momento?',
                                    'answer' => 'O ideal é agendar uma análise financeira para entender o que mais faz sentido para seu momento. De forma geral, o Gold foca em organização, o Platinum aprofunda estratégia e investimentos e o Black oferece performance, proteção e visão internacional.',
                                ],
                                [
                                    'question' => 'Posso evoluir de um pacote para outro?',
                                    'answer' => 'Sim. Todos incluem suporte consultivo, com frequência e profundidade ajustadas ao plano escolhido. Todos os planos possibilitam até 8 reuniões com o planejador financeiro.',
                                ],
                                [
                                    'question' => 'Os planos servem para quem está endividado?',
                                    'answer' => 'O plano Gold, principalmente, é ideal para quem precisa recuperar o controle e construir uma base sólida. Junto a ele, temos o plano adicional Esmeralda, com foco em pessoas que estão endividadas.',
                                ],
                                [
                                    'question' => 'Os pacotes incluem acompanhamento?',
                                    'answer' => 'Sim. Todos incluem suporte consultivo, com frequência e profundidade ajustadas ao plano escolhido. Todos os planos possibilitam até 8 reuniões com o planejador financeiro.',
                                ],
                            ],
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'key-account' => [
                'meta_title' => 'Key Account',
                'meta_description' => 'Página de Key Account.',
                'meta_keywords' => 'planejamento, personalizado',
                'opengraph_title' => 'Key Account',
                'slug' => 'key-account',
                'opengraph_description' => 'Página de Key Account.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Serviços',
                            'heading' => 'Key Account',
                            'description' => 'Solução premium para quem busca inteligência, discrição e excelência na gestão patrimonial.',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/key-account.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'Qual o perfil ideal para o Key Account?',
                                    'answer' => 'Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com atendimento altamente personalizado.',
                                ],
                                [
                                    'question' => 'É possível contratar o Key Account para gestão internacional?',
                                    'answer' => 'Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando o perfil do cliente e as normas regulatórias.',
                                ],
                                [
                                    'question' => 'Com que frequência acontecem as reuniões?',
                                    'answer' => 'O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais sempre que necessário.',
                                ],
                                [
                                    'question' => 'O serviço também cobre sucessão familiar e herança?',
                                    'answer' => 'Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e continuidade para seu legado.',
                                ],
                            ],
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'educa-fire' => [
                'meta_title' => 'Educa Fire',
                'meta_description' => 'Página de Educa Fire.',
                'meta_keywords' => 'planejamento, personalizado',
                'opengraph_title' => 'Educa Fire',
                'slug' => 'educa-fire',
                'opengraph_description' => 'Página de Educa Fire.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Serviços',
                            'heading' => 'Educa Fire',
                            'description' => 'Conhecimento prático para transformar vidas e carreiras.',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/educa-fire.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'O que são os workshops da Fire|ce?',
                                    'answer' => 'São formatos imersivos, dinâmicos e objetivos, focados em temas específicos do mercado financeiro. Os workshops são validados e estruturados para conhecimento aplicado – não é apenas teoria. Cada encontro é planejado para que você saia com estratégias prontas para colocar em prática. Formato 100% online e com foco em geração de leads e conversões para consultoria.',
                                ],
                                [
                                    'question' => 'Qual é o diferencial das palestras da Fire|ce?',
                                    'answer' => 'Conectamos conhecimento com inspiração. Levamos educação financeira para empresas, eventos e grupos, abordando temas que impactam diretamente a vida das pessoas. Nossa abordagem vai além de conceitos teóricos – oferecemos insights práticos e estratégias aplicáveis imediatamente.',
                                ],
                                [
                                    'question' => 'A Fire|ce oferece formação para atuar no mercado financeiro?',
                                    'answer' => 'Sim! Para quem deseja se tornar um consultor de alto desempenho, oferecemos um caminho estruturado. A formação cobre desde metodologias até estratégias de atuação prática no mercado. O objetivo é preparar você para transformar vidas e construir uma carreira sólida na área financeira.',
                                ],
                            ],
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'partnerships' => [
                'meta_title' => 'Parcerias',
                'meta_description' => 'Página de Parcerias.',
                'meta_keywords' => 'planejamento, personalizado',
                'opengraph_title' => 'Parcerias',
                'slug' => 'parcerias',
                'opengraph_description' => 'Página de Parcerias.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Oportunidades',
                            'heading' => 'Parcerias',
                            'description' => 'Transformação real acontece com boas alianças',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/partnerships.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'Quem pode se tornar parceiro da Fire|ce?',
                                    'answer' => 'Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real.',
                                ],
                                [
                                    'question' => 'Quais são os formatos mais comuns de parceria?',
                                    'answer' => 'Desde Joint Ventures e projetos educacionais até parcerias comerciais, integrações de serviços.',
                                ],
                                [
                                    'question' => 'A Fire|ce investe em projetos em conjunto?',
                                    'answer' => 'Sim. Avaliamos oportunidades de forma individual e, quando há sinergia, investimos tempo, estrutura e até recursos para gerar resultados sólidos em parceria.',
                                ],
                                [
                                    'question' => 'Como iniciar uma conversa sobre parceria com a Fire|ce?',
                                    'answer' => 'Basta entrar em contato pelo nosso formulário ou canais oficiais. Vamos marcar uma reunião para entender como nossas forças podem se complementar.',
                                ],
                            ],
                        ],
                    ],
                ],
                'status' => 'published',
            ],
            'code-capital' => [
                'meta_title' => 'Code Capital',
                'meta_description' => 'Página de Code Capital.',
                'meta_keywords' => 'planejamento, personalizado',
                'opengraph_title' => 'Code Capital',
                'slug' => 'code-capital',
                'opengraph_description' => 'Página de Code Capital.',
                'content' => [
                    [
                        'type' => 'partials-grid-hero',
                        'data' => [
                            'subheading' => 'Serviços',
                            'heading' => 'Code Capital',
                            'description' => 'Invista onde seu talento já chega',
                        ],
                    ],
                    [
                        'type' => 'blog-markdown-text',
                        'data' => [
                            'content' => file_get_contents(resource_path('markdown/pages/code-capital.md')),
                        ],
                    ],
                    [
                        'type' => 'partials-faq',
                        'data' => [
                            'thumbnail' => MediaFactory::new()->create()->getKey(),
                            'solutions' => [
                                [
                                    'question' => 'Nossa Missão',
                                    'answer' => 'Poder auxiliar profissionais que já recebem em moeda estrangeira e que desejam investir também fora do Brasil, entendendo a instabilidade comum do Real. Tudo isso de forma online, sem perder o contato humano e o entendimento do mercado de TI, tornando a experiência única e imersiva em investimentos diferentes do comum.',
                                ],
                                [
                                    'question' => 'Para clientes diferenciados',
                                    'answer' => 'Se você já realiza tarefas online para qualquer país e gosta de ganhar em dólar, vai gostar ainda mais de ver sua rentabilidade crescer em moeda estrangeira. Nossa equipe entende a rotina de profissionais de TI e se adapta à sua realidade.',
                                ],
                                [
                                    'question' => 'Segurança para você e quem você ama',
                                    'answer' => 'Todos os investimentos são de caráter sucessório, garantindo que, mesmo diante de eventualidades, sua família terá tranquilidade e acesso aos recursos.',
                                ],
                                [
                                    'question' => 'Investimento fora do tradicional',
                                    'answer' => 'Além dos investimentos tradicionais, oferecemos opções em NY e UK, com instituições como BNY Mellon, UBS, BNP Paribas, Credit Suisse, entre outros.',
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
