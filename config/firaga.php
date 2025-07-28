<?php

use App\Enums\CustomComponent;
use Carbon\Carbon;

return [
    'pages' => [
        [
            'title' => 'Home',
            'meta_title' => 'Planejamento Personalizado – Consultoria Financeira sob Medida | Fire|ce',
            'meta_description' => 'Transforme sua vida financeira com os pacotes personalizados da Fire|ce. Do plano Gold ao Black, oferecemos organização, estratégia e performance para cada etapa da sua jornada.',
            'meta_keywords' => 'planejamento financeiro, planejamento personalizado, consultoria financeira, organização financeira, consultoria Fire|ce',
            'opengraph_title' => 'Planejamento Financeiro Personalizado para Cada Fase da Sua Vida | Fire|ce',
            'opengraph_description' => 'Descubra os pacotes exclusivos da Fire|ce para organizar, proteger e expandir seu patrimônio com inteligência e clareza.',
            'slug' => '/',
            'content' => [
                [
                    'type' => CustomComponent::HeroWithStatsAndImage->value,
                    'data' => [
                        'heading' => 'Viva melhor com Educação Financeira',
                        'subheading' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                        'cta_label' => 'Agende uma análise',
                        'badge' => null,
                        'cta_url' => 'https://firece.com.br',
                        'metrics' => [
                            [
                                'label' => 'Clientes Atendidos',
                                'value' => '+2.000',
                                'icon' => 'firece-star',
                            ],
                            [
                                'label' => 'Consultores Financeiros',
                                'value' => '+10',
                                'icon' => 'firece-star',
                            ],
                            [
                                'label' => 'Anos de experiência',
                                'value' => '+10',
                                'icon' => 'firece-star',
                            ],
                            [
                                'label' => 'Crescimento Anual',
                                'value' => '+300%',
                                'icon' => 'firece-star',
                            ],
                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithVerticalSteps->value,
                    'data' => [
                        'badge' => 'Nosso trabalho',
                        'heading' => 'Transformamos a complexidade em clareza com nossa metodologia.',
                        'description' => 'Levamos você da análise de perfil à execução estratégica, com suporte contínuo para maximizar seus resultados. Nossa metodologia foi desenvolvida para transformar a sua relação com o dinheiro em 3 etapas fundamentais:',
                        'cta_link' => '#',
                        'cta_label' => 'Saiba mais',
                        'cards' => [
                            [
                                'icon' => 'firece-star',
                                'title' => 'Análise Financeira',
                                'description' => 'O primeiro contato, onde conhecemos melhor suas metas, seus objetivos e estilo de vida para estruturarmos o seu planejamento financeiro estratégico.',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Plano de Ação',
                                'description' => 'Nosso segundo encontro, onde trazemos estratégias detalhadas para começar a colocar em prática todas as mudanças necessárias e soluções encontradas.',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Acompanhamento',
                                'description' => 'No terceiro momento, acompanhamos sua evolução e ajustamos o planejamento conforme sua vida muda. Estamos ao seu lado para que você se mantenha no caminho certo.',
                            ],
                        ],

                    ],
                ],
                [
                    'type' => CustomComponent::SplitWithHorizontalSteps->value,
                    'data' => [
                        'badge' => 'Escolha a Fire|Ce',
                        'heading' => 'Perfis e necessidades',
                        'description' => 'Saber se você é endividado, desorganizado ou poupador faz toda a diferença: é com esse entendimento que conseguimos traçar estratégias financeiras personalizadas, que respeitam sua realidade e aceleram seus resultados.',
                        'cards' => [
                            [
                                'icon' => 'firece-star',
                                'title' => 'Se você sente que poderia estar melhor',
                                'description' => 'Seu dinheiro some sem que perceba? Sente que poderia estar guardando mais, gastando melhor e tendo mais controle financeiro? Agende sua consultoria que nós vamos te ajudar!',
                                'cta_link' => '#',
                                'cta_label' => 'Agendar análise',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Se você guarda dinheiro, mas não sabe como potencializar',
                                'description' => 'Criamos um planejamento financeiro alinhado com seus objetivos, transformando sua reserva em um plano sólido de crescimento. Chegou a hora de fazer suas economias trabalharem para você.',
                                'cta_link' => '#',
                                'cta_label' => 'Agendar análise',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Se você já investe e quer ir mais longe',
                                'description' => 'Talvez sua carteira não seja tão diversificada ou seus rendimentos não estejam alinhados com seus objetivos. Está na hora de otimizar sua estratégia.',
                                'cta_link' => '#',
                                'cta_label' => 'Agendar análise',
                            ],
                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Não tema a faísca da mudança ele forja sua evolução.',
                        'cta_url' => '#',
                        'cta_label' => 'Agende sua análise',
                    ],
                ],
                [
                    'type' => CustomComponent::HorizontalScrollerHighlight->value,
                    'data' => [
                        'badge' => 'Nossas especialidades',
                        'heading' => 'Soluções personalizadas',
                        'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros.',
                        'cta_link' => '#',
                        'cards' => [
                            [
                                'icon' => 'firece-star',
                                'title' => 'Planejamento Estratégico',
                                'description' => 'Diagnóstico e plano financeiro personalizado para cada fase da sua vida.',
                                'cta_link' => '#',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Key Account',
                                'description' => 'Consultoria exclusiva e contínua para quem busca alta performance financeira.',
                                'cta_link' => '#',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Educa Fire',
                                'description' => 'Conteúdos, cursos e eventos para transformar sua carreira dentro do mercado financeiro.',
                                'cta_link' => '#',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Parcerias',
                                'description' => 'Soluções integradas com especialistas e marcas que compartilham nossos valores.',
                                'cta_link' => '#',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => 'firece-star',
                                'title' => 'Code Capital',
                                'description' => 'Consultoria financeira especializada para profissionais do mercado tech.',
                                'cta_link' => '#',
                                'cta_label' => 'Visitar',
                            ],
                        ],

                    ],
                ],
                [
                    'type' => CustomComponent::Plans->value,
                    'data' => [
                        'badge' => 'Investimento',
                        'heading' => 'Conheça nossos planos',
                        'subheading' => 'Conheça os planos da Fire|ce e entenda como a gente transforma a vida financeira de quem quer mais clareza, controle e crescimento',
                        'plans' => [
                            [
                                'name' => 'gold',
                                'best_plan' => false,
                                'description' => 'Para quem está começando a organizar sua vida financeira e deseja mais tranquilidade.',
                                'cta_label' => 'Saiba mais',
                                'cta_link' => '#',
                                'benefits' => [
                                    'Organização Anual',
                                    'Mapa financeiro',
                                    'Construção de Reserva',
                                    'Planilha de fluxo de caixa',
                                    'Planilha de patrimônio',
                                ],
                            ],
                            [
                                'name' => 'platinum',
                                'best_plan' => true,
                                'description' => 'Para quem deseja ter o controle total de suas finanças e ser mais arrojado, além de mais diversidade.',
                                'includes' => 'Itens do Gold',
                                'cta_label' => 'Saiba mais',
                                'cta_link' => '#',
                                'benefits' => [
                                    'Preenchimento de Fluxo de Caixa',
                                    'Diagnóstico de carteira',
                                    'Estruturar aquisição de bens',
                                    'Parceiros de investimentos',
                                    'Custo Oportunidade',
                                ],
                            ],
                            [
                                'name' => 'black',
                                'best_plan' => false,
                                'description' => 'Para quem já investe e deseja estratégias personalizadas para potencializar seu patrimônio.',
                                'includes' => 'Itens do Gold & Platinum',
                                'cta_label' => 'Saiba mais',
                                'cta_link' => '#',
                                'benefits' => [
                                    'Revisão de Progresso',
                                    'Carteira Personalizada',
                                    'Reserva Internacional',
                                    'Estratégias Exclusivas',
                                    'Possibilidade Key Account',
                                ],
                            ],
                        ],
                    ],

                ],
                [
                    'type' => CustomComponent::FullWidthVideo->value,
                    'data' => [
                        'badge' => 'Lorem ipsum  dolor sit amet',
                        'heading' => 'Nos conheça melhor',
                        'description' => 'Você não precisa enfrentar sua vida financeira sozinho. Descubra como a Fire|ce pode caminhar com você — do caos à conquista.',
                        'video_url' => '#',
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Tem jeito, tem plano e tem apoio. A Firece está com você nessa virada financeira.',
                        'cta_url' => '#',
                        'cta_label' => 'Agende sua análise',
                    ],
                ],
                [
                    'type' => CustomComponent::Testimonials->value,
                    'data' => [
                        'heading' => 'Escute de nossos clientes',
                        'badge' => 'Depoimentos',
                        'testimonials' => [1, 2, 3],
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionWithIconSection->value,
                    'data' => [
                        'title' => 'Visite nosso Blog e tenha acesso à conteúdos exclusivos',
                        'description' => 'Nosso blog é o lugar ideal para quem busca conhecimento e insights sobre o mercado financeiro, nacional e global.',
                        'cta_label' => 'Visitar Blog',
                        'cta_url' => 'https://firece.com.br/blog',
                        'icon' => 'firece-star',
                    ],
                ],
            ],
            'status' => 'published',
        ],
        [
            'title' => 'Planejamento',
            'meta_title' => 'Planejamento Personalizado – Consultoria Financeira sob Medida | Fire|ce',
            'meta_description' => 'Transforme sua vida financeira com os pacotes personalizados da Fire|ce. Do plano Gold ao Black, oferecemos organização, estratégia e performance para cada etapa da sua jornada.',
            'meta_keywords' => 'planejamento financeiro, planejamento personalizado, consultoria financeira, organização financeira, consultoria Fire|ce',
            'opengraph_title' => 'Planejamento Financeiro Personalizado para Cada Fase da Sua Vida | Fire|ce',
            'opengraph_description' => 'Descubra os pacotes exclusivos da Fire|ce para organizar, proteger e expandir seu patrimônio com inteligência e clareza.',
            'slug' => 'planejamento',
            'content' => [
                [
                    'type' => 'partials-grid-hero',
                    'data' => [
                        'subheading' => 'Fire',
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
                        'thumbnail' => 1,
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
        [
            'title' => 'Key Account',
            'meta_title' => 'Key Account – Consultoria Financeira Premium | Fire|ce',
            'meta_description' => 'Conheça o Key Account da Fire|ce: atendimento financeiro premium para proteger, consolidar e expandir seu patrimônio com estratégia, discrição e excelência.',
            'meta_keywords' => 'key account, consultoria financeira, planejamento patrimonial, blindagem patrimonial, atendimento personalizado, planejamento sucessório, investimento premium, gestão financeira de alto nível',
            'opengraph_title' => 'Key Account – Consultoria Financeira Premium | Fire|ce',
            'opengraph_description' => 'Atendimento exclusivo e altamente estratégico para clientes que exigem inteligência, proteção e performance na gestão de seu patrimônio.',
            'slug' => 'key-account',
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
                        'thumbnail' => 1,
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
        [
            'title' => 'Educa Fire',
            'meta_title' => 'Educa Fire – Educação Financeira para Clientes e Profissionais | Fire|ce',
            'meta_description' => 'O Educa Fire é a vertente educacional da Fire|ce que capacita clientes e profissionais com conhecimento prático para decisões financeiras mais inteligentes.',
            'meta_keywords' => 'educação financeira, workshops, palestras, formação profissional, capacitação financeira, consultoria financeira, conhecimento financeiro, Fire|ce',
            'opengraph_title' => 'Educa Fire – Conhecimento para Transformar Finanças | Fire|ce',
            'opengraph_description' => 'Workshops, palestras e formações práticas para democratizar o acesso à inteligência financeira. Conheça o Educa Fire e comece a transformar sua vida.',
            'slug' => 'educa-fire',
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
                        'thumbnail' => 1,
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
        [
            'title' => 'Parcerias',
            'meta_title' => 'Parcerias Estratégicas – Iniciativas Colaborativas com Propósito | Fire|ce',
            'meta_description' => 'Conecte-se à Fire|ce por meio de parcerias estratégicas. Criamos projetos colaborativos com empresas e instituições que desejam gerar impacto real por meio da educação financeira.',
            'meta_keywords' => 'parcerias estratégicas, projetos educacionais, joint venture, educação corporativa, inovação financeira, colaboração, Fire|ce, integração de expertise, inteligência financeira',
            'opengraph_title' => 'Parcerias Estratégicas com a Fire|ce – Juntos Pela Transformação Financeira',
            'opengraph_description' => 'Empresas, especialistas e instituições podem se conectar à Fire|ce para criar soluções financeiras inovadoras com propósito e impacto.',
            'slug' => 'parcerias',
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
                        'thumbnail' => 1,
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
        [
            'title' => 'Code Capital',
            'meta_title' => 'Code Capital – Investimentos Internacionais para Desenvolvedores | Fire|ce',
            'meta_description' => 'A Fire|ce oferece soluções financeiras globais para profissionais de tecnologia. Invista com segurança e performance no exterior com planejamento personalizado.',
            'meta_keywords' => 'investimento internacional, desenvolvedores, profissionais de tecnologia, Fire|ce, code capital, tesouro internacional, planejamento financeiro, carteira global, dólar, investimentos no exterior',
            'opengraph_title' => 'Code Capital – Investimento Inteligente para Profissionais de Tecnologia | Fire|ce',
            'opengraph_description' => 'Seu talento é global — seus investimentos também podem ser. Conheça o Code Capital da Fire|ce e invista com inteligência no mercado internacional.',
            'slug' => 'code-capital',
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
                        'thumbnail' => 1,
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
    ],
];
