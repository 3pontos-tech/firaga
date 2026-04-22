<x-layout.guest>
    <x-slot:metatags>
        <title>
            {{
                ($page?->meta_title ?? ($page?->title ?? config('app.name'))) .
                    ' - ' .
                    config('app.name')
            }}
        </title>
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

    <section class="flex min-h-screen items-center justify-center">
        <div class="text-center">
            <p class="text-text-medium text-sm tracking-widest uppercase">{{ config('app.name') }}</p>
            <h1 class="text-text-high mt-4 text-5xl font-bold">Landing em construção</h1>
            <p class="text-text-medium mt-4">Conteúdo hardcoded virá aqui.</p>
        </div>
    </section>
</x-layout.guest>
