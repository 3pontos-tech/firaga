<x-layout.landing headerBg="bg-brand-primary" headerTheme="[&_a]:text-text-light [&_button]:text-text-light">
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
                <img src="{{ asset('images/blog.png') }}" alt="Blog" class="h-50 w-full rounded-sm" />

                <x-fr-headline align="left" size="sm">
                    <x-slot:title class="text-text-light!">
                        Como planejar seus investimentos no curto, médio e longo prazo
                    </x-slot:title>
                    <x-slot:description class="text-text-light!">
                        Muitas pessoas enfrentam dificuldades financeiras por não terem um planejamento claro para seus
                        objetivos
                    </x-slot:description>
                </x-fr-headline>

                <hr class="border-outline-light" />

                <div class="flex items-center gap-2">
                    @if ($avatar)
                        <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" />
                    @endif
                    <x-fr-text class="text-text-light!" size="sm">{{ $name }}</x-fr-text>
                    @if ($role)
                        <div class="bg-outline-light size-1 rounded-full"></div>
                        <x-fr-text class="text-text-light!" size="sm">{{ $role }}</x-fr-text>
                    @endif
                    @if ($plan)
                        <div class="bg-outline-light size-1 rounded-full"></div>
                        <x-fr-text class="text-text-light!" size="sm">{{ $plan }}</x-fr-text>
                    @endif
                </div>
            </div>
        </div>
    </section>

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

            <div class="flex flex-col gap-8">
                <div class="divide-border-base border-border-base grid grid-cols-1 gap-8 divide-y border-y">
                    <div class="flex items-center">
                        <div class="h-18 w-18 rounded-sm">image here</div>

                        <div class="flex flex-1 flex-col">
                            <x-fr-heading> Article title </x-fr-heading>

                            <div class="flex items-center gap-2 truncate">
                                @if ($avatar)
                                    <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" />
                                @endif
                                <x-fr-text size="sm">{{ $name }}</x-fr-text>
                                @if ($role)
                                    <div class="bg-border-base size-1 rounded-full"></div>
                                    <x-fr-text size="sm">{{ $role }}</x-fr-text>
                                @endif
                                @if ($plan)
                                    <div class="bg-border-base size-1 rounded-full"></div>
                                    <x-fr-text size="sm" class="text-brand-primary!">{{ $plan }}</x-fr-text>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
