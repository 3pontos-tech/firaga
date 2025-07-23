@php
    $herodata = [
        'heading' => 'Key account',
        'subheading' =>
            'O Key Account é a solução premium da Fire|ce para clientes que desejam um atendimento diferenciado e altamente personalizado. Nosso foco é fornecer consultoria financeira de alto nível para aqueles que buscam proteger, consolidar e expandir seu patrimônio de forma estratégica.',
        'button_text' => 'Comece Agora',
        'button_url' => '#',
        'badge' => 'Serviços',
    ];

    $solutions = [
        [
            'question' => 'Qual o perfil ideal para o Key Account?',
            'answer' =>
                'Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com atendimento altamente personalizado.',
        ],
        [
            'question' => 'É possível contratar o Key Account para gestão internacional?',
            'answer' =>
                'Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando o perfil do cliente e as normas regulatórias.',
        ],
        [
            'question' => 'Com que frequência acontecem as reuniões?',
            'answer' =>
                'O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais sempre que necessário.',
        ],
        [
            'question' => 'O serviço também cobre sucessão familiar e herança?',
            'answer' =>
                'Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e continuidade para seu legado.',
        ],
    ];

    $clientReviews = [
        [
            'id' => 1,
            'name' => 'Carlos Mendes',
            'role' => 'Desenvolvedor Full Stack',
            'content' =>
                'A Fire|ce transformou completamente minha relação com o dinheiro. Antes eu apenas guardava em poupança, agora tenho uma estratégia sólida de investimentos que me permite sonhar com a independência financeira. O suporte é excepcional e personalizado.',
        ],
        [
            'id' => 2,
            'name' => 'Ana Paula Silva',
            'role' => 'Product Manager',
            'content' =>
                'Como profissional de tech que recebe em dólar, precisava de alguém que entendesse minha realidade. A Fire|ce não só entendeu como criou um plano perfeito para diversificar meus investimentos internacionalmente. Recomendo fortemente!',
        ],
        [
            'id' => 3,
            'name' => 'Roberto Santana',
            'role' => 'Engenheiro de Software',
            'content' =>
                'Estava perdido com tantas opções de investimento no mercado. A consultoria da Fire|ce me deu clareza e direção. Em 6 meses já vejo resultados concretos na minha carteira. Finalmente tenho um planejamento que faz sentido para meu perfil.',
        ],
        [
            'id' => 4,
            'name' => 'Mariana Costa',
            'role' => 'Data Scientist',
            'content' =>
                'O que mais me impressionou foi a transparência e o conhecimento técnico da equipe. Eles explicam cada estratégia de forma didática e me fazem sentir segura com minhas decisões financeiras. Meu patrimônio cresceu 40% no último ano.',
        ],
        [
            'id' => 5,
            'name' => 'Lucas Ferreira',
            'role' => 'DevOps Engineer',
            'content' =>
                'Trabalhar remotamente para empresas internacionais sempre foi meu sonho, mas não sabia como otimizar meus ganhos. A Fire|ce me ajudou a estruturar investimentos globais e hoje tenho tranquilidade financeira para focar no que amo fazer.',
        ],
    ];
@endphp

<x-layout.guest>
    <x-slot:metatags>
        <title>
            {{ config('app.name', 'Laravel') }} – Planejamento Financeiro
            Inteligente e Personalizado
        </title>
        <link rel="canonical" href="{{ config('app.url') }}" />
        <meta name="description"
            content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro." />
        <meta name="keywords"
            content="planejamento financeiro, consultoria financeira, investimentos, orçamento pessoal, educação financeira, investimentos internacionais, reserva de emergência, liberdade financeira, planejamento patrimonial" />

        <meta property="og:title" content="Fire|ce – Consultoria Financeira de Alta Performance" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:description"
            content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro." />
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}" />
        <meta property="og:image:alt" content="{{ config('app.name') }} Cover" />

        <!-- ✅ Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Fire|ce – Planejamento Financeiro Inteligente" />
        <meta name="twitter:description"
            content="Transforme sua vida financeira com clareza, estratégia e propósito." />
        <meta name="twitter:image" content="{{ asset('images/meta-logo.png') }}" />
    </x-slot>
    <div class="bg-[#09090A]">
        <x-key-account.hero :hero-data="$herodata" />
        <x-key-account.why-code-capital />
        <x-key-account.our-work />
        <x-code-capital.cta-section />
        <x-key-account.our-work-2 />
        <x-key-account.clients-review :cards="$clientReviews" />
        <x-partials.faq :solutions="$solutions" :thumbnail="asset('images/stock/key-account-faq.png')" />
    </div>
</x-layout.guest>
