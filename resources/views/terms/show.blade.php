@php
    $sidebarSections = collect($sections)
        ->filter(fn (array $section): bool => $section['show_in_sidebar'])
        ->map(fn (array $section): array => [
            'id' => $section['id'],
            'title' => $section['title'],
        ])
        ->values()
        ->all();
@endphp

<x-layout.guest>
    <x-slot:metatags>
        <title>{{ $term->title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $term->description }}">
    </x-slot:metatags>

    <div class="bg-elevation-surface min-h-screen">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 py-12 mt-[var(--navbar-height)]">
            <div class="flex flex-col gap-8">
                <div class="bg-elevation-02dp relative h-48 sm:h-56 overflow-hidden rounded-lg border border-outline-dark">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/10 via-transparent to-transparent"></div>
                    <div class="absolute top-0 left-0 h-full w-1 bg-brand-primary"></div>
                    <div class="absolute bottom-0 left-0 h-1 w-full bg-gradient-to-r from-brand-primary to-transparent"></div>
                    <div class="relative flex h-full items-center p-8">
                        <div class="flex items-center gap-6">
                            <div class="hidden sm:flex h-16 w-16 shrink-0 items-center justify-center rounded-lg bg-brand-primary/10 border border-brand-primary/20">
                                <x-filament::icon icon="heroicon-o-document-text" class="h-8 w-8 text-brand-primary" />
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-widest text-brand-primary">Documentação de termos</span>
                                <h1 class="mt-1 text-2xl sm:text-3xl font-bold text-text-high">{{ config('app.name') }}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_250px]">
                    <div class="min-w-0 flex-1 space-y-8">
                        <div>
                            <h2 class="mb-4 text-3xl sm:text-4xl font-bold text-text-high">
                                {{ $term->title }}
                            </h2>
                            @if($term->description)
                                <p class="text-text-medium">
                                    {{ $term->description }}
                                </p>
                            @endif
                        </div>
                        <hr class="border-outline-dark" />
                        @foreach ($sections as $section)
                            <section id="{{ $section['id'] }}" class="scroll-mt-24">
                                <div class="prose dark:prose-invert prose-headings:text-text-high prose-strong:text-text-high prose-p:text-text-medium prose-a:text-primary max-w-none">
                                    {!! $section['body'] !!}
                                </div>
                            </section>
                        @endforeach
                    </div>

                    @if (count($sidebarSections) > 0)
                        <aside class="hidden w-64 shrink-0 lg:block">
                            <nav class="sticky top-24 space-y-1 justify-self-end">
                                <p class="text-text-high mb-2 font-bold">Nessa página</p>

                                @foreach ($sidebarSections as $sidebarSection)
                                    <a
                                        href="#{{ $sidebarSection['id'] }}"
                                        class="text-text-medium hover:text-text-high block rounded-lg py-2 font-medium transition"
                                    >
                                        {{ $sidebarSection['title'] }}
                                    </a>
                                @endforeach
                            </nav>
                        </aside>
                    @endif
                </div>
            </div>
        </div>

    </div>
</x-layout.guest>
