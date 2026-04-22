@php
    $sidebarSections = collect($sections)
        ->filter(fn(array $section): bool => $section['show_in_sidebar'])
        ->map(
            fn(array $section): array => [
                'id' => $section['id'],
                'title' => $section['title'],
            ],
        )
        ->values()
        ->all();
@endphp

<x-layout.landing>
    <x-slot:metatags>
        <title>{{ $term->title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $term->description }}" />
    </x-slot:metatags>

    <div class="bg-elevation-surface min-h-screen">
        <div class="container mx-auto mt-[var(--navbar-height)] px-4 py-12 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-8">
                <div
                    class="bg-elevation-02dp border-outline-dark relative h-48 overflow-hidden rounded-lg border sm:h-56"
                >
                    <div
                        class="from-brand-primary/10 absolute inset-0 bg-gradient-to-br via-transparent to-transparent"
                    ></div>
                    <div class="bg-brand-primary absolute top-0 left-0 h-full w-1"></div>
                    <div
                        class="from-brand-primary absolute bottom-0 left-0 h-1 w-full bg-gradient-to-r to-transparent"
                    ></div>
                    <div class="relative flex h-full items-center p-8">
                        <div class="flex items-center gap-6">
                            <div
                                class="bg-brand-primary/10 border-brand-primary/20 hidden h-16 w-16 shrink-0 items-center justify-center rounded-lg border sm:flex"
                            >
                                <x-filament::icon icon="heroicon-o-document-text" class="text-brand-primary h-8 w-8" />
                            </div>
                            <div>
                                <span class="text-brand-primary text-xs font-semibold tracking-widest uppercase"
                                    >Documentação de termos</span
                                >
                                <h1 class="text-text-high mt-1 text-2xl font-bold sm:text-3xl">
                                    {{ config('app.name') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_250px]">
                    <div class="min-w-0 flex-1 space-y-8">
                        <div>
                            <h2 class="text-text-high mb-4 text-3xl font-bold sm:text-4xl">{{ $term->title }}</h2>
                            @if ($term->description)
                                <p class="text-text-medium">{{ $term->description }}</p>
                            @endif
                        </div>
                        <hr class="border-outline-dark" />
                        @foreach ($sections as $section)
                            <section id="{{ $section['id'] }}" class="scroll-mt-24">
                                <div
                                    class="prose dark:prose-invert prose-headings:text-text-high prose-strong:text-text-high prose-p:text-text-medium prose-a:text-primary max-w-none"
                                >
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
</x-layout.landing>
