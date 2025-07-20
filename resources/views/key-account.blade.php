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
            'question' => 'Nossa Missão',
            'answer' =>
                'Poder auxiliar profissionais que já recebem em moeda estrangeira e que desejam investir também fora do Brasil, entendendo a instabilidade comum do Real. Tudo isso de forma online, sem perder o contato humano e o entendimento do mercado de TI, tornando a experiência única e imersiva em investimentos diferentes do comum.',
        ],
        [
            'question' => 'Para clientes diferenciados',
            'answer' =>
                'Se você já realiza tarefas online para qualquer país e gosta de ganhar em dólar, vai gostar ainda mais de ver sua rentabilidade crescer em moeda estrangeira. Nossa equipe entende a rotina de profissionais de TI e se adapta à sua realidade.',
        ],
        [
            'question' => 'Segurança para você e quem você ama',
            'answer' =>
                'Todos os investimentos são de caráter sucessório, garantindo que, mesmo diante de eventualidades, sua família terá tranquilidade e acesso aos recursos.',
        ],
        [
            'question' => 'Investimento fora do tradicional',
            'answer' =>
                'Além dos investimentos tradicionais, oferecemos opções em NY e UK, com instituições como BNY Mellon, UBS, BNP Paribas, Credit Suisse, entre outros.',
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
    <div class="bg-elevation-surface">
        <x-key-account.hero :hero-data="$herodata" />
        <x-key-account.why-code-capital />
        <x-key-account.our-work />
        <x-code-capital.cta-section />
        <x-key-account.our-work-2 />
        <x-key-account.clients-review :cards="$clientReviews" />
        <x-partials.faq :solutions="$solutions" :thumbnail="asset('images/stock/key-account-faq.png')" />
    </div>
</x-layout.guest>
