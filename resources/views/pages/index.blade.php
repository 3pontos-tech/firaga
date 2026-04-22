<x-layout.landing>
    <x-slot:metatags>
        <title>{{ $page?->meta_title ?? ($page?->title ?? config('app.name')) }}</title>
        <link rel="canonical" href="{{ $page?->url() ?? '' }}" />
        <meta name="description" content="{{ $page?->meta_description ?? '' }}" />
        <meta name="keywords" content="{{ $page?->meta_keywords ?? '' }}" />
        <meta property="og:title" content="{{ $page?->opengraph_title ?? '' }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page?->url() ?? '' }}" />
        <meta property="og:description" content="{{ $page?->opengraph_description }}" />
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}" />
        <meta property="og:image:alt" content="{{ $page?->opengraph_picture_alt }}" />
    </x-slot:metatags>

    <section class="section-first">
        <div class="container">
            <x-fr-headline>
                <x-slot:title>
                    Você sabe quanto ganha. <mark>Mas você sabe quanto perde?</mark>
                </x-slot:title>
                <x-slot:description>
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A <mark>Firece</mark> mostra
                    exatamente o que está acontecendo
                </x-slot:description>
            </x-fr-headline>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <p>Conteudo 2</p>
        </div>
    </section>
</x-layout.landing>
