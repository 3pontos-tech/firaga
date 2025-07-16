<x-layout.guest>
    <x-slot:metatags>
        <title>  {{ config('app.name', 'Laravel')  }} – Planejamento Financeiro Inteligente e Personalizado</title>
        <link rel="canonical" href="{{ config('app.url') }}"/>
        <meta name="description" content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro.">
        <meta name="keywords" content="planejamento financeiro, consultoria financeira, investimentos, orçamento pessoal, educação financeira, investimentos internacionais, reserva de emergência, liberdade financeira, planejamento patrimonial">

        <meta property="og:title" content="Fire|ce – Consultoria Financeira de Alta Performance">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:description" content="Organize, proteja e expanda seu patrimônio com quem entende de estratégia. Conheça a Fire|ce e viva uma nova relação com o dinheiro.">
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}"/>
        <meta property="og:image:alt" content="{{ config('app.name') }} Cover"/>

        <!-- ✅ Twitter Cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Fire|ce – Planejamento Financeiro Inteligente">
        <meta name="twitter:description" content="Transforme sua vida financeira com clareza, estratégia e propósito.">
        <meta name="twitter:image" content="{{ asset('images/meta-logo.png')  }}">
    </x-slot:metatags>

    <x-landing.hero :hero-data="$heroData"/>
    <div class="flex flex-col gap-y-60">
        <x-landing.our-work/>
        <div class="h-[1px] bg-outline-light dark:bg-outline-high container mx-auto"></div>
        <x-landing.solution-section />
        <x-landing.cta-section/>
        <x-landing.our-solutions :solutions="$solutions"/>
        <div class="bg-[#2C2C2C] dark:bg-[#2C2C2C]">
            <x-landing.plan-section
                :heading="$plansData['heading']"
                :description="$plansData['description']"
                :plans="collect($plansData['plans'])"
            />
        </div>
        <x-landing.video-stats />
        <x-landing.clients-review :cards="$clientReviews"/>
        <x-landing.contact-form />
        <x-landing.cta/>
    </div>
</x-layout.guest>
