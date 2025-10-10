<?php

use App\Enums\CustomComponent;
use App\Enums\FireceIcons;
use App\Enums\PageTheme;
use Carbon\Carbon;

return [
    'themes' => [
        'enabled' => true,
        'available' => [
            // ... append themes when they're ready for use.
        ],
    ],

    'pages' => [
        [
            'title' => 'Home',
            'meta_title' => 'Planejamento Personalizado – Consultoria Financeira sob Medida | Fire|ce',
            'meta_description' => 'Transforme sua vida financeira com os pacotes personalizados da Fire|ce. Do plano Gold ao Black, oferecemos organização, estratégia e performance para cada etapa da sua jornada.',
            'meta_keywords' => 'planejamento financeiro, planejamento personalizado, consultoria financeira, organização financeira, consultoria Fire|ce',
            'opengraph_title' => 'Planejamento Financeiro Personalizado para Cada Fase da Sua Vida | Fire|ce',
            'opengraph_description' => 'Descubra os pacotes exclusivos da Fire|ce para organizar, proteger e expandir seu patrimônio com inteligência e clareza.',
            'slug' => '/',
            'medias' => [
                [
                    'collection' => CustomComponent::HeroWithBackgroundImage->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                    'custom_properties' => [
                        "component_id" => "9461ce3e-893c-481d-b7d8-fc0320be353c",
                    ]
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                    'custom_properties' => [
                        "component_id" => "b954abbb-9b88-4479-b59e-b8322392c9bb",
                    ]
                ],
            ],
            'content' => [
                '7798b1ca-2bd4-40e4-b818-3d4685e771ff' => [
                    'type' => 'hero-with-background-image',
                    'data' => [
                        'headline' => [
                            'badge' => [
                                'label' => 'Invista agora com a Fire|ce',
                                'icon' => 'firece-logo',
                                'hasBadge' => true,
                                'has_badge' => true,
                            ],
                            'heading' => 'Transforme suas finanças e alcance sua liberdade financeira',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável. ',
                            'has_actions' => true,
                            'actions' => [
                                [
                                    'label' => 'Agende uma Análise',
                                    'url' => 'https://firece.com.br',
                                    'target' => '_blank',
                                ],
                            ],
                            'keywords' => [
                                'Transforme',
                                'alcance',
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    'b24de348-34d0-4966-9151-a2bf2555a696' => [
                                        'label' => 'Começar meu planejamento',
                                        'url' => 'https =>//firece.com.br',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                            'size' => '3xl',
                            'position' => 'left',
                        ],
                        'hero_size' => null,
                        'hero' => [
                            '4441b254-a4b2-4bc6-bf0b-234b48676fb7' => '4441b254-a4b2-4bc6-bf0b-234b48676fb7',
                        ],
                    ],
                ],
                'b6f1fbc7-7bbf-43f8-85ca-d106b98427b9' => [
                    'type' => 'info-stats',
                    'data' => [
                        'headline' => [
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'heading' => 'Viva melhor com Educação Financeira',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável. ',
                            'has_actions' => false,
                            'actions' => [],
                            'keywords' => [],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [],
                            ],
                            'size' => null,
                            'position' => null,
                        ],
                        'cards' => [
                            'has_cards' => true,
                            'items' => [
                                'f43c6faf-95c0-49c4-aa70-d45269f8bd42' => [
                                    'title' => 'Anos de experiência',
                                    'description' => '+10',
                                    'icon' => 'heroicon-o-star',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                'b5ee7b28-e243-47d0-8986-46c051f9c27b' => [
                                    'title' => 'Consultores Financeiros',
                                    'description' => '+10',
                                    'icon' => 'heroicon-o-users',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                'f34f28e5-9131-4946-9b88-e0d8fa7b156c' => [
                                    'title' => 'Crescimento Anual',
                                    'description' => '+300%',
                                    'icon' => 'heroicon-o-arrow-trending-up',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '46d74087-fb46-4297-ad8f-3ca036161d7f' => [
                                    'title' => 'Clientes Atendidos',
                                    'description' => '+2.000',
                                    'icon' => 'heroicon-o-user-plus',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                            ],
                            'grid_columns' => '4',
                            'card_type' => 'cta',
                        ],
                    ],
                ],
                '946a2681-337d-4dea-a057-36df8c8e37e5' => [
                    'type' => 'split-with-horizontal-steps',
                    'data' => [
                        'headline' => [
                            'heading' => 'Transformamos a complexidade em clareza com nossa metodologia',
                            'keywords' => [
                                'nossa',
                                'metodologia',
                            ],
                            'size' => 'xl',
                            'position' => 'center',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                            'badge' => [
                                'has_badge' => false,
                                'icon' => null,
                                'label' => null,
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [],
                            ],
                        ],
                        'cards' => [
                            'has_cards' => true,
                            'grid_columns' => 3,
                            'card_type' => 'slim',
                            'items' => [
                                '80a71bdd-0f91-4f45-8d3f-dcbdbd4e9120' => [
                                    'title' => 'Análise Financeira',
                                    'description' => 'O primeiro contato, onde conhecemos melhor suas metas, seus objetivos e estilo de vida para estruturarmos o seu planejamento financeiro estratégico.',
                                    'icon' => 'heroicon-c-chat-bubble-oval-left-ellipsis',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '297c7ccc-84d2-4312-8d87-15fa51457ef2' => [
                                    'title' => 'Plano de Ação',
                                    'description' => 'Nosso segundo encontro, onde trazemos estratégias detalhadas para começar a colocar em prática todas as mudanças necessárias e soluções encontradas.',
                                    'icon' => 'heroicon-c-chat-bubble-oval-left-ellipsis',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                'c04a3a0c-5619-40d9-bd6c-d5f60492ecb1' => [
                                    'title' => 'Acompanhamento',
                                    'description' => 'No terceiro momento, acompanhamos sua evolução e ajustamos o planejamento conforme sua vida muda. Estamos ao seu lado para que você se mantenha no caminho certo.',
                                    'icon' => 'heroicon-c-chat-bubble-oval-left-ellipsis',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                            ],
                        ],
                        'cta_description' => 'Não encontrou exatamente o que procura?',
                        "has_actions" => true,
                        "buttons" => [
                            "ad1b59a6-fbb4-492b-b2e4-d3e7dff7713d" => [
                                "label" => "Agende uma análise",
                                "url" => "https://firece.com",
                                "icon" => "heroicon-c-chevron-right",
                                "icon_position" => "trailing",
                                "target" => "_blank",
                            ],
                        ],
                    ],
                ],
                '3fd3a1ae-7d18-457d-a11f-17c6bbed5451' => [
                    'type' => 'split-with-vertical-steps',
                    'data' => [
                        'headline' => [
                            'heading' => 'Perfis e necessidades',
                            'keywords' => [],
                            'size' => null,
                            'position' => 'left',
                            'description' => 'Saber se você é endividado, desorganizado ou poupador faz toda a diferença: é com esse entendimento que conseguimos traçar estratégias financeiras personalizadas, que respeitam sua realidade e aceleram seus resultados.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    'da8e78cb-ab9b-44cd-9623-4555547a9999' => [
                                        'label' => 'Quero começar agora',
                                        'url' => 'https://firece.com',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                        ],
                        'cards' => [
                            'has_cards' => true,
                            'grid_columns' => 3,
                            'card_type' => 'cta',
                            'items' => [
                                '2f2ff8ad-d764-4df6-8dd6-e1ef72198970' => [
                                    'title' => 'Se você sente que poderia estar melhor',
                                    'description' => 'Seu dinheiro some sem que perceba? Sente que poderia estar guardando mais, gastando melhor e tendo mais controle financeiro? Agende sua consultoria que nós vamos te ajudar!',
                                    'icon' => 'lucide-goal',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '2cf6d386-c2ef-4988-b0ca-bbbac0f47340' => [
                                    'title' => 'Não sabe como potencializar?',
                                    'description' => 'Criamos um planejamento financeiro alinhado com seus objetivos, transformando sua reserva em um plano sólido de crescimento. Chegou a hora de fazer suas economias trabalharem para você.',
                                    'icon' => 'lucide-goal',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                'ddf55a90-ecf3-410a-aeee-228e76c6deb8' => [
                                    'title' => 'Se você já investe e quer ir mais longe',
                                    'description' => 'Talvez sua carteira não seja tão diversificada ou seus rendimentos não estejam alinhados com seus objetivos. Está na hora de otimizar sua estratégia.',
                                    'icon' => 'lucide-goal',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                            ],
                        ],
                    ],
                ],
                '2f4bb5c8-80dd-48ec-9bc7-896e88e76be6' => [
                    'type' => 'call-to-action-section',
                    'data' => [
                        'component_id' => '9461ce3e-893c-481d-b7d8-fc0320be353c',
                        'headline' => [
                            'heading' => 'Não tema a faísca da mudança ela forja sua evolução.',
                            'keywords' => [
                                'Não',
                                'tema',
                                'sua',
                                'evolução.',
                            ],
                            'size' => '3xl',
                            'position' => 'center',
                            'description' => null,
                            'badge' => [
                                'has_badge' => false,
                                'icon' => null,
                                'label' => null,
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    '1160ecf4-2111-471c-a9b8-b63ede512bec' => [
                                        'label' => 'Agendar uma análise',
                                        'url' => 'https://firece.com',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                        ],
                        'image' => [
                            'f911656a-d1bf-4169-83e2-9e35330232ce' => 'f911656a-d1bf-4169-83e2-9e35330232ce',
                        ],
                    ],
                ],
                'ebd8e66e-3b01-4048-bc32-c0e02396169e' => [
                    'type' => 'horizontal-scroller-highlight',
                    'data' => [
                        'headline' => [
                            'heading' => 'Soluções personalizadas',
                            'keywords' => [],
                            'size' => 'lg',
                            'position' => 'center',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [],
                            ],
                        ],
                        'cards' => [
                            'has_cards' => true,
                            'grid_columns' => '4',
                            'card_type' => 'cta',
                            'items' => [
                                'b0da86fd-af68-41e7-902d-0c4db7e15035' => [
                                    'title' => 'Planejamento',
                                    'description' => 'Diagnóstico completo e plano financeiro...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                'dad65811-a269-47e1-84cc-67aeec7b630d' => [
                                    'title' => 'Key Account',
                                    'description' => 'Consultoria exclusiva e contínua para quem bus...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '41ad5aa3-a2f4-4e9c-9d1d-1cefc2e7c698' => [
                                    'title' => 'Educa Fire',
                                    'description' => 'Consultoria exclusiva e contínua para quem bus...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '79fe06d2-f3ab-4892-a6b0-56c45b758f18' => [
                                    'title' => 'Parcerias',
                                    'description' => 'Soluções integradas com especialistas e marcas...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                                '02310782-4e08-40f8-9a7d-2d59b866b3ee' => [
                                    'title' => 'Code Capital',
                                    'description' => 'Consultoria financeira especializada para...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => false,
                                    'buttons' => [],
                                ],
                            ],
                        ],
                    ],
                ],
                '36ef206b-bab9-4963-ba09-a8e433267c88' => [
                    'type' => 'plans',
                    'data' => [
                        'headline' => [
                            'heading' => 'Conheça nossos planos',
                            'keywords' => [],
                            'size' => 'lg',
                            'position' => 'center',
                            'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [],
                            ],
                        ],
                        'plans' => [
                            '409695ac-76d8-4a77-b1da-c82c69934cf1' => [
                                'best_plan' => '0',
                                'name' => 'gold',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    'fe93c94e-3f19-49b4-9d71-7c3cd6a5c758' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    'f0a24929-a9ed-4fcf-88be-09ed3f58b1b1' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    '5c9c00e3-adb4-417d-a446-f3869c48a482' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro',
                                    ],
                                    '7acc768a-ed2b-4493-bc43-b057294a2bd6' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva',
                                    ],
                                    '0eaf3c5a-7fcb-4b7c-a883-b91e2b78f198' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa',
                                    ],
                                    '17c21020-85f8-4163-9ecc-a07da4c3caee' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio',
                                    ],
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://firece.com',
                            ],
                            '1ade6802-bcf5-4f39-9b52-1bbd93dabfae' => [
                                'best_plan' => '0',
                                'name' => 'platinum',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    '55014493-c342-4073-88fb-1590084a82d7' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    '697bb2ed-70a7-49b9-9e97-a41beb2336c2' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    '3f177e2e-3739-4b6b-98d6-8e10b1f85f84' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro',
                                    ],
                                    '4a9d1f1b-2553-4f88-9b33-05060a494299' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva',
                                    ],
                                    'd578ccdc-bd42-4805-a561-8cd3d5065654' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa',
                                    ],
                                    'a3d71332-8929-4bbb-8f66-c1334823d17d' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio',
                                    ],
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://firece.com',
                            ],
                            'a47f3ba2-f4bb-43c9-8786-16ecb8aa9c53' => [
                                'best_plan' => '1',
                                'name' => 'black',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    '6d783dd0-9573-4749-ab1a-b97c43f129fc' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    '52970488-cb43-4c03-b5a7-eed15c1f4ea7' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual',
                                    ],
                                    'ffd9771c-2e49-4f47-984c-477617130fbd' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro',
                                    ],
                                    'f2a1767c-cdeb-4dcb-91c9-b94d569217d3' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva',
                                    ],
                                    '8f726a9b-50e2-45c4-a286-2d9bc4aa232e' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa',
                                    ],
                                    '34a740a8-2224-415e-8cb3-04cb946a7a3f' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio',
                                    ],
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://firece.com',
                            ],
                        ],
                    ],
                ],
                '6f38afee-cf9d-472d-a79d-f01e580ac269' => [
                    'type' => 'full-width-video',
                    'data' => [
                        'headline' => [
                            'heading' => 'Nos conheça melhor',
                            'keywords' => [],
                            'size' => 'lg',
                            'position' => 'center',
                            'description' => 'Você não precisa enfrentar sua vida financeira sozinho. Descubra como a Fire|ce pode caminhar com você — do caos à conquista.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [
                                    'ca1959f3-5fd5-44d6-bd11-de205cbdfa9e' => [
                                        'label' => 'Quero Começar Agora',
                                        'url' => 'https://firece.com',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                        ],
                        'video_url' => 'https://vai-brasil.com',
                    ],
                ],
                '32df460a-5070-4ae6-ab54-a069e1224472' => [
                    'type' => 'testimonials',
                    'data' => [
                        'headline' => [
                            'heading' => 'Escute de nossos clientes',
                            'keywords' => [],
                            'size' => 'lg',
                            'position' => 'center',
                            'description' => 'Levamos você da análise de perfil à execução estratégica, com suporte contínuo para maximizar seus resultados. Nossa metodologia foi desenvolvida para transformar a sua relação com o dinheiro em 3 etapas fundamentais:',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Invista agora com a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => [
                                    '5c129509-3888-4876-a79e-9e9a77d06a00' => [
                                        'label' => 'Quero Começar Agora',
                                        'url' => 'https://firece.com',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                        ],
                        'testimonials' => [
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '7',
                            '8',
                            '9',
                            '10',
                        ],
                    ],
                ],
                '8aea2526-b72b-47ed-aefe-489fff1dfe73' => [
                    'type' => 'call-to-action-section',
                    'data' => [
                        'component_id' => 'b954abbb-9b88-4479-b59e-b8322392c9bb',
                        'image' => [
                            '8e307885-06bd-48be-a227-eb711a3b68ec' => '8e307885-06bd-48be-a227-eb711a3b68ec',
                        ],
                        'headline' => [
                            'heading' => 'Tem jeito, tem plano e tem apoio. A Fire|ce está com você nessa virada financeira.',
                            'keywords' => [
                                'Fire|ce',
                            ],
                            'size' => '3xl',
                            'position' => 'center',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                            'badge' => [
                                'has_badge' => false,
                                'icon' => 'heroicon-o-tag',
                                'label' => 'Consultoria Financeira',
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    '53c07c42-e069-4c34-ac9e-0df90b005b69' => [
                                        'label' => 'Quero Começar Agora',
                                        'url' => 'https://firece.com',
                                        'icon' => 'heroicon-c-chevron-right',
                                        'icon_position' => 'trailing',
                                        'target' => '_blank',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                "822f7358-74c6-49a7-9db7-89665d644b29" => [
                    "type" => "call-to-action-with-icon",
                    "data" => [
                        "title" => "Visite nosso Blog e tenha acesso à conteúdos exclusivos",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://firece.com",
                        "icon" => "lucide-book-marked",
                    ],
                ],
            ],
            'status' => 'published',
        ],
        [
            'title' => 'Code Capital',
            'meta_title' => 'Code Capital – Investimentos Internacionais para Desenvolvedores | Fire|ce',
            'meta_description' => 'A Fire|ce oferece soluções financeiras globais para profissionais de tecnologia. Invista com segurança e performance no exterior com planejamento personalizado.',
            'meta_keywords' => 'investimento internacional, desenvolvedores, profissionais de tecnologia, Fire|ce, code capital, tesouro internacional, planejamento financeiro, carteira global, dólar, investimentos no exterior',
            'opengraph_title' => 'Code Capital – Investimento Inteligente para Profissionais de Tecnologia | Fire|ce',
            'opengraph_description' => 'Seu talento é global — seus investimentos também podem ser. Conheça o Code Capital da Fire|ce e invista com inteligência no mercado internacional.',
            'slug' => 'code-capital',
            'medias' => [
                [
                    'collection' => CustomComponent::HeroWithBackgroundImage->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                    'custom_properties' => [
                        "component_id" => "e1bd64b1-7a01-4f6b-9292-c687740ca409",
                    ]
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
            ],
            'content' => [
                "604b2665-4b8d-46da-8410-1a516ff18862" => [
                    "type" => "hero-with-background-image",
                    "data" => [
                        "hero_size" => "[70vh]",
                        "headline" => [
                            "heading" => "Consultoria exclusiva e diferenciada para profissionais de tecnologia",
                            "keywords" => [
                                "Consultoria",
                                "exclusiva",
                            ],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "Com uma abordagem personalizada, focamos em ajudar pessoas a organizarem suas finanças, evitarem decisões impulsivas e alocarem seu dinheiro de forma estratégica e com diversidade protegendo o patrimônio. O propósito da Code é transformar a relação com o dinheiro trazendo mais controle, confiança e liberdade para o futuro.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Invista agora com a Code Capital",
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "389d890d-c9a8-4e9f-97a1-02fd3faba4b7" => [
                                        "label" => "Começar meu planejamento",
                                        "url" => "https://firece.com",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "hero" => [
                            "02e24f5b-b87a-4251-9824-63b2023db36f" => "02e24f5b-b87a-4251-9824-63b2023db36f",
                        ],
                    ],
                ],

                "69742386-e554-4c4e-983e-1ec85f62eb6b" => [
                    "type" => "flow-timeline",
                    "data" => [
                        "headline" => [
                            "heading" => "Por que investir com a Code Capital?",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "Você é atendido por quem fala a sua língua — especialistas que entendem sua realidade e estão prontos para te ajudar a crescer, recomeçar ou expandir seus horizontes financeiros.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Invista agora com a Fire|ce",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "timeline" => [
                            "73eae07e-aee5-4d56-8b4e-096f7a7b7790" => [
                                "title" => "Expertise",
                                "card_icon" => "lucide-goal",
                                "card_title" => "Personalized Initial Consultation",
                                "card_description" => "Consultores capacitados para direcionar sua vida financeira e sua profissão para um novo nível, atrelando seus objetivos pessoas e profissionais.",
                            ],
                            "f5aba19a-807c-4894-9c05-59982770b369" => [
                                "title" => "Planejamento financeiro sob medida",
                                "card_icon" => "lucide-goal",
                                "card_title" => "Tailored Investment Plan",
                                "card_description" => "Estratégias personalizadas para maximizar sua remuneração, impulsionar seus investimentos e alcançar objetivos com segurança.",
                            ],
                            "adaadf61-8ca1-47fb-b5a6-f29bc1205940" => [
                                "title" => "Resultados Comprovados",
                                "card_icon" => "lucide-goal",
                                "card_title" => "Ongoing International Support",
                                "card_description" => "Desde 2023, ajudando profissionais de tecnologia a construírem patrimônio de forma inteligente e global.",
                            ],
                        ],
                    ],
                ],

                "d98fd0ad-377b-42b1-9cea-3d9e1c39f936" => [
                    "type" => "video-testimonial",
                    "data" => [
                        "headline" => [
                            "heading" => "Dinheiro com propósito: como danilo parou de gastar por impulso",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "left",
                            "description" => "Danilo, programador, relata como o suporte da Fire|ce transformou sua relação com o dinheiro. Antes, ao ver o saldo na conta, acabava gastando por impulso. Hoje, com organização e diversificação dos investimentos, seu dinheiro tem um propósito — e ele evita mexer até no fundo de reserva. Além disso, valoriza a confiança de investir com uma empresa que não empurra produtos, e sim constrói estratégias sólidas e transparentes, mesmo diante da instabilidade econômica do Brasil.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Por que escolher a Code Capital?",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "insights" => [
                            "8449ba30-5e8f-418b-9f54-2a538012c1aa" => [
                                "value" => "Especialistas  planejamento financeiro",
                                "icon" => "lucide-hand-coins",
                            ],
                            "b453c85b-43d5-478f-bc30-9bf2e27a3a0d" => [
                                "value" => "Metodologia própria testada e aprovada",
                                "icon" => "lucide-hand-coins",
                            ],
                            "3bb8d780-497f-4fd1-be23-af04af936c59" => [
                                "value" => "Foco em resultados reais e sustentáveis",
                                "icon" => "lucide-hand-coins",
                            ],
                        ],
                        "video_url" => "https://www.youtube.com/embed/dQw4w9WgXcQ?si=eThAUAsChTqyDw8",
                        "video_cards" => [
                            "8d52e47a-c514-46c0-8dde-1d17cffe1164" => [
                                "title" => "500+",
                                "value" => "Clientes atendidos",
                            ],
                            "55807fa7-f8fa-4bf9-8072-65e2de738296" => [
                                "title" => "5",
                                "value" => "Anos de Experiência",
                            ],
                            "941a1c43-da99-490f-9ee2-67a53dee5e72" => [
                                "title" => "98%",
                                "value" => "Satisfação dos clientes",
                            ],
                        ],
                        "cta_label" => null,
                        "cta_url" => null,
                    ],
                ],

                "b9ecdd05-1e3c-49d7-b85c-f206eec36de3" => [
                    "type" => "call-to-action-section",
                    "data" => [
                        "component_id" => "e1bd64b1-7a01-4f6b-9292-c687740ca409",
                        "headline" => [
                            "heading" => "A gente decodifica o mercado financeiro para você focar no que faz de melhor.",
                            "keywords" => [
                                "decodifica",
                                "o",
                                "mercado",
                                "financeiro",
                            ],
                            "size" => "lg",
                            "position" => "left",
                            "description" => null,
                            "badge" => [
                                "has_badge" => false,
                                "icon" => null,
                                "label" => null,
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "fe3818ba-daf8-4d20-944d-58f4062c64e1" => [
                                        "label" => "Agende uma análise",
                                        "url" => "https://firece.com",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "image" => [
                            "94bde7f2-fddb-4b9b-89c9-7521c51ef38f" => "94bde7f2-fddb-4b9b-89c9-7521c51ef38f",
                        ],
                    ],
                ],

                "33f830c9-4488-4bb8-822d-d99469ec1cb6" => [
                    "type" => "two-columns-image-feature-grid",
                    "data" => [
                        "badge" => "Invista com a Fire|ce",
                        "heading" => "Construído por profissionais de Finanças e Tecnologia",
                        "description" => "Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.",
                        "cards" => [
                            "ae20962b-450b-4bde-8323-6ac82ee423f8" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Nossa Missão",
                                "description" => "A Code Capital nasce da necessidade de diversidade mais digital e entendimento de toda jornada de um profissional da área, criando assim um braço exclusivo e atento às necessidades dos profissionais.",
                            ],
                            "2506e50b-2ae2-4297-83fb-748b26adfe30" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Para Clientes Diferenciados",
                                "description" => "Com a possibilidade de realizar qualquer tarefa online para qualquer país do mundo. Se você gosta de ganhar em dólar, vai gostar ainda mais de ver sua rentabilidade crescer exponencialmente em uma moeda estrangeira.",
                            ],
                            "df547c71-89c4-4368-a66d-3092c2ee7c91" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Segurança para você e sua família",
                                "description" => "Todos os investimentos são de carácter sucessório, ou seja, mesmo que haja qualquer tipo de fatalidade, sua família terá tranquilidade de usar esses recursos.",
                            ],
                            "0a648c0d-baa1-4158-b24a-c6bd7a3197e8" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Investimento inovador",
                                "description" => "Além dos investimentos tradicionais e dos presentes na internet, temos investimentos principalmente em NY e UK, como a BNY Mellon, UBS, BNP Paribas, Credit Suisse entre outros.",
                            ],
                        ],
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "firece.com",
                        "hero" => [
                            "f51e1eeb-9d94-4df0-b2e1-35e78c7076f9" => "f51e1eeb-9d94-4df0-b2e1-35e78c7076f9",
                        ],
                    ],
                ],

                "d5cace60-6bc7-4d76-99b8-d0968cdf9346" => [
                    "type" => "call-to-action-with-image",
                    "data" => [
                        "headline" => [
                            "heading" => "Consultor financeiro exclusivo",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "left",
                            "description" => "Ter um consultor financeiro vai muito além de \"organizar as contas\". É sobre ter um profissional ao seu lado que entende a sua realidade, te ajuda a enxergar possibilidades e constrói, junto com você, um caminho concreto rumo à tranquilidade financeira.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Invista agora com a Fire|ce",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cta_label" => "Quero começar agora",
                        "cta_icon" => "heroicon-c-chevron-right",
                        "cta_url" => "https://firece.com.br/",
                        "hero" => [
                            "7141cd43-f13c-484b-a00b-97b2d1fc6d80" => "7141cd43-f13c-484b-a00b-97b2d1fc6d80",
                        ],
                    ],
                ],

                "ce234a8a-2164-4824-9d35-f284992e1c0c" => [
                    "type" => "testimonials",
                    "data" => [
                        "headline" => [
                            "heading" => "Escute de nossos clientes",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "Levamos você da análise de perfil à execução estratégica, com suporte contínuo para maximizar seus resultados. Nossa metodologia foi desenvolvida para transformar a sua relação com o dinheiro em 3 etapas fundamentais:",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Depoimentos",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "testimonials" => [
                            "5",
                            "3",
                            "7",
                            "9",
                        ],
                    ],
                ],

                "c16601fb-61ef-4212-a4f3-720996a9b3a6" => [
                    "type" => "faq",
                    "data" => [
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis, pretium eu dui.",
                        "solutions" => [
                            "c2680d14-602b-4e07-9827-e29e183a9fda" => [
                                "question" => "Lorem Ipsum dolor sit amet",
                                "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                            ],
                            "f6ec47a8-bb0f-4ffd-bac5-b2d6426d1e0f" => [
                                "question" => "Lorem Ipsum dolor sit amet",
                                "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                            ],
                            "6e57287d-16e2-481c-8d84-a2ef9efe74ce" => [
                                "question" => "Lorem Ipsum dolor sit amet",
                                "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                            ],
                            "d48e936c-c9d8-4839-8077-be242159bd69" => [
                                "question" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                            ],
                        ],
                        "hero" => [
                            "bb504efb-9b98-4696-8e25-ac29a3bc0fe3" => "bb504efb-9b98-4696-8e25-ac29a3bc0fe3",
                        ],
                    ],

                    "c16601fb-61ef-4212-a4f3-720996a9b3a6" => [
                        "type" => "faq",
                        "data" => [
                            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis, pretium eu dui.",
                            "solutions" => [
                                "c2680d14-602b-4e07-9827-e29e183a9fda" => [
                                    "question" => "Lorem Ipsum dolor sit amet",
                                    "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                ],
                                "f6ec47a8-bb0f-4ffd-bac5-b2d6426d1e0f" => [
                                    "question" => "Lorem Ipsum dolor sit amet",
                                    "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                ],
                                "6e57287d-16e2-481c-8d84-a2ef9efe74ce" => [
                                    "question" => "Lorem Ipsum dolor sit amet",
                                    "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                ],
                                "d48e936c-c9d8-4839-8077-be242159bd69" => [
                                    "question" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                    "answer" => "Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet",
                                ],
                            ],
                            "hero" => [
                                "bb504efb-9b98-4696-8e25-ac29a3bc0fe3" => "bb504efb-9b98-4696-8e25-ac29a3bc0fe3",
                            ],
                        ]
                    ],
                ],

                "ba6a9018-7c61-44d2-a9f8-d62cb49ffb3f" => [
                    "type" => "call-to-action-with-icon",
                    "data" => [
                        "title" => "Visite nosso Blog e tenha acesso à conteúdos exclusivos",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://firece.com.br/blog",
                        "icon" => "lucide-book-marked",
                    ],
                ]
            ],
            'status' => 'published',
        ],

        [
            'title' => 'Parcerias',
            'meta_title' => 'Parcerias Estratégicas – Iniciativas Colaborativas com Propósito | Fire|ce',
            'meta_description' => 'Conecte-se à Fire|ce por meio de parcerias estratégicas. Criamos projetos colaborativos com empresas e instituições que desejam gerar impacto real por meio da educação financeira.',
            'meta_keywords' => 'parcerias estratégicas, projetos educacionais, joint venture, educação corporativa, inovação financeira, colaboração, Fire|ce, integração de expertise, inteligência financeira',
            'opengraph_title' => 'Parcerias Estratégicas com a Fire|ce – Juntos Pela Transformação Financeira',
            'opengraph_description' => 'Empresas, especialistas e instituições podem se conectar à Fire|ce para criar soluções financeiras inovadoras com propósito e impacto.',
            'slug' => 'parcerias',
            'medias' => [
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],

                [
                    'collection' => CustomComponent::SplitWithImageQuote->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                ],
                [
                    'collection' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'path' => public_path('images/stock/our-work-partners.png'),
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/our-approach.png'),
                ],
            ],
            'content' => [
                [
                    'type' => CustomComponent::SplitWithVerticalSteps->value,
                    'data' => [
                        'badge' => 'Propósito',
                        'heading' => 'Geração de resultados',
                        'description' => 'Acreditamos que a transformação financeira ganha força quando compartilhada. Por isso, criamos uma frente dedicada a parcerias estratégicas, focada em gerar impacto mútuo. Atuamos com empresas, especialistas e instituições que compartilham nossa visão e desejam construir soluções colaborativas.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Saiba mais',
                        'cards' => [
                            [
                                'icon' => FireceIcons::Folder->value,
                                'title' => 'Join Ventures',
                                'description' => 'Entendemos seu perfil financeiro e objetivos.',
                            ],
                            [
                                'icon' => FireceIcons::Gear->value,
                                'title' => 'Integração de Expertise',
                                'description' => 'Criamos um plano personalizado para você.',
                            ],
                            [
                                'icon' => FireceIcons::Mortarboard->value,
                                'title' => 'Projetos Corpotarativos e Educacionais',
                                'description' => 'Acompanhamos a execução do plano com suporte contínuo.',
                            ],
                        ],

                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithImageQuote->value,
                    'data' => [
                        'heading' => 'Nosso Trabalho',
                        'badge' => 'Parcerias',
                        'image_position' => 'right',
                        'description' => 'Trazemos nossa metodologia, estrutura e autoridade de mercado para somar com o que o parceiro já possui. A inovação nasce do encontro de forças complementares e estamos prontos para criar algo novo. Trabalhamos com:',
                        'insights' => [
                            ['value' => 'Empresas'],
                            ['value' => 'Especialistas'],
                            ['value' => 'Instituições Educacionais'],
                        ],
                        'quote' => 'Seja parceiro da Fire|ce e ofereça acesso a soluções que geram equilíbrio, produtividade e bem-estar real.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Saiba mais',
                    ],
                ],
                [
                    'type' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'data' => [
                        'badge' => 'Sobre nós',
                        'heading' => 'Sobre nós',
                        'description' => 'A Fire|ce ajuda empresas a promoverem alta performance por meio da educação financeira. Com programas sob medida, consultores especializados e soluções integradas, criamos pontes entre saúde financeira e produtividade.',
                        'cards' => [
                            [
                                'icon' => FireceIcons::NbHands->value,
                                'title' => 'Projetos Conjuntos',
                                'description' => 'Monetize sua influência ou rede com um modelo de parceria inteligente e sustentável — você lucra enquanto ajuda pessoas a transformarem suas vidas financeiras.',
                            ],
                            [
                                'icon' => FireceIcons::NbStar->value,
                                'title' => 'Reconhecimento',
                                'description' => 'Associe sua marca ou imagem a uma consultoria que entrega resultados reais e melhora a relação das pessoas com o dinheiro.',
                            ],
                            [
                                'icon' => FireceIcons::NbLogo->value,
                                'title' => 'Ecossistema Fire|ce',
                                'description' => 'Tenha contato privilegiado com nossos produtos, lançamentos e soluções, além de ferramentas que tornam a parceria ainda mais eficiente.',
                            ],
                            [
                                'icon' => FireceIcons::NbSpeechbubble->value,
                                'title' => 'Suporte contínuo',
                                'description' => 'Contamos com uma equipe que acompanha sua jornada, oferece materiais personalizados, treinamentos e um plano de crescimento contínuo — juntos, vamos mais longe.',
                            ],
                        ],
                        'cta_label' => 'Agende uma consulta gratuita',
                        'cta_url' => 'https://pudim.com/',
                    ],
                ],
                [
                    'type' => CustomComponent::Faq->value,
                    'data' => [
                        'solutions' => [
                            [
                                'question' => 'Quem pode se tornar parceiro da Fire|ce?',
                                'answer' => 'Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real.',
                            ],
                            [
                                'question' => 'Quais são os formatos mais comuns de parceria?',
                                'answer' => 'Conectamos conhecimento com inspiração. Levamos educação financeira para empresas, eventos e grupos, abordando temas que impactam diretamente a vida das pessoas. Nossa abordagem vai além de conceitos teóricos – oferecemos insights práticos e estratégias aplicáveis imediatamente.',
                            ],
                            [
                                'question' => 'A Fire|ce investe em projetos em conjunto?',
                                'answer' => 'Sim! Para quem deseja se tornar um consultor de alto desempenho, oferecemos um caminho estruturado. A formação cobre desde metodologias até estratégias de atuação prática no mercado. O objetivo é preparar você para transformar vidas e construir uma carreira sólida na área financeira.',
                            ],
                            [
                                'question' => 'Como iniciar uma conversa com a Fire|ce?',
                                'answer' => 'Sim! Para quem deseja se tornar um consultor de alto desempenho, oferecemos um caminho estruturado. A formação cobre desde metodologias até estratégias de atuação prática no mercado. O objetivo é preparar você para transformar vidas e construir uma carreira sólida na área financeira.',
                            ],
                        ],
                    ],
                ],
            ],
            'status' => 'published',
        ],
        [
            'title' => 'Key Account',
            'meta_title' => 'Key Account – Consultoria Financeira Premium | Fire|ce',
            'meta_description' => 'Conheça o Key Account da Fire|ce: atendimento financeiro premium para proteger, consolidar e expandir seu patrimônio com estratégia, discrição e excelência.',
            'meta_keywords' => 'key account, consultoria financeira, planejamento patrimonial, blindagem patrimonial, atendimento personalizado, planejamento sucessório, investimento premium, gestão financeira de alto nível',
            'opengraph_title' => 'Key Account – Consultoria Financeira Premium | Fire|ce',
            'opengraph_description' => 'Atendimento exclusivo e altamente estratégico para clientes que exigem inteligência, proteção e performance na gestão de seu patrimônio.',
            'slug' => 'key-account',
            'theme' => PageTheme::Metallic,
            'medias' => [

                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/key-account-faq.png'),
                ],
                [
                    'collection' => CustomComponent::SplitWithImageQuote->value,
                    'path' => public_path('images/stock/our-work.png'),
                ],
            ],
            'content' => [

                [
                    'type' => CustomComponent::SplitWithHorizontalSteps->value,
                    'data' => [
                        'badge' => 'Escolha a Fire|Ce',
                        'heading' => 'Perfis e necessidades',
                        'card_type' => 'slim',
                        'description' => 'Saber se você é endividado, desorganizado ou poupador faz toda a diferença: é com esse entendimento que conseguimos traçar estratégias financeiras personalizadas, que respeitam sua realidade e aceleram seus resultados.',
                        'grid_columns' => 2,
                        'cards' => [
                            [
                                'icon' => FireceIcons::NbFolder->value,
                                'title' => 'Qual o perfil ideal para o Key Account?',
                                'description' => 'Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com atendimento altamente personalizado.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Converse com a gente',
                            ],
                            [
                                'icon' => FireceIcons::NbPlanet->value,
                                'title' => 'É possível contratar o Key Account para gestão internacional?',
                                'description' => 'Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando o perfil do cliente e as normas regulatórias.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Enviar Candidatura',
                            ],
                            [
                                'icon' => FireceIcons::NbCalendar->value,
                                'title' => 'Com que frequência acontecem as reuniões?',
                                'description' => 'O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais sempre que necessário.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Enviar Candidatura',
                            ],
                            [
                                'icon' => FireceIcons::NbVault->value,
                                'title' => 'Planejamento Sucessório',
                                'description' => 'Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e continuidade para seu legado.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Enviar Candidatura',
                            ],

                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithImageQuote->value,
                    'data' => [
                        'heading' => 'Como funciona',
                        'badge' => 'Nosso Trabalho',
                        'description' => 'Atuamos lado a lado com quem busca proteção, inteligência e alta performance na gestão do patrimônio. Aqui, o planejamento financeiro vai além da organização: ele se transforma em um instrumento de segurança, expansão e legado.',
                        'image_position' => 'left',
                        'insights' => [],
                        'quote' => 'Vamos construir o próximo nível da sua jornada financeira com o Key Account da Fire|ce.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Entre em contato',
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Agora é hora de fazer seu patrimônio trabalhar por você, com inteligência e visão de futuro.',
                        'cta_label' => 'Entre em contato',
                        'cta_url' => 'https://pudim.com.br',
                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithImageQuote->value,
                    'data' => [
                        'heading' => 'Por que optar pelo Key Account?',
                        'badge' => 'Relacionamento',
                        'description' => 'Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua. Analisamos profundamente sua vida financeira, cruzamos dados patrimoniais e familiares, entendemos seus objetivos de longo prazo e criamos um plano sob medida que evolui com você.',
                        'insights' => [
                            ['value' => 'Inteligência'],
                            ['value' => 'Estratégia'],
                            ['value' => 'Resultado'],
                        ],
                        'end_description' => 'Acompanhamos cada tomada de decisão importante, alertamos sobre riscos e oportunidades e adaptamos a estratégia conforme sua realidade muda. O cliente Key Account não é um número: é um relacionamento que atravessa fases, gera confiança e entrega resultados consistentes.',
                        'image_position' => 'right',
                        'quote' => 'Vamos construir o próximo nível da sua jornada financeira com o Key Account da Fire|ce.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Entre em contato',
                    ],
                ],
                [
                    'type' => CustomComponent::Testimonials->value,
                    'data' => [
                        'heading' => 'Escute de nossos clientes',
                        'badge' => 'Depoimentos',
                        'testimonials' => [1, 6, 10, 7],
                    ],
                ],
                [
                    'type' => CustomComponent::Faq->value,
                    'data' => [
                        'solutions' => [
                            [
                                'question' => 'Quem pode se tornar parceiro da Fire|ce?',
                                'answer' => 'Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real.',
                            ],
                            [
                                'question' => 'Quais são os formatos mais comuns de parceria?',
                                'answer' => 'Conectamos conhecimento com inspiração. Levamos educação financeira para empresas, eventos e grupos, abordando temas que impactam diretamente a vida das pessoas. Nossa abordagem vai além de conceitos teóricos – oferecemos insights práticos e estratégias aplicáveis imediatamente.',
                            ],
                            [
                                'question' => 'A Fire|ce investe em projetos em conjunto?',
                                'answer' => 'Sim! Para quem deseja se tornar um consultor de alto desempenho, oferecemos um caminho estruturado. A formação cobre desde metodologias até estratégias de atuação prática no mercado. O objetivo é preparar você para transformar vidas e construir uma carreira sólida na área financeira.',
                            ],
                        ],
                    ],
                ],
            ],
            'status' => 'published',
        ],
        [
            'title' => 'Educa Fire',
            'meta_title' => 'Educa Fire – Educação Financeira para Clientes e Profissionais | Fire|ce',
            'meta_description' => 'O Educa Fire é a vertente educacional da Fire|ce que capacita clientes e profissionais com conhecimento prático para decisões financeiras mais inteligentes.',
            'meta_keywords' => 'educação financeira, workshops, palestras, formação profissional, capacitação financeira, consultoria financeira, conhecimento financeiro, Fire|ce',
            'opengraph_title' => 'Educa Fire – Conhecimento para Transformar Finanças | Fire|ce',
            'opengraph_description' => 'Workshops, palestras e formações práticas para democratizar o acesso à inteligência financeira. Conheça o Educa Fire e comece a transformar sua vida.',
            'slug' => 'educa-fire',
            'content' => [],
            'status' => 'draft',
        ],
        [
            'title' => 'Trabalhe Conosco',
            'meta_title' => 'Parcerias Estratégicas – Iniciativas Colaborativas com Propósito | Fire|ce',
            'meta_description' => 'Conecte-se à Fire|ce por meio de parcerias estratégicas. Criamos projetos colaborativos com empresas e instituições que desejam gerar impacto real por meio da educação financeira.',
            'meta_keywords' => 'parcerias estratégicas, projetos educacionais, joint venture, educação corporativa, inovação financeira, colaboração, Fire|ce, integração de expertise, inteligência financeira',
            'opengraph_title' => 'Parcerias Estratégicas com a Fire|ce – Juntos Pela Transformação Financeira',
            'opengraph_description' => 'Empresas, especialistas e instituições podem se conectar à Fire|ce para criar soluções financeiras inovadoras com propósito e impacto.',
            'slug' => 'trabalhe-conosco',
            'medias' => [
                [
                    'collection' => CustomComponent::HeroWithBackgroundImage->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                ],
            ],
            'content' => [
                [
                    'type' => CustomComponent::HeroWithBackgroundImage->value,
                    'data' => [
                        'heading' => 'Trabalhe conosco.',
                        'subheading' => 'Trabalhar na Fire|ce é transformar vidas todos os dias, começando pela sua.',
                        'badge' => 'Trabalhe conosco',
                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithHorizontalSteps->value,
                    'data' => [
                        'badge' => 'Escolha a Fire|Ce',
                        'heading' => 'Perfis e necessidades',
                        'description' => 'Acreditamos que educação financeira é poder. E,por aqui, formamos um time que une propósito, inovação, e alta performance oara levar esse poder a mais pessoas. Se você quer crescer em um ambiente colaborativo, dinâmico e com desafios reais, seu lugar pode ser com a gente.',
                        'grid_columns' => 2,
                        'cards' => [
                            [
                                'icon' => FireceIcons::Hands->value,
                                'title' => 'Seja um parceiro',
                                'description' => 'Valorizamos profissionais que querem ir além, aprender, inovar e construir algo grande com a gente. Se você busca mais do que um emprego, vem fazer parte de um time que cresce junto e gera impacto real.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Converse com a gente',
                            ],
                            [
                                'icon' => FireceIcons::People->value,
                                'title' => 'Faça parte do time',
                                'description' => 'Na Fire|ce, cada profissional tem papel estratégico para transformar o jeito que as pessoas lidam com o dinheiro. Trabalhamos com propósito, foco em resultado e um time que se apoia, se desafia e aprende junto.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Enviar Candidatura',
                            ],

                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Se você busca propósito, crescimento e parceria, seu lugar é aqui.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Entre em Contato',
                    ],
                ],
                [
                    'type' => CustomComponent::ContactForm->value,
                    'data' => [
                        'heading' => 'Envie uma mensagem',
                        'description' => 'Estamos sempre abertos a conhecer pessoas que compartilham nossa visão e valores. Se você tem interesse em se juntar a nós ou discutir uma parceria, preencha o formulário abaixo e entraremos em contato.',
                    ],
                ],
            ],
            'status' => 'published',
        ],

    ],
    'articles' => [
        'budget-planning' => [
            'title' => 'Orçamento Individual e Familiar',
            'excerpt' => 'Controle, organização e consciência para sua vida financeira com apoio especializado.',
            'meta_title' => 'Orçamento Individual e Familiar – Fire|ce',
            'meta_description' => 'Organize sua vida financeira com estrutura, clareza e acompanhamento personalizado da Fire|ce.',
            'meta_keywords' => 'orçamento familiar, orçamento pessoal, controle financeiro, planejamento financeiro, finanças pessoais, consultoria financeira',
            'opengraph_title' => 'Como organizar seu orçamento – Fire|ce',
            'opengraph_description' => 'Aprenda com a Fire|ce a estruturar um orçamento funcional para evitar dívidas e alcançar seus objetivos com confiança.',
            'slug' => 'orcamento-individual-familiar',
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
            'meta_title' => 'Curto, Médio e Longo Prazo – Fire|ce',
            'meta_description' => 'Aprenda a organizar suas finanças com a Fire|ce em curto, médio e longo prazo com estratégias alinhadas aos seus objetivos.',
            'meta_keywords' => 'planejamento financeiro, curto prazo, médio prazo, longo prazo, investimentos, metas financeiras, reserva de emergência, aposentadoria, educação financeira, organização financeira, estratégia de investimentos',
            'opengraph_title' => 'Como se organizar financeiramente – Fire|ce',
            'opengraph_description' => 'Descubra como alinhar seus investimentos com cada fase da sua vida com o suporte da Fire|ce e construa um futuro mais seguro.',
            'slug' => 'se-organizando-no-curto-medio-longo-prazo',
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
            'meta_title' => 'Inflação: O Que É e Como se Proteger – Fire|ce',
            'meta_description' => 'Entenda como a inflação afeta sua vida financeira e descubra como proteger seu dinheiro com a orientação da Fire|ce.',
            'meta_keywords' => 'inflação, IPCA, proteção financeira, tesouro direto, taxa de juros, economia, investimentos, poder de compra, planejamento financeiro',
            'opengraph_title' => 'Como a inflação afeta sua vida – Fire|ce',
            'opengraph_description' => 'Aprenda com a Fire|ce a proteger seu patrimônio em cenários inflacionários com estratégias reais e acessíveis.',
            'slug' => 'inflacao-e-como-se-proteger',
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
    ],
    'testimonials' => [
        [
            'name' => 'Silvia Soares',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Com o apoio da empresa Fire|ce e da assessoria da Glaucia estou conseguindo ter mais clareza sobre meus gastos, planejar melhor meus objetivos e tomar decisões financeiras mais conscientes. Esse acompanhamento tem feito toda a diferença na minha vida financeira."
É muito gratificante ter controle do meu próprio dinheiro e vê-lo trabalhar pra mim.
Só tenho a agradecer por tanto aprendizado!!
Com certeza passarei para meus filhos essa educação financeira tão importante nos dias atuais.
TEXT,
            'posted_at' => Carbon::now()->subWeek(),
        ],
        [
            'name' => 'Lucas Santos',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Há poucos meses, eu praticamente não sabia nada sobre o universo financeiro. Na verdade, achava que apenas poupar dinheiro era suficiente para garantir estabilidade e segurança no futuro, eu estava profundamente enganado. O Sidão me fez perceber que estratégia e experiência fazem bastante diferença nessas coisas. Com apenas algumas reuniões ele me ajudou a ter controle sobre o meus gastos, ganhos e diferente de antes, posso ter agora uma perspectiva de futuro. Vlw Sidney!
TEXT,
            'posted_at' => Carbon::now()->subDays(6),
        ],
        [
            'name' => 'Tomás Fagundes',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Comecei a consultoria com a Fire|ce há pouco mais de 1 mês, e já percebi que fiz um ótimo investimento, pois se trata de pessoas muito honestas e que de fato se preocupam em me proporcionar um controle melhor de meus gastos e como devo investir meu dinheiro para aumentar meu patrimônio (eles literalmente te informam qual fundo você deve investir e a quantia, baseado no que você tem disponível), e te trazem um planejamento futuro muito bem embasado e realista com o seu estilo de vida. Devo mencionar, especialmente, o Pedro Micheleto, que é meu consultor, e é uma pessoa que eu posso entrar em contato a qualquer horário do qualquer dia que ele irá me responder.
Recomendo fortemente!!!
TEXT,
            'posted_at' => Carbon::now()->subMonth(),
        ],
        [
            'name' => 'EDCARLOS RODRIGUES CARNEIRO SILVA',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Comecei na consultoria da Fire|ce há 3 meses e tem sido um processo de aprendizado muito gratificante, pois com a ajuda da consultoria do Leonardo Siqueira, tenho conseguido organizar minhas finanças de forma consciente e simples. Além disso, o Leonardo tem me ajudado diariamente com estratégias financeiras, alinhadas com a minha realidade, com o objetivo de atingir meus objetivos de médio/longo prazo.
Sou muito grato à Fire|ce pelos serviços de consultoria prestados com excelência!!!
TEXT,
            'posted_at' => Carbon::now()->subWeeks(4),
        ],
        [
            'name' => 'André Kimura',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Comecei no fim do ano passado a consultoria na Finance, meu objetivo inicial era apenas um controle melhor dos gastos, imaginava que o resto da minha vida financeira estava muito boa, mas meu consultor Matheus Oka mostrou que havia muito que poderia melhorar. Foi muito atencioso e mostrou muitas melhorias que poderiam ser feitas em meus investimentos, me ensinando muito sobre essa área, também gostei muito abordagem sobre o controle de gastos, com pequenas mudanças progressivas para atingir os objetivos e ainda reuniões frequentes para acompanhar o andamento do mês.
A minha experiência com a Finance está sendo muito boa e recomendo muito para quem tem interesse em uma consultoria desse tipo.
TEXT,
            'posted_at' => Carbon::now()->subMonths(4),
        ],
        [
            'name' => 'Sam Assunção',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
A Fire Ce me apresentou que é possível aderir a uma educação financeira de forma realista e consistente. Ainda mais com a contribuição imensurável de um dos seus consultores, Pedro Micheleto. Até o momento estou satisfeito com os serviços prestados pela empresa e vejo que já não é mais tão abstrato alcançar objetivos financeiros.
TEXT,
            'posted_at' => Carbon::now()->subMonth(),
        ],
        [
            'name' => 'Felipe Rosa',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Nunca fui uma pessoa organizada financeiramente e começar a consultoria com o Matheus Oka transformou, no sentido mais literal da palavra, minha vida pra melhor! Venho desenvolvendo consciência, entendendo como funcionam meus gastos, conseguindo estruturar meus objetivos de maneira clara e funcional, e pela primeira vez consigo guardar dinheiro. Muito além de só planejar, o Matheus me ajuda a conquistar coisas que eram só uma ideia. Muito grato e muito feliz de ter feito essa escolha!
TEXT,
            'posted_at' => Carbon::now()->subMonths(4),
        ],
        [
            'name' => 'victoria deep',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
Tenho tido uma experiência ótima na Finance&Co. e que tem sido fundamental para o meu planejamento financeiro. Com a ajuda do Matheus Oka consegui manter um planejamento financeiro sólido, melhorar meus investimentos e tomar decisões informadas. Agradeço por toda expertise e dedicação da equipe, e recomendo a empresa para quem busca uma consultoria financeira confiável e eficaz.
TEXT,
            'posted_at' => Carbon::now()->subMonths(4),
        ],
        [
            'name' => 'Raquel Hipolito',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
A Finance foi, sem dúvida, a empresa que mais me trouxe aquele sentimento de "UAU". A combinação entre estratégia bem definida e plano de ação sólido proporcionou uma sensação de segurança única. Ter o Matheus Cruz como consultor reforçou ainda mais essa confiança, transmitindo credibilidade em cada orientação. Sua capacidade de adaptação e atualização constante sobre os melhores investimentos me impressionou tanto que fiz questão de recomendar a empresa para vários amigos.
TEXT,
            'posted_at' => Carbon::now()->subMonths(3),
        ],
        [
            'name' => 'Beatriz Sousa',
            'role' => '',
            'rating' => 5,
            'comment' => <<<'TEXT'
No final de 2024 comecei minha consultoria com o Sidney e foi um ótimo passo! Ele tem me ajudado a ter educação financeira e saber onde e como investir o meu dinheiro!.
TEXT,
            'posted_at' => Carbon::now()->subMonths(3),
        ],
    ],
    'consultants' => [
        [
            'slug' => 'arthur-mariano',
            'name' => 'Arthur Mariano',
            'description' => '',
            'linkedin_url' => 'https://www.linkedin.com/in/arthur-mariano/',
        ],
        [
            'slug' => 'laura-papaiano',
            'name' => 'Laura Papaiano',
            'description' => '',
            'linkedin_url' => 'https://www.linkedin.com/in/laura-papaiano-0b0215196/',
        ],
        [
            'slug' => 'marcelo-rosa',
            'name' => 'Marcelo Rosa',
            'description' => '',
            'linkedin_url' => 'https://www.linkedin.com/in/laura-papaiano-0b0215196/',
        ],
    ],
];
