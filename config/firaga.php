<?php

use App\Enums\CustomComponent;
use App\Enums\FireceIcons;
use App\Enums\PageTheme;
use Carbon\Carbon;

return [
    'themes' => [
        'enabled' => env('FIRAGA_THEMES_ENABLED', false),
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
                    'path' => public_path('images/stock/hero-our-work.png'),
                    'custom_properties' => [
                        "component_id" => "9461ce3e-893c-481d-b7d8-fc0320be353c",
                    ]
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-our-work.png'),
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
                                'has_badge' => true,
                            ],
                            'heading' => 'Transforme suas finanças e alcance sua liberdade financeira',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável. ',
                            'has_actions' => true,
                            'actions' => [
                                [
                                    'label' => 'Agende uma Análise',
                                    'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
                                    'target' => '_blank',
                                ],
                            ],
                            'keywords' => [
                                'e',
                                'alcance',
                                'sua',
                                'liberdade',
                                'financeira'
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    'b24de348-34d0-4966-9151-a2bf2555a696' => [
                                        'label' => 'Começar meu planejamento',
                                        'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
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
                            'size' => 'lg',
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
                            'size' => 'lg',
                            'position' => 'center',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Nosso trabalho',
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
                                "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0",
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
                            'size' => 'lg',
                            'position' => 'left',
                            'description' => 'Saber se você é endividado, desorganizado ou poupador faz toda a diferença: é com esse entendimento que conseguimos traçar estratégias financeiras personalizadas, que respeitam sua realidade e aceleram seus resultados.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Escolha a Fire|ce',
                            ],
                            'buttons' => [
                                'has_actions' => true,
                                'buttons' => [
                                    'da8e78cb-ab9b-44cd-9623-4555547a9999' => [
                                        'label' => 'Quero começar agora',
                                        'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
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
                                        'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
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
                'd1febff4-dec0-4c71-a97b-d7b19ae264a0' => [
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
                                'label' => 'Nossas especialidades'
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => []
                            ]
                        ],
                        'cards' => [
                            'has_cards' => true,
                            'grid_columns' => '4',
                            'card_type' => 'cta',
                            'items' => [
                                '5a6201c5-271f-4120-9286-7faccdc4daa7' => [
                                    'title' => 'Planejamento',
                                    'description' => 'Diagnóstico e plano financeiro...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => true,
                                    'buttons' => [
                                        '897b80fb-dbd1-440a-a61d-3c4edbaea7c0' => [
                                            'label' => 'Visitar',
                                            'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
                                            'icon' => 'heroicon-c-chevron-right',
                                            'icon_position' => 'trailing',
                                            'target' => '_blank'
                                        ]
                                    ]
                                ],
                                '691e215c-a90b-440c-8249-a819466c01d4' => [
                                    'title' => 'Key Account',
                                    'description' => 'Consultoria exclusiva e contínua para quem bus...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => true,
                                    'buttons' => [
                                        '85cfbdf7-3a5b-4373-9d7e-6a6952c6d430' => [
                                            'label' => 'Visitar',
                                            'url' => 'https://firece.com.br/key-account',
                                            'icon' => 'heroicon-c-chevron-right',
                                            'icon_position' => 'trailing',
                                            'target' => '_blank'
                                        ]
                                    ]
                                ],
                                'a9baf570-6110-4953-b1eb-5e7dd7fbc711' => [
                                    'title' => 'Educa Fire',
                                    'description' => 'Consultoria exclusiva e contínua para quem bus...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => true,
                                    'buttons' => [
                                        'dc945fa6-b475-4cd1-ab7c-a9374993aeca' => [
                                            'label' => 'Visitar',
                                            'url' => 'https://www.educafire.com.br/workshop',
                                            'icon' => 'heroicon-c-chevron-right',
                                            'icon_position' => 'trailing',
                                            'target' => '_blank'
                                        ]
                                    ]
                                ],
                                'f51510ee-b86f-43e2-a47f-511c21d8e0dd' => [
                                    'title' => 'Parcerias',
                                    'description' => 'Soluções integradas com especialistas e marcas...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => true,
                                    'buttons' => [
                                        '1b9df2ec-2ffe-41ae-9dff-3e560df2a00f' => [
                                            'label' => 'Visitar',
                                            'url' => 'https://firece.com/parcerias',
                                            'icon' => 'heroicon-c-chevron-right',
                                            'icon_position' => 'trailing',
                                            'target' => '_blank'
                                        ]
                                    ]
                                ],
                                '01e95070-4b1f-4698-b51d-20b13eb154df' => [
                                    'title' => 'Code Capital',
                                    'description' => 'Consultoria financeira especializada para...',
                                    'icon' => 'lucide-hand-coins',
                                    'has_actions' => true,
                                    'buttons' => [
                                        'cd559ef3-f760-442c-9803-02172f594a52' => [
                                            'label' => 'Visitar',
                                            'url' => 'https://firece.com/code-capital',
                                            'icon' => 'heroicon-c-chevron-right',
                                            'icon_position' => 'trailing',
                                            'target' => '_blank'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'cda8ebd2-9702-40ac-905d-65517b62342c' => [
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
                                'label' => 'Nossos Planos'
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => []
                            ]
                        ],
                        'plans' => [
                            'ded9cf98-4668-4207-9977-5d32b4227da2' => [
                                'best_plan' => '0',
                                'name' => 'gold',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    'f6b8a981-ef18-427b-a17d-06e7513e1fcb' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    'cf603e94-b10d-4560-a3f2-1574a5017e8d' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    'aab9f543-e842-4245-982e-db787d4b1e90' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro'
                                    ],
                                    '731f6734-92d1-417f-bcfb-e6bf0141c23d' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva'
                                    ],
                                    '0d5f74d9-3b31-4885-b846-84571d52a5ca' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa'
                                    ],
                                    'e18a6990-f256-4fd5-ab9a-64b6d5345cd5' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio'
                                    ]
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0'
                            ],
                            'decfdcff-e27a-4371-bfd3-fc9f9f5b016e' => [
                                'best_plan' => '0',
                                'name' => 'platinum',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    '8cd4eabf-5461-4106-b5d2-017109757ad6' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    '45769abe-82ea-4d9f-ac7f-b074dc7a7559' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    '36753588-02d4-4683-816e-6da72e2dcd1a' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro'
                                    ],
                                    '21c3aef1-7fee-44ec-a1d3-1a4e08fafaa1' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva'
                                    ],
                                    '1ef8c9f1-a316-429a-9b45-fde55bbf1ced' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa'
                                    ],
                                    'b97fd296-3651-4557-b1dc-f55f4405fcb9' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio'
                                    ]
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0'
                            ],
                            '4a4a966a-669d-4eab-becb-6f2d0616cebb' => [
                                'best_plan' => '1',
                                'name' => 'black',
                                'description' => 'Para quem está começando a organizar sua vida finaceira e deseja mais tranquilidade.',
                                'note' => null,
                                'benefits' => [
                                    'fd24aa10-2dce-450f-9353-da1b99822267' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    'c3e7f389-656a-4907-9ca7-cf813bd85375' => [
                                        'is_highlighted' => true,
                                        'value' => 'Organização Anual'
                                    ],
                                    '537fff25-ab80-4ff1-8b7d-780aee4e8e1e' => [
                                        'is_highlighted' => false,
                                        'value' => 'Mapa financeiro'
                                    ],
                                    '097019d7-aa7e-4c52-9282-4e2d94c30b3c' => [
                                        'is_highlighted' => false,
                                        'value' => 'Construção de Reserva'
                                    ],
                                    '3251d8b9-8c54-4387-add5-cc71c931aa24' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de fluxo de caixa'
                                    ],
                                    'd175f193-df65-48de-b891-2a8c14c4953a' => [
                                        'is_highlighted' => false,
                                        'value' => 'Planilha de patrimônio'
                                    ]
                                ],
                                'cta_label' => 'Saiba Mais',
                                'cta_url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0'
                            ]
                        ]
                    ]
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
                                'label' => 'Institucional',
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
                '37c82174-c21b-4cc5-ac95-bba2177ae3f1' => [
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
                                'label' => 'Depoimentos'
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => []
                            ]
                        ],
                        'testimonials' => [
                            '10',
                            '7',
                            '13',
                            '14',
                            '1',
                            '6',
                            '15',
                            '16'
                        ]
                    ]
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
                                        'url' => 'https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
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
                        "cta_url" => "https://firece.com.br/blog",
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
                    'path' => public_path('images/stock/hero-our-work.png'),
                    'custom_properties' => [
                        "component_id" => "e1bd64b1-7a01-4f6b-9292-c687740ca409",
                    ]
                ],
                [
                    'collection' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'path' => public_path('images/stock/code-capital.png'),
                ],
                [
                    'collection' => CustomComponent::CallToActionWithImage->value,
                    'path' => public_path('images/stock/consultant.png'),
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/partner-faq.png'),
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
                            "size" => "3xl",
                            "position" => "center",
                            "description" => "Com uma abordagem personalizada, focamos em ajudar pessoas a organizarem suas finanças, evitarem decisões impulsivas e alocarem seu dinheiro de forma estratégica e com diversidade protegendo o patrimônio. O propósito da Code é transformar a relação com o dinheiro trazendo mais controle, confiança e liberdade para o futuro.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Code Capital",
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "389d890d-c9a8-4e9f-97a1-02fd3faba4b7" => [
                                        "label" => "Começar meu planejamento",
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0",
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
                "920f4a51-76ab-4fd3-b78f-b5e504e84d07" => [
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
                                "label" => "Por que escolher a Code Capital?"
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => []
                            ]
                        ],
                        "insights" => [
                            "b33889ad-37e7-4a66-a09c-a65c12e102bc" => [
                                "value" => "Especialistas  planejamento financeiro",
                                "icon" => "lucide-hand-coins"
                            ],
                            "4748f30a-f3c6-4eb3-b730-8b49a6ed782b" => [
                                "value" => "Metodologia própria testada e aprovada",
                                "icon" => "lucide-hand-coins"
                            ],
                            "53d22777-5fd4-4b83-815b-d1132669bb40" => [
                                "value" => "Foco em resultados reais e sustentáveis",
                                "icon" => "lucide-hand-coins"
                            ]
                        ],
                        "video_url" => "https://www.youtube.com/embed/VX0mX7WjKnw?si=Uepn17uJQZ0l55G3",
                        "video_cards" => [
                            "ecf030e0-60c1-496d-a4c4-a40e2ddd0b90" => [
                                "title" => "500+",
                                "value" => "Clientes atendidos"
                            ],
                            "17667ebd-862b-4253-a770-204cbaec03cd" => [
                                "title" => "5",
                                "value" => "Anos de Experiência"
                            ],
                            "b15e5fad-808b-47f8-a35c-002e871ba690" => [
                                "title" => "98%",
                                "value" => "Satisfação dos clientes"
                            ]
                        ],
                        "cta_label" => null,
                        "cta_url" => null
                    ]
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
                            "size" => "3xl",
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
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0",
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
                        'headline' => [
                            'size' => 'lg',
                            'position' => 'left',
                            'heading' => 'Construído por profissionais de Finanças e Tecnologia',
                            'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso,
                                desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e
                                objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais:
                                Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
                            'has_actions' => false,
                            'actions' => [],
                            'keywords' => [],
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Propósito",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
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
                        "cta_url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0",
                        "hero" => [
                            "7141cd43-f13c-484b-a00b-97b2d1fc6d80" => "7141cd43-f13c-484b-a00b-97b2d1fc6d80",
                        ],
                    ],
                ],
                "1664b739-1e68-48af-a42a-df18b28a0411" => [
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
                                "label" => "Depoimentos"
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => []
                            ]
                        ],
                        "testimonials" => [
                            "5",
                            "3",
                            "7",
                            "9"
                        ]
                    ]
                ],
                "9c81da59-a096-464c-9707-d44a15c92852" => [
                    "type" => "faq",
                    "data" => [
                        "description" => null,
                        "solutions" => [
                            "3d9669a9-645e-4e16-8b82-2e03b8b94f42" => [
                                "question" => "Quem pode se tornar parceiro da Fire|ce?",
                                "answer" => "Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real."
                            ],
                            "e11bf08c-71f3-4368-aebd-68e588a9c7b4" => [
                                "question" => "Quais são os formatos mais comuns de parceria?",
                                "answer" => "Desde Joint Ventures e projetos educacionais até parcerias comerciais e e integração de serviços."
                            ],
                            "119f6fdd-a1c8-42f1-84a0-13e3b8a85c18" => [
                                "question" => "A Fire|ce investe em projetos em conjunto?",
                                "answer" => "Sim. Avaliamos oportunidades de forma individual e, quando há sinergia, investimos tempo, estrutura e até recursos para gerar resultados sólidos em parceria."
                            ],
                            "b1ec09d8-a516-48c1-b3af-3c9a8060e7aa" => [
                                "question" => "Como iniciar uma conversa sobre parceria com a Fire|ce?",
                                "answer" => "Basta entrar em contato pelo nosso formulário ou canais oficiais. Vamos marcar uma reunião para entender como nossas forças podem se complementar."
                            ]
                        ],
                        "hero" => [
                            "bb504efb-9b98-4696-8e25-ac29a3bc0fe3" => "bb504efb-9b98-4696-8e25-ac29a3bc0fe3"
                        ]
                    ]
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
                    'collection' => CustomComponent::HeroWithSplitImages->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                ],
                [
                    'collection' => CustomComponent::HeroWithSplitImages->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                ],
                [
                    'collection' => CustomComponent::HeroWithSplitImages->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-our-work.png'),
                    'custom_properties' => [
                        "component_id" => "512c2004-348f-48e7-b395-80b61a60e664",
                    ]
                ],
                [
                    'collection' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'path' => public_path('images/stock/code-capital.png'),
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/partner-faq.png'),
                ],
            ],
            'content' => [
                "9cbb654a-da87-4f2a-8387-be2473a1477a" => [
                    "type" => "hero-with-split-images",
                    "data" => [
                        "headline" => [
                            "heading" => "A transformação se constrói com boas alianças",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "left",
                            "description" => "Seja através de projetos conjuntos, campanhas, educação corporativa ou desenvolvimento de produtos financeiros sob medida, nossas parcerias são desenhadas com estratégia, colaboração e propósito.",
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
                        "cta_label" => "Entrar em contato",
                        "cta_icon" => "heroicon-c-chevron-right",
                        "cta_url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                        "hero" => [
                            "28cacbae-2332-4621-9f4a-8a414f2a5446" => "28cacbae-2332-4621-9f4a-8a414f2a5446",
                        ],
                    ],
                ],
                "e81d1fe4-5c72-4a29-ada6-121651144f1c" => [
                    "type" => "split-with-horizontal-steps",
                    "data" => [
                        "headline" => [
                            "heading" => "Geração de resultados",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "Acreditamos que a transformação financeira ganha força quando compartilhada. Por isso, criamos uma frente dedicada a parcerias estratégicas, focada em gerar impacto mútuo. Atuamos com empresas, especialistas e instituições que compartilham nossa visão e desejam construir soluções colaborativas. ",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Propósito",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "has_cards" => true,
                            "grid_columns" => 3,
                            "card_type" => "cta",
                            "items" => [
                                "d40c073e-368f-4d0a-8d2d-22dedb867896" => [
                                    "title" => "Projetos de capacitação corporativa.",
                                    "description" => "Entendemos seu perfil financeiro e objetivos.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "32747d8d-b48b-4f66-8efc-8336f6a821f5" => [
                                    "title" => "Integração de Expertise",
                                    "description" => "Criamos um plano personalizado para você.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "99732ff2-703f-4935-b17a-1c5d111dee90" => [
                                    "title" => "Projetos Corporativos e Educacionais",
                                    "description" => "Acompanhamos a execução do plano com suporte contínuo.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                            ],
                        ],
                        "cta_description" => "Não encontrou exatamente o que procura?",
                        "has_actions" => true,
                        "buttons" => [
                            "48b42a4e-9c55-4cdb-b068-1d044487b1bb" => [
                                "label" => "Agende uma análise",
                                "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                "icon" => "heroicon-c-chevron-right",
                                "icon_position" => "trailing",
                                "target" => "_blank",
                            ],
                        ],
                    ],
                ],
                "cf4e36f5-f7d7-4a1c-9a25-4d748a0fda06" => [
                    "type" => "call-to-action-section",
                    "data" => [
                        "component_id" => "512c2004-348f-48e7-b395-80b61a60e664",
                        "headline" => [
                            "heading" => "Seja parceiro da Fire|ce e ofereça acesso a soluções que geram equilíbrio, produtividade e bem-estar real",
                            "keywords" => [
                                "equilíbrio,",
                                "produtividade",
                                "bem-estar",
                                "real",
                            ],
                            "size" => "3xl",
                            "position" => "center",
                            "description" => null,
                            "badge" => [
                                "has_badge" => false,
                                "icon" => null,
                                "label" => null,
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "439fb4ab-3e38-4f77-b057-27e73ad471e8" => [
                                        "label" => "Agende uma análise",
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "image" => [
                            "fc4e2c0a-136e-4258-8400-a6891747c695" => "fc4e2c0a-136e-4258-8400-a6891747c695",
                        ],
                    ],
                ],
                "a011c44c-054a-4e24-a24a-7b0df1b501b0" => [
                    "type" => "info-stats",
                    "data" => [
                        "headline" => [
                            "heading" => "Nosso trabalho",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "left",
                            "description" => "Trazemos nossa metodologia, estrutura e autoridade de mercado para somar com o que o parceiro já possui. A inovação nasce do encontro de forças complementares e estamos prontos para criar algo novo. ",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Como fazemos",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "has_cards" => true,
                            "grid_columns" => 3,
                            "card_type" => "slim",
                            "items" => [
                                "ec3acf93-4acc-4bdc-b087-fcb9ba313fdf" => [
                                    "title" => "+10",
                                    "description" => "Empresas",
                                    "icon" => "lucide-hand-coins",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "09b2112e-c4e6-4ba7-be93-36f0441973c4" => [
                                    "title" => "+2.000",
                                    "description" => "Instituições Educacionais",
                                    "icon" => "lucide-hand-coins",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "ba472aa9-1d05-4316-a202-ac0bfb08c34a" => [
                                    "title" => "+300%",
                                    "description" => "Especialistas",
                                    "icon" => "lucide-hand-coins",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                            ],
                        ],
                    ],
                ],
                "403198d1-74b0-4a54-85e6-732f658b5c73" => [
                    "type" => "two-columns-image-feature-grid",
                    "data" => [
                        'headline' => [
                            'size' => 'lg',
                            'position' => 'left',
                            'heading' => 'Conheça mais sobre a Fire|ce',
                            'description' => 'A Fire|ce ajuda empresas a promoverem alta performance por meio da
                            educação financeira. Com programas sob medida, consultores especializados e soluções
                            integradas, criamos pontes entre saúde financeira e produtividade.',
                            'has_actions' => false,
                            'actions' => [],
                            'keywords' => [],
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Sobre nós",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "fa8ce8d1-3d8b-4a84-ab14-c0c968c3699a" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Projetos Conjuntos",
                                "description" => "Monetize sua influência ou rede com um modelo de parceria inteligente e sustentável — você lucra enquanto ajuda pessoas a transformarem suas vidas financeiras.",
                            ],
                            "6ca5f284-797b-4d10-98de-e63cc3a9fd6e" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Reconhecimento",
                                "description" => "Associe sua marca ou imagem a uma consultoria que entrega resultados reais e melhora a relação das pessoas com o dinheiro.",
                            ],
                            "896a7da5-fe55-426f-b637-6f44b02c76e7" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Ecossistema Fire|ce",
                                "description" => "Tenha contato privilegiado com nossos produtos, lançamentos e soluções, além de ferramentas que tornam a parceria ainda mais eficiente.",
                            ],
                            "197243a8-957a-40de-ae47-96a03a128ba6" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Suporte contínuo",
                                "description" => "Contamos com uma equipe que acompanha sua jornada, oferece materiais personalizados, treinamentos e um plano de crescimento contínuo.",
                            ],
                        ],
                        "hero" => [
                            "ffd0375e-78f6-4685-b60d-62b315e0fbff" => "ffd0375e-78f6-4685-b60d-62b315e0fbff",
                        ],
                    ],
                ],
                "7152d7e2-4250-425a-802f-088e88d26bc0" => [
                    "type" => "hero-with-title-only",
                    "data" => [
                        "headline" => [
                            "heading" => "Não ofereça só um benefício. Ofereça um plano completo de suporte financeiro com a Fire|ce ao seu lado.",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "center",
                            "description" => "Você tem um projeto, canal, empresa ou ideia que pode crescer ainda mais com um parceiro estratégico ao lado? Vamos conversar. Juntos, podemos criar algo que realmente transforma.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Torne-se um parceiro",
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "5661e000-cbdc-4e32-9910-e9a80561c38c" => [
                                        "label" => "Quero Começar Agora",
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                "e3a1ba12-ea96-44b7-b199-b83b0617e02a" => [
                    "type" => "faq",
                    "data" => [
                        "description" => null,
                        "solutions" => [
                            "84241851-833a-4ff1-a664-149aaa0592d8" => [
                                "question" => "Quem pode se tornar parceiro da Fire|ce?",
                                "answer" => "Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real."
                            ],
                            "e8d46eb2-5d56-42cd-b183-34e8dcf722ed" => [
                                "question" => "Quais são os formatos mais comuns de parceria?",
                                "answer" => "Conectamos conhecimento com inspiração. Levamos educação financeira para empresas, eventos e grupos, abordando temas que impactam diretamente a vida das pessoas. Nossa abordagem vai além de conceitos teóricos – oferecemos insights práticos e estratégias aplicáveis imediatamente."
                            ],
                            "14dd3635-aa3b-456c-a314-cab1fabbc182" => [
                                "question" => "A Fire|ce investe em projetos em conjunto?",
                                "answer" => "Sim! Para quem deseja se tornar um consultor de alto desempenho, oferecemos um caminho estruturado. A formação cobre desde metodologias até estratégias de atuação prática no mercado. O objetivo é preparar você para transformar vidas e construir uma carreira sólida na área financeira."
                            ],
                            "5445ba54-e027-4308-919f-184bf497850a" => [
                                "question" => "Como iniciar uma conversa com a Fire|ce?",
                                "answer" => "Basta entrar em contato pelo nosso formulário ou canais oficiais. Vamos marcar uma reunião para entender como nossas forças podem se complementar."
                            ]
                        ],
                        "hero" => [
                            "42b70175-f5b8-430e-81a2-fd2ca21887c6" => "42b70175-f5b8-430e-81a2-fd2ca21887c6"
                        ]
                    ]
                ],
                "269a165f-0bd0-419e-a548-745aae7338bf" => [
                    "type" => "call-to-action-with-icon",
                    "data" => [
                        "title" => "Visite nosso Blog e tenha acesso à conteúdos exclusivos",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://firece.com.br/blog",
                        "icon" => "lucide-book-marked",
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
                    'collection' => CustomComponent::HeroWithBackgroundImage->value,
                    'path' => public_path('images/stock/hero-stock-gray.png'),
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/faq-work-with-grey.png'),
                ],
                [
                    'collection' => CustomComponent::SplitWithImageQuote->value,
                    'path' => public_path('images/stock/our-work.png'),
                ],
                [
                    'collection' => CustomComponent::CallToActionFullWidthSection->value,
                    'path' => public_path('images/stock/hero-our-work.png'),
                    'custom_properties' => [
                        "component_id" => "f8af4192-f84f-4f3d-98a2-a45de3d49618",
                    ]
                ]
            ],
            'content' => [
                "32bdc021-7bf2-40d1-a74c-bf94a56b2ad6" => [
                    "type" => "hero-with-background-image",
                    "data" => [
                        "hero_size" => "[70vh]",
                        "headline" => [
                            "heading" => "Mais do que um serviço financeiro",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "left",
                            "description" => "O Key Account é o modelo de atendimento premium da Fire|ce, pensado para clientes que exigem um nível mais alto de personalização, estratégia e confidencialidade.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Key Account",
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "694e6e88-8cf2-47b8-8632-5c237e8ae3e5" => [
                                        "label" => "Começar meu planejamento",
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "hero" => [
                            "d1db3990-ac52-4429-86e6-422c12e78c89" => "d1db3990-ac52-4429-86e6-422c12e78c89",
                        ],
                    ],
                ],
                "5008a241-ac16-40af-97aa-fb76b67f1d34" => [
                    "type" => "split-with-horizontal-steps",
                    "data" => [
                        "headline" => [
                            "heading" => "Você busca inteligência, discrição e excelência  no cuidado com o seu patrimônio?",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "O Key Account é para quem não aceita menos do que alta performance. Vamos construir o próximo nível da sua jornada financeira.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Escolha a Fire|ce",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "has_cards" => true,
                            "grid_columns" => "2",
                            "card_type" => "cta",
                            "items" => [
                                "f9c60331-83cb-4626-a855-d4ada59e8e55" => [
                                    "title" => "Qual o perfil ideal para o Key Account?",
                                    "description" => "Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com atendimento altamente personalizado.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "82ed5f19-69bf-4aa0-9d60-aacc691dfbb3" => [
                                    "title" => "É possível contratar o Key Account para gestão internacional?",
                                    "description" => "Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando o perfil do cliente e as normas regulatórias.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "6511d4b1-738f-4801-a248-c6504d3e75d0" => [
                                    "title" => "Com que frequência acontecem as reuniões?",
                                    "description" => "O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais sempre que necessário.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "16e6690b-3296-40c8-9f85-336fa432c54f" => [
                                    "title" => "Planejamento Sucessório",
                                    "description" => "Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e continuidade para seu legado.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                            ],
                        ],
                        "cta_description" => "Não encontrou exatamente o que procura?",
                        "has_actions" => true,
                        "buttons" => [
                            "870e39f8-c9c2-41b8-8cfb-37e596d392e1" => [
                                "label" => "Agende uma análise",
                                "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                "icon" => "heroicon-c-chevron-right",
                                "icon_position" => "trailing",
                                "target" => "_blank",
                            ],
                        ],
                    ],
                ],
                "05dd01bd-4d94-427c-9cb7-8c55bb1febb3" => [
                    "type" => "split-with-image-quote",
                    "data" => [
                        "headline" => [
                            "heading" => "Como funciona?",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "left",
                            "description" => "Atuamos lado a lado com quem busca proteção, inteligência e alta performance na gestão do patrimônio. Aqui, o planejamento financeiro vai além da organização: ele se transforma em um instrumento de segurança, expansão e legado.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Nosso Trabalho",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "image_position" => "right",
                        "badge" => "Por que optar pelo Key Account?",
                        "insights" => [
                            "ea8718cc-3e6e-4a78-b899-4721a59da1e8" => [
                                "icon" => "heroicon-c-check",
                                "title" => "Inteligência",
                                "description" => "Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua. Analisamos profundamente sua vida financeira, cruzamos dados patrimoniais e familiares, entendemos seus objetivos de longo prazo e criamos um plano sob medida que evolui com você.",
                            ],
                            "bcf24544-a5d0-45dd-9d67-4f5ec3a03388" => [
                                "icon" => "heroicon-m-check",
                                "title" => "Estratégia",
                            ],
                            "95ddb608-a057-4308-847c-25d522656583" => [
                                "icon" => "heroicon-m-check",
                                "title" => "Resultado",
                            ],
                        ],
                        "quote" => "Vamos construir o próximo nível da sua jornada financeira com o Key Account da Fire|ce.",
                        "end_description" => "Acompanhamos cada tomada de decisão importante, alertamos sobre riscos e oportunidades e adaptamos a estratégia conforme sua realidade muda. O cliente Key Account não é um número: é um relacionamento que atravessa fases, gera confiança e entrega resultados consistentes.",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                        "hero" => [
                            "c0762479-79d6-4a90-8cb9-a1811462953d" => "c0762479-79d6-4a90-8cb9-a1811462953d",
                        ],
                        "start_description" => "Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua. Analisamos profundamente sua vida financeira, cruzamos dados patrimoniais e familiares, entendemos seus objetivos de longo prazo e criamos um plano sob medida que evolui com você.",
                    ],
                ],
                "58a9cda0-107b-4638-a4dd-3dd77d45e933" => [
                    "type" => "call-to-action-section",
                    "data" => [
                        "component_id" => "f8af4192-f84f-4f3d-98a2-a45de3d49618",
                        "headline" => [
                            "heading" => "Agora é hora de fazer seu patrimônio trabalhar por você, com inteligência e visão de futuro.",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "center",
                            "description" => null,
                            "badge" => [
                                "has_badge" => false,
                                "icon" => null,
                                "label" => null,
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "08c77bfd-4359-4061-ab35-7aeb0d0f4f8b" => [
                                        "label" => "Agende uma análise",
                                        "url" => "https://api.whatsapp.com/send/?phone=5511987201303&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%B5es&type=phone_number&app_absent=0",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "image" => [
                            "ed952d55-084a-4bd5-a0da-ad0609e36e8a" => "ed952d55-084a-4bd5-a0da-ad0609e36e8a",
                        ],
                    ],
                ],
                "a77e5fd7-0f65-4a04-b70b-89a5c80acef8" => [
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
                                "label" => "Depoimentos"
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => []
                            ]
                        ],
                        "testimonials" => [
                            "2",
                            "4",
                            "7",
                            "6"
                        ]
                    ]
                ],
                "0fec5c9a-ccb5-40d7-b185-2a4207744ba7" => [
                    "type" => "faq",
                    "data" => [
                        "description" => null,
                        "solutions" => [
                            "ef0e8694-e349-49c3-9b16-18420e57da77" => [
                                "question" => "Qual o perfil ideal para o Key Account?",
                                "answer" => "Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com atendimento altamente personalizado."
                            ],
                            "671c2f39-b4a1-4e18-8ac7-cb12cecde42e" => [
                                "question" => "É possível contratar o Key Account para gestão internacional?",
                                "answer" => "Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando o perfil do cliente e as normas regulatórias."
                            ],
                            "2e31407c-a04c-4cc9-b109-d46c58d7fc50" => [
                                "question" => "Com que frequência acontecem as reuniões?",
                                "answer" => "O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais sempre que necessário."
                            ],
                            "33b2e539-fda3-45c2-ac53-1ea7be2e7eb2" => [
                                "question" => "O serviço também cobre sucessão familiar e herança?",
                                "answer" => "Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e continuidade para seu legado."
                            ]
                        ],
                        "hero" => [
                            "80e850c0-8487-4933-8a86-9db5a56ad7e9" => "80e850c0-8487-4933-8a86-9db5a56ad7e9"
                        ]
                    ]
                ],
                "c2fefb39-b6f0-44f6-9dbe-1db7300ed55f" => [
                    "type" => "call-to-action-with-icon",
                    "data" => [
                        "title" => "Visite nosso Blog e tenha acesso à conteúdos exclusivos",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://firece.com.br/blog",
                        "icon" => "lucide-book-marked",
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
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/partner-faq.png'),
                ],
                [
                    'collection' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'path' => public_path('images/stock/code-capital.png'),
                ],
            ],
            'content' => [
                "31f19faf-f8c3-4ec4-aa6c-f585e18f6ecb" => [
                    "type" => "hero-with-background-image",
                    "data" => [
                        "hero_size" => "screen",
                        "headline" => [
                            "heading" => "Trabalhe conosco",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "center",
                            "description" => "Trabalhar na Fire|ce é transformar vidas todos os dias, começando pela sua.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Trabalhe conosco",
                            ],
                            "buttons" => [
                                "has_actions" => true,
                                "buttons" => [
                                    "ce58c3a2-274d-4f37-a4dc-5ee99ac6b474" => [
                                        "label" => "Começar meu planejamento",
                                        "url" => "https://www.educafire.com.br/mentoria",
                                        "icon" => "heroicon-c-chevron-right",
                                        "icon_position" => "trailing",
                                        "target" => "_blank",
                                    ],
                                ],
                            ],
                        ],
                        "hero" => [
                            "c8355b4d-9b1b-406c-a1a9-a743c3f1fc12" => "c8355b4d-9b1b-406c-a1a9-a743c3f1fc12",
                        ],
                    ],
                ],
                "f01869cc-f985-4d25-8415-38dbf910a34b" => [
                    "type" => "split-with-horizontal-steps",
                    "data" => [
                        "headline" => [
                            "heading" => "Perfis e necessidades",
                            "keywords" => [],
                            "size" => "lg",
                            "position" => "center",
                            "description" => "Acreditamos que educação financeira é poder. E, por aqui, formamos um time que une propósito, inovação, e alta performance oara levar esse poder a mais pessoas. Se você quer crescer em um ambiente colaborativo, dinâmico e com desafios reais, seu lugar pode ser com a gente.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Escolha a Fire|ce",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "has_cards" => true,
                            "grid_columns" => "2",
                            "card_type" => "cta",
                            "items" => [
                                "41ffc9e5-290a-4400-9bb5-d1210391ad79" => [
                                    "title" => "Seja um parceiro",
                                    "description" => "Valorizamos profissionais que querem ir além, aprender, inovar e construir algo grande com a gente. Se você busca mais do que um emprego, vem fazer parte de um time que cresce junto e gera impacto real.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                                "413a263e-0121-4a42-809c-03d8492647b9" => [
                                    "title" => "Plano de Ação",
                                    "description" => "Na Fire|ce, cada profissional tem papel estratégico para transformar o jeito que as pessoas lidam com o dinheiro. Trabalhamos com propósito, foco em resultado e um time que se apoia, se desafia e aprende junto.",
                                    "icon" => "lucide-message-circle-more",
                                    "has_actions" => false,
                                    "buttons" => [],
                                ],
                            ],
                        ],
                        "cta_description" => null,
                        "has_actions" => false,
                        "buttons" => [],
                    ],
                ],
                "48f90557-c86e-4c04-bc12-782b68fadd3d" => [
                    "type" => "two-columns-image-feature-grid",
                    "data" => [
                        'headline' => [
                            'size' => 'lg',
                            'position' => 'left',
                            'heading' => 'Conheça mais sobre a Fire|ce',
                            'description' => 'A Fire|ce ajuda empresas a promoverem alta performance por meio da
                            educação financeira. Com programas sob medida, consultores especializados e soluções
                            integradas, criamos pontes entre saúde financeira e produtividade.',
                            'has_actions' => false,
                            'actions' => [],
                            'keywords' => [],
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-logo",
                                "label" => "Sobre nós",
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => [],
                            ],
                        ],
                        "cards" => [
                            "ab7dbacd-8d15-44a9-8679-d5f7b2070af8" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Projetos Conjuntos",
                                "description" => "Monetize sua influência ou rede com um modelo de parceria inteligente e sustentável — você lucra enquanto ajuda pessoas a transformarem suas vidas financeiras.",
                            ],
                            "9f66fbd0-f4a3-476f-a467-012b0c08c50d" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Reconhecimento",
                                "description" => "Associe sua marca ou imagem a uma consultoria que entrega resultados reais e melhora a relação das pessoas com o dinheiro.",
                            ],
                            "139da8af-1cc5-45b8-a8ab-eb9ffc6811c7" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Ecossistema Fire|ce",
                                "description" => "Tenha contato privilegiado com nossos produtos, lançamentos e soluções, além de ferramentas que tornam a parceria ainda mais eficiente.",
                            ],
                            "55c36b6e-b9b9-4c4a-80f4-c6dbda565697" => [
                                "icon" => "lucide-message-circle-more",
                                "title" => "Suporte contínuo",
                                "description" => "Contamos com uma equipe que acompanha sua jornada, oferece materiais personalizados, treinamentos e um plano de crescimento contínuo.",
                            ],
                        ],
                        "hero" => [
                            "e6b23c8e-b49b-4aad-aa12-f3e2217222d9" => "e6b23c8e-b49b-4aad-aa12-f3e2217222d9",
                        ],
                    ],
                ],
                "0fd402d7-abeb-4c34-80a2-0c2be433c68e" => [
                    "type" => "contact-form",
                    "data" => [
                        "heading" => "Envie uma mensagem",
                        "description" => "O Key Account é o modelo de atendimento premium da Fire|ce, pensado para clientes",
                    ],
                ],
                "dc24b903-cbf1-4ef9-94cb-0c4986a9d7d9" => [
                    "type" => "faq",
                    "data" => [
                        "description" => null,
                        "solutions" => [
                            "5474a2cb-83a0-4ad5-a1c7-270771a00981" => [
                                "question" => "Quem pode se tornar parceiro da Fire|ce?",
                                "answer" => "Qualquer profissional, empresa ou instituição com sinergia de trabalho alinhada e propósito alinhado ao nosso: transformar a vida financeira das pessoas com estratégia e impacto real."
                            ],
                            "86cbedd5-13d5-4e1c-8921-8bae0069010a" => [
                                "question" => "Quais são os formatos mais comuns de parceria?",
                                "answer" => "Desde Joint Ventures e projetos educacionais até parcerias comerciais e e integração de serviços."
                            ],
                            "07f3ddf2-f324-46c5-b5dd-93281ce7568b" => [
                                "question" => "A Fire|ce investe em projetos em conjunto?",
                                "answer" => "Sim. Avaliamos oportunidades de forma individual e, quando há sinergia, investimos tempo, estrutura e até recursos para gerar resultados sólidos em parceria."
                            ],
                            "2be50b19-57c1-4aea-afab-ee1427fabe14" => [
                                "question" => "Como iniciar uma conversa sobre parceria com a Fire|ce?",
                                "answer" => "Basta entrar em contato pelo nosso formulário ou canais oficiais. Vamos marcar uma reunião para entender como nossas forças podem se complementar."
                            ]
                        ],
                        "hero" => [
                            "df77443e-c977-4766-a8b9-d330d42ef6f4" => "df77443e-c977-4766-a8b9-d330d42ef6f4"
                        ]
                    ]
                ],
                "e0d099bc-bc25-4bf4-bca4-34491b01522b" => [
                    "type" => "call-to-action-with-icon",
                    "data" => [
                        "title" => "Visite nosso Blog e tenha acesso à conteúdos exclusivos",
                        "cta_label" => "Agende uma análise",
                        "cta_url" => "https://firece.com.br/blog",
                        "icon" => "lucide-book-marked",
                    ],
                ],
            ],
            'status' => 'published',
        ],
        [
            'title' => 'Blog',
            'meta_title' => 'Fire|ce Blog – Estratégia Financeira e Tecnologia de Investimentos',
            'deletable' => false,
            'meta_description' => 'Explore análises, estudos e estratégias da Fire|ce sobre finanças, investimentos e tecnologia. Um blog técnico para quem quer entender o futuro da consultoria financeira.',
            'meta_keywords' => 'blog financeiro, consultoria financeira, estratégia financeira, tecnologia financeira, investimentos, Fire|ce',
            'opengraph_title' => 'Fire|ce Blog – Onde Finanças e Tecnologia se Encontram',
            'opengraph_description' => 'Artigos técnicos e análises profundas sobre consultoria financeira moderna, automação e dados aplicados ao planejamento financeiro inteligente.',
            'slug' => 'blog',
            'medias' => [
                [
                    'collection' => CustomComponent::HeroWithBackgroundImage->value,
                    'path' => public_path('images/stock/work-with-us-hero.jpg'),
                    'custom_properties' => [
                        "component_id" => "6a3e8358-8aa3-4a19-878b-46d046cacb92",
                    ]
                ],
            ],
            'content' => [
                "07897c02-54ec-408d-8479-497de7abc841" => [
                    "type" => "hero-with-background-image",
                    "data" => [
                        "hero_size" => null,
                        "headline" => [
                            "heading" => "Conteúdo que transforma",
                            "keywords" => [],
                            "size" => "3xl",
                            "position" => "center",
                            "description" => "Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.",
                            "badge" => [
                                "has_badge" => true,
                                "icon" => "firece-nb-logo",
                                "label" => "Blog Fire|ce"
                            ],
                            "buttons" => [
                                "has_actions" => false,
                                "buttons" => []
                            ]
                        ],
                        "hero" => [
                            "771d7702-b21c-4e75-9657-cfcf83890bb9" => "771d7702-b21c-4e75-9657-cfcf83890bb9"
                        ]
                    ]
                ],
                '852b14ef-67fd-4d1e-8394-a9e033f31fab' => [
                    'type' => 'blog-article-list',
                    'data' => [
                        'headline' => [
                            'heading' => 'Invista no futuro com inteligência e precisão ',
                            'keywords' => [
                                'Invista',
                                'com',
                                'inteligência',
                                'e',
                                'precisão',
                            ],
                            'size' => 'lg',
                            'position' => 'left',
                            'description' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                            'badge' => [
                                'has_badge' => true,
                                'icon' => 'firece-logo',
                                'label' => 'Consultoria Financeira'
                            ],
                            'buttons' => [
                                'has_actions' => false,
                                'buttons' => []
                            ]
                        ]
                    ]
                ]
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
