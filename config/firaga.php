<?php

use App\Enums\CustomComponent;
use App\Enums\FireceIcons;
use App\Enums\PageTheme;
use Carbon\Carbon;

return [
    'themes' => [
        'enabled' => false,
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
                    'collection' => CustomComponent::HeroWithStatsAndImage->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
            ],
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
                                'label' => 'Anos de experiência',
                                'value' => '+10',
                                'icon' => FireceIcons::Star->value,
                            ],
                            [
                                'label' => 'Consultores Financeiros',
                                'value' => '+10',
                                'icon' => FireceIcons::People->value,
                            ],
                            [
                                'label' => 'Crescimento Anual',
                                'value' => '+300%',
                                'icon' => FireceIcons::Chart->value,
                            ],
                            [
                                'label' => 'Clientes Atendidos',
                                'value' => '+2.000',
                                'icon' => FireceIcons::Hands->value,
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
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Saiba mais',
                        'cards' => [
                            [
                                'icon' => FireceIcons::Lookup->value,
                                'title' => 'Análise Financeira',
                                'description' => 'O primeiro contato, onde conhecemos melhor suas metas, seus objetivos e estilo de vida para estruturarmos o seu planejamento financeiro estratégico.',
                            ],
                            [
                                'icon' => FireceIcons::Target->value,
                                'title' => 'Plano de Ação',
                                'description' => 'Nosso segundo encontro, onde trazemos estratégias detalhadas para começar a colocar em prática todas as mudanças necessárias e soluções encontradas.',
                            ],
                            [
                                'icon' => FireceIcons::Bubble->value,
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
                        'grid_columns' => 3,
                        'cards' => [
                            [
                                'icon' => FireceIcons::Gear->value,
                                'title' => 'Se você sente que poderia estar melhor',
                                'description' => 'Seu dinheiro some sem que perceba? Sente que poderia estar guardando mais, gastando melhor e tendo mais controle financeiro? Agende sua consultoria que nós vamos te ajudar!',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Agendar análise',
                            ],
                            [
                                'icon' => FireceIcons::Chart->value,
                                'title' => 'Se você guarda dinheiro, mas não sabe como potencializar',
                                'description' => 'Criamos um planejamento financeiro alinhado com seus objetivos, transformando sua reserva em um plano sólido de crescimento. Chegou a hora de fazer suas economias trabalharem para você.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Agendar análise',
                            ],
                            [
                                'icon' => FireceIcons::Planet->value,
                                'title' => 'Se você já investe e quer ir mais longe',
                                'description' => 'Talvez sua carteira não seja tão diversificada ou seus rendimentos não estejam alinhados com seus objetivos. Está na hora de otimizar sua estratégia.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Agendar análise',
                            ],
                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Não tema a faísca da mudança ele forja sua evolução.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Agende sua análise',
                    ],
                ],
                [
                    'type' => CustomComponent::HorizontalScrollerHighlight->value,
                    'data' => [
                        'badge' => 'Nossas especialidades',
                        'heading' => 'Soluções personalizadas',
                        'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros.',
                        'cta_url' => 'https://pudim.com.br',
                        'cards' => [
                            [
                                'icon' => FireceIcons::NbGear->value,
                                'title' => 'Planejamento Estratégico',
                                'description' => 'Diagnóstico e plano financeiro personalizado para cada fase da sua vida.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => FireceIcons::NbStar->value,
                                'title' => 'Key Account',
                                'description' => 'Consultoria exclusiva e contínua para quem busca alta performance financeira.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => FireceIcons::NbMortarboard->value,
                                'title' => 'Educa Fire',
                                'description' => 'Conteúdos, cursos e eventos para transformar sua carreira dentro do mercado financeiro.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => FireceIcons::NbHands->value,
                                'title' => 'Parcerias',
                                'description' => 'Soluções integradas com especialistas e marcas que compartilham nossos valores.',
                                'cta_url' => 'https://pudim.com.br',
                                'cta_label' => 'Visitar',
                            ],
                            [
                                'icon' => FireceIcons::NbComputer->value,
                                'title' => 'Code Capital',
                                'description' => 'Consultoria financeira especializada para profissionais do mercado tech.',
                                'cta_url' => 'https://pudim.com.br',
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
                                'cta_url' => 'https://pudim.com.br',
                                'benefits' => [
                                    ['value' => 'Organização Anual'],
                                    ['value' => 'Mapa financeiro'],
                                    ['value' => 'Construção de Reserva'],
                                    ['value' => 'Planilha de fluxo de caixa'],
                                    ['value' => 'Planilha de patrimônio'],
                                ],
                            ],
                            [
                                'name' => 'platinum',
                                'best_plan' => true,
                                'description' => 'Para quem deseja ter o controle total de suas finanças e ser mais arrojado, além de mais diversidade.',
                                'includes' => 'Itens do Gold',
                                'cta_label' => 'Saiba mais',
                                'cta_url' => 'https://pudim.com.br',
                                'benefits' => [
                                    ['value' => 'Preenchimento de Fluxo de Caixa'],
                                    ['value' => 'Diagnóstico de carteira'],
                                    ['value' => 'Estruturar aquisição de bens'],
                                    ['value' => 'Parceiros de investimentos'],
                                    ['value' => 'Custo Oportunidade'],
                                ],
                            ],
                            [
                                'name' => 'black',
                                'best_plan' => false,
                                'description' => 'Para quem já investe e deseja estratégias personalizadas para potencializar seu patrimônio.',
                                'includes' => 'Itens do Gold & Platinum',
                                'cta_label' => 'Saiba mais',
                                'cta_url' => 'https://pudim.com.br',
                                'benefits' => [
                                    ['value' => 'Revisão de Progresso'],
                                    ['value' => 'Carteira Personalizada'],
                                    ['value' => 'Reserva Internacional'],
                                    ['value' => 'Estratégias Exclusivas'],
                                    ['value' => 'Possibilidade Key Account'],
                                    ['value' => 'Possibilidade Key Account'],
                                ],
                            ],
                        ],
                    ],

                ],
                [
                    'type' => CustomComponent::FullWidthVideo->value,
                    'data' => [
                        'badge' => 'Institucional',
                        'heading' => 'Nos conheça melhor',
                        'description' => 'Você não precisa enfrentar sua vida financeira sozinho. Descubra como a Fire|ce pode caminhar com você — do caos à conquista.',
                        'video_url' => 'https://pudim.com.br',
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'Tem jeito, tem plano e tem apoio. A Firece está com você nessa virada financeira.',
                        'cta_url' => 'https://pudim.com.br',
                        'cta_label' => 'Agende sua análise',
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
                    'type' => CustomComponent::CallToActionWithIconSection->value,
                    'data' => [
                        'title' => 'Visite nosso Blog e tenha acesso à conteúdos exclusivos',
                        'description' => 'Nosso blog é o lugar ideal para quem busca conhecimento e insights sobre o mercado financeiro, nacional e global.',
                        'cta_label' => 'Visitar Blog',
                        'cta_url' => 'https://firece.com.br/blog',
                        'icon' => 'firece-star', // faltou icone
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
                    'collection' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'path' => public_path('images/stock/our-approach.png'),
                ],
                [
                    'collection' => CustomComponent::CallToActionWithImage->value,
                    'path' => public_path('images/stock/consultant.png'),
                ],
            ],
            'content' => [
                [
                    'type' => CustomComponent::HeroWithCodeSnippet->value,
                    'data' => [
                        'heading' => 'Consultoria exclusiva e diferenciada para profissionais de tecnologia.',
                        'subheading' => 'Com uma abordagem personalizada, focamos em ajudar pessoas a organizarem suas finanças, evitarem decisões impulsivas e alocarem seu dinheiro de forma estratégica e com diversidade protegendo o patrimônio. O propósito da Code é transformar a relação com o dinheiro trazendo mais controle, confiança e liberdade para o futuro.',
                        'badge' => 'Code Capital',
                        'cta_label' => 'Agende uma análise',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                        'snippet' => file_get_contents(resource_path('markdown/code-capital/snippets.md')),
                    ],
                ],
                [
                    'type' => CustomComponent::Roadmap->value,
                    'data' => [
                        'heading' => 'Por que investir com a Code Capital?',
                        'subheading' => 'Você é atendido por quem fala a sua língua — especialistas que entendem sua realidade e estão prontos para te ajudar a crescer, recomeçar ou expandir seus horizontes financeiros.',
                        'caption' => 'Nossa equipe é formada por especialistas que conhecem os desafios da sua profissão e estão prontos para
caminhar ao seu lado, com respeito, clareza e soluções sob medida.',
                        'cta_label' => 'Saiba mais',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                        'steps' => [
                            [
                                'icon' => FireceIcons::NbPerson->value,
                                'title' => 'Expertise',
                                'description' => 'Consultores capacitados para direcionar sua vida financeira e sua profissão para um novo nível, atrelando seus objetivos pessoas e profissionais.',
                                'class' => 'justify-start',

                            ],
                            [
                                'icon' => FireceIcons::NbFolder->value,
                                'title' => 'Planejamento financeiro sob medida',
                                'description' => 'Estratégias personalizadas para maximizar sua remuneração, impulsionar seus investimentos e alcançar objetivos com segurança.',
                                'class' => 'justify-center',
                                'cta_label' => 'Agende uma análise',
                                'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                            ],
                            [
                                'icon' => FireceIcons::NbStar->value,
                                'title' => 'Resultados Comprovados',
                                'description' => 'Desde 2023, ajudando profissionais de tecnologia a construírem patrimônio de forma inteligente e global.',
                                'class' => 'justify-end',
                                'has_cta' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionFullWidthSection->value,
                    'data' => [
                        'title' => 'A gente decodifica o mercado financeiro para você focar no que faz de melhor.',
                        'cta_label' => 'Agende uma análise',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                    ],
                ],
                [
                    'type' => CustomComponent::VideoTestimonial->value,
                    'data' => [
                        'heading' => 'Dinheiro com propósito: como danilo parou de gastar por impulso',
                        'description' => 'Danilo, programador, relata como o suporte da Fire|ce transformou sua relação com o dinheiro. Antes, ao ver o saldo na conta, acabava gastando por impulso. Hoje, com organização e diversificação dos investimentos, seu dinheiro tem um propósito — e ele evita mexer até no fundo de reserva. Além disso, valoriza a confiança de investir com uma empresa que não empurra produtos, e sim constrói estratégias sólidas e transparentes, mesmo diante da instabilidade econômica do Brasil.',
                        'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy',
                        'insights' => [
                            [
                                'icon' => FireceIcons::NbPeople->value,
                                'value' => 'Especialistas  planejamento financeiro',
                            ],
                            [
                                'icon' => FireceIcons::NbTarget->value,
                                'value' => 'Metodologia própria testada e aprovada',
                            ],
                            [
                                'icon' => FireceIcons::NbChart->value,
                                'value' => 'Foco em resultados reais e sustentáveis',
                            ],
                        ],
                        'video_cards' => [
                            ['title' => 'Clientes atendidos', 'value' => '500+'],
                            ['title' => 'Anos de Experiência', 'value' => '5 anos'],
                            ['title' => 'Satisfação dos clientes', 'value' => '98%'],
                        ],
                        'cta_label' => 'Agende uma análise',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                    ],
                ],
                [
                    'type' => CustomComponent::TwoColumnsImageFeatureGrid->value,
                    'data' => [
                        'badge' => 'Nossa missão',
                        'heading' => 'Construído por profissionais de Finanças e Tecnologia',
                        'description' => 'Realizamos uma consulta com você para entender seu caso, seus objetivos e avaliar o melhor caminho para seus investimentos no exterior. Nós lhe auxiliaremos em todo o processo. Feito o investimento você terá um assessor para reinvestir ou para movimentações, além do envio de informes mensais sobre seus rendimentos.',
                        'cards' => [
                            [
                                'icon' => FireceIcons::NbTarget->value,
                                'title' => 'Nossa Missão',
                                'description' => 'A Code Capital nasce da necessidade de diversidade mais digital e entendimento de toda jornada de um profissional da área, criando assim um braço exclusivo e atento às necessidades dos profissionais.',
                            ],
                            [
                                'icon' => FireceIcons::NbPeople->value,
                                'title' => 'Para Clientes Diferenciados',
                                'description' => 'Com a possibilidade de realizar qualquer tarefa online para qualquer país do mundo. Se você gosta de ganhar em dólar, vai gostar ainda mais de ver sua rentabilidade crescer exponencialmente em uma moeda estrangeira.',
                            ],
                            [
                                'icon' => FireceIcons::NbComputer->value,
                                'title' => 'Segurança para você e quem você ama',
                                'description' => 'Todos os investimentos são de carácter sucessório, ou seja, mesmo que haja qualquer tipo de fatalidade, sua família terá tranquilidade de usar esses recursos.',
                            ],
                            [
                                'icon' => FireceIcons::NbChart->value,
                                'title' => 'Investimento fora do tradicional',
                                'description' => 'Além dos investimentos tradicionais e dos presentes na internet, temos investimentos principalmente em NY e UK, como a BNY Mellon, UBS, BNP Paribas, Credit Suisse entre outros.',
                            ],
                        ],
                        'cta_label' => 'Quero saber mais',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                    ],
                ],
                [
                    'type' => CustomComponent::CallToActionWithImage->value,
                    'data' => [
                        'heading' => 'Consultor financeiro exclusivo',
                        'description' => 'Ter um consultor financeiro vai muito além de "organizar as contas". É sobre ter um profissional ao seu lado que entende a sua realidade, te ajuda a enxergar possibilidades e constrói, junto com você, um caminho concreto rumo à tranquilidade financeira.',
                        'cta_label' => 'Agendar uma consulta gratuita',
                        'cta_url' => 'https://cal.com/eduardo-vogel-sc6dnr/30min',
                        'image' => 'Saiba mais',
                    ],
                ],
                [
                    'type' => CustomComponent::Testimonials->value,
                    'data' => [
                        'heading' => 'Escute de nossos clientes',
                        'badge' => 'Avaliações',
                        'testimonials' => [1, 6, 10, 7],
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
            'medias' => [
                [
                    'collection' => CustomComponent::Faq->value,
                    'path' => public_path('images/stock/hero-stock.png'),
                ],
                [
                    'collection' => CustomComponent::HeroWithBottomImage->value,
                    'path' => public_path('images/stock/partners-hero.png'),
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
                    'type' => CustomComponent::HeroWithBottomImage->value,
                    'data' => [
                        'heading' => 'A transformação se constrói com boas alianças.',
                        'subheading' => 'Seja através de projetos conjuntos, campanhas, educação corporativa ou desenvolvimento de produtos financeiros sob medida, nossas parcerias são desenhadas com estratégia, colaboração e propósito.',
                        'badge' => 'Parcerias',
                        'cta_label' => 'Entre em contato',
                        'cta_url' => 'https://pudim.com.br',
                    ],
                ],
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
                    'collection' => CustomComponent::HeroWithImage->value,
                    'path' => public_path('images/stock/key-account-hero.png'),
                ],
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
                    'type' => CustomComponent::HeroWithImage->value,
                    'data' => [
                        'badge' => 'Key Account',
                        'heading' => 'Mais do que um serviço financeiro',
                        'subheading' => 'O Key Account é o modelo de atendimento premium da Fire|ce, pensado para clientes que exigem um nível mais alto de personalização, estratégia e confidencialidade.',
                        'cta_label' => 'Agende uma análise',
                        'cta_url' => 'https://pudim.com.br',
                        'style' => 'metallic',
                    ],
                ],
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
            'content' => [
                [
                    'type' => CustomComponent::HeroWithCenteredTitle->value,
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
];
