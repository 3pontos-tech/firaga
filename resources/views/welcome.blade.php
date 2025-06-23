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

    <x-landing.banner/>
    <x-landing.our-work/>
    <x-landing.our-solutions :solutions="$solutions"/>
    <x-landing.plans :plans-data="$plansData"/>
    <x-landing.testimonial :testimonials="$testimonialData"/>
    <x-landing.bannerFirece/>
    <x-landing.cta/>
</x-layout.guest>
