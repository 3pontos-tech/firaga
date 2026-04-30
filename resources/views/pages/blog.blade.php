<x-layout.landing headerBg="bg-brand-primary" headerTheme="[&_a]:text-text-light [&_button]:text-text-light">
    {{-- Featured article --}}
    @if ($featured)
        <section class="bg-brand-primary py-(--section-first-gap)">
            <div class="container flex flex-col gap-11">
                <x-fr-headline size="2xl">
                    <x-slot:title class="text-text-light!">
                        Conheça nosso blog
                    </x-slot:title>
                    <x-slot:description class="text-text-light!">
                        Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade,
                        segurança e crescimento financeiro sustentável.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-4">
                    <img
                        src="{{ $featured->getFirstMediaUrl('cover') ?: asset('images/blog.png') }}"
                        alt="{{ $featured->thumbnail_alt ?: $featured->title }}"
                        class="h-50 w-full rounded-sm object-cover"
                    />

                    <x-fr-headline align="left" size="sm">
                        <x-slot:title class="text-text-light!">
                            {{ $featured->title }}
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            {{ $featured->excerpt() }}
                        </x-slot:description>
                    </x-fr-headline>

                    <hr class="border-outline-light/30" />

                    <div class="flex flex-wrap items-center gap-2">
                        @php $author = $featured->author; @endphp
                        @if ($author->getFirstMediaUrl('avatar'))
                            <x-avatar :src="$author->getFirstMediaUrl('avatar')" :alt="$author->name" />
                        @endif
                        <x-fr-text class="text-text-light!" size="sm">{{ $author->name }}</x-fr-text>
                        @if ($author->role)
                            <div class="bg-outline-light/40 size-1 rounded-full"></div>
                            <x-fr-text class="text-text-light/70!" size="sm">{{ $author->role }}</x-fr-text>
                        @endif
                        <div class="bg-outline-light/40 size-1 rounded-full"></div>
                        <x-fr-text class="text-text-light/70!" size="sm">
                            {{ $featured->published_at->diffForHumans() }}
                        </x-fr-text>
                        @if ($featured->read_time_in_minutes > 0)
                            <div class="bg-outline-light/40 size-1 rounded-full"></div>
                            <x-fr-text class="text-text-light/70!" size="sm">
                                {{ $featured->read_time_in_minutes }} min de leitura
                            </x-fr-text>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Articles list --}}
    <section class="section">
        <div class="container flex flex-col gap-6">
            <x-fr-headline align="left">
                <x-slot:title>
                    Confira nossos artigos
                </x-slot:title>
                <x-slot:description>
                    Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o início
                </x-slot:description>
            </x-fr-headline>

            <div class="divide-border-base border-border-base divide-y border-y">
                @forelse ($posts as $post)
                    @php $postAuthor = $post->author; @endphp
                    <article class="flex items-center gap-4 py-6">
                        <img
                            src="{{ $post->getFirstMediaUrl('cover') ?: asset('images/blog.png') }}"
                            alt="{{ $post->thumbnail_alt ?: $post->title }}"
                            class="size-18 shrink-0 rounded-sm object-cover"
                        />

                        <div class="flex min-w-0 flex-1 flex-col justify-center gap-2">
                            <x-fr-heading :level="3" size="xs">{{ $post->title }}</x-fr-heading>

                            <div class="flex flex-wrap items-center gap-2 truncate">
                                @if ($postAuthor->getFirstMediaUrl('avatar'))
                                    <x-avatar :src="$postAuthor->getFirstMediaUrl('avatar')" :alt="$postAuthor->name" />
                                @endif
                                <x-fr-text
                                    class="text-text-high! font-semibold!"
                                    size="xs"
                                    >{{ $postAuthor->name }}</x-fr-text
                                >
                                @if ($postAuthor->role)
                                    <div class="bg-border-base size-1 rounded-full"></div>
                                    <x-fr-text
                                        class="text-text-high! font-semibold!"
                                        size="xs"
                                        >{{ $postAuthor->role }}</x-fr-text
                                    >
                                @endif
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-text-medium py-8 text-center">Nenhum artigo encontrado.</p>
                @endforelse
            </div>

            @if ($posts->hasPages())
                <div class="flex justify-center">{{ $posts->links() }}</div>
            @endif
        </div>
    </section>
</x-layout.landing>
