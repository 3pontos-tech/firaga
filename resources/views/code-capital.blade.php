@php
    $herodata = [
        'heading' => 'Planejamento Financeiro para Profissionais de TI',
        'subheading' => 'Estratégias internacionais de investimento personalizadas para engenheiros de software, designers e profissionais de tecnologia. Faça seu patrimônio crescer globalmente com orientação especializada.',
        'button_text' => 'Comece Agora',
        'button_url' => '#',
    ];

    $solutions =  [
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
            ];

@endphp
<x-layout.guest>
    <x-slot:metatags>
        <title>  {{ config('app.name', 'Laravel')  }} – Planejamento Financeiro Inteligente e Personalizado</title>
        <link rel="canonical" href="{{ config('app.url') }}"/>
        <meta name="description"
              content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro.">
        <meta name="keywords"
              content="planejamento financeiro, consultoria financeira, investimentos, orçamento pessoal, educação financeira, investimentos internacionais, reserva de emergência, liberdade financeira, planejamento patrimonial">

        <meta property="og:title" content="Fire|ce – Consultoria Financeira de Alta Performance">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:description"
              content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro.">
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}"/>
        <meta property="og:image:alt" content="{{ config('app.name') }} Cover"/>

        <!-- ✅ Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Fire|ce – Planejamento Financeiro Inteligente">
        <meta name="twitter:description" content="Transforme sua vida financeira com clareza, estratégia e propósito.">
        <meta name="twitter:image" content="{{ asset('images/meta-logo.png')  }}">
    </x-slot:metatags>

    <x-landing.hero :hero-data="$herodata"/>

    <x-code-capital.why-code-capital />
    <x-code-capital.process />
    <x-partials.faq
        :solutions="$solutions"
        :thumbnail="asset('images/stock/code-capital-person.png')"
    />





</x-layout.guest>
