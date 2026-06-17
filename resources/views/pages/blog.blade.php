<x-layout.landing headerBg="bg-brand-primary" headerTheme="[&_a]:text-text-light [&_button]:text-text-light">
    {{-- Featured article --}}
    @if ($featured)
        <section class="bg-brand-primary py-(--section-first-gap)">
            <div class="container flex flex-col gap-11 md:flex-row md:items-center md:gap-16">
                <div class="flex flex-col gap-8 md:basis-2/5">
                    <x-fr-headline size="2xl" align="left-desk">
                        <x-slot:title class="text-text-light!">
                            Conheça nosso blog
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar
                            liberdade, segurança e crescimento financeiro sustentável.
                        </x-slot:description>
                        <x-slot:actions>
                            <x-fr-button href="#artigos" variant="white"> Ver todos os artigos </x-fr-button>
                        </x-slot:actions>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-4 md:basis-3/5">
                    <a href="{{ route('blog.show', $featured) }}" class="group block overflow-hidden rounded-sm">
                        <img
                            src="{{ $featured->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook-but-gray.png') }}"
                            alt="{{ $featured->thumbnail_alt ?: $featured->title }}"
                            class="h-50 w-full object-cover transition-transform duration-300 group-hover:scale-105 md:h-80"
                        />
                    </a>

                    <x-fr-headline align="left" size="sm">
                        <x-slot:title class="text-text-light!">
                            <a href="{{ route('blog.show', $featured) }}" class="hover:underline">
                                {{ $featured->title }}
                            </a>
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

    <livewire:blog-posts :featured-id="$featured?->id" />
</x-layout.landing>
