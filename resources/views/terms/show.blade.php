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

    <x-slot:navbar>
        <x-navbar />
    </x-slot:navbar>

    <div class="mx-auto container px-4 sm:px-6 lg:px-8 py-12 mt-[var(--navbar-height)]">
        <div class="flex flex-col gap-8">
            <div class="bg-elevation-01dp border-outline-light dark:border-outline-dark relative h-60 overflow-hidden rounded-lg border">
                <div class="flex h-full max-w-2xl flex-col items-center justify-center p-8">
                    <div>
                        <h1 class="text-4xl font-bold text-text-high">{{ config('app.name') }}</h1>
                        <p class="mt-4 font-medium text-text-medium">
                            {{ $term->description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_250px]">
                <div class="min-w-0 flex-1 space-y-8">
                    <div>
                        <h2 class="mb-6 text-4xl font-bold text-text-high">
                            {{ $term->title }}
                        </h2>
                        @if($term->description)
                            <p class="text-text-medium">
                                {{ $term->description }}
                            </p>
                        @endif
                    </div>
                    <div class="mt-8">
                        <hr class="border-outline-light dark:border-outline-dark" />
                    </div>
                    @foreach ($sections as $section)
                        <section id="{{ $section['id'] }}" class="scroll-mt-24">
                            <div class="prose dark:prose-invert max-w-none">
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

    <x-slot:footer>
        <x-layout.shared.footer />
    </x-slot:footer>
</x-layout.guest>
