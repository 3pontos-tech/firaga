@props ([
    'title' => 'Acompanhe nosso blog e tenha acesso à conteúdos exclusivos',
    'description' =>
        'Nosso blog é o lugar ideal para quem busca conhecimento e insights sobre o mercado financeiro, nacional e global.',
    'submitLabel' => 'Subscribe',
    'image' => null
])

<section {{ $attributes->class('section') }}>
    <div class="md:container">
        {{-- Frame do Figma (1337x388): padding 64, texto até 801px e imagem absoluta à direita --}}
        <div
            class="bg-brand-primary relative flex flex-col overflow-hidden rounded-none md:block md:rounded-md"
            data-reveal="up"
        >
            <div class="flex flex-col justify-center gap-6 p-8 md:gap-[50px] md:p-16">
                <x-logo :clickable="false" size="lg" class="text-text-light! md:hidden" />

                <div class="flex flex-col gap-3 md:max-w-[801px] md:gap-7">
                    <x-fr-heading :level="2" size="md" class="text-text-light! md:text-lg!">{{ $title }}</x-fr-heading>
                    <x-fr-text size="md" class="text-text-light!">{{ $description }}</x-fr-text>
                </div>

                {{-- Visual only: no back-end handler wired yet --}}
                <form
                    class="flex w-full flex-col gap-3 sm:flex-row md:max-w-[756px] md:gap-[29px]"
                    onsubmit="return false;"
                >
                    @csrf
                    <div class="flex flex-1 items-center gap-2 rounded-sm border border-white px-4">
                        <x-heroicon-o-envelope class="size-6 shrink-0 text-white" />
                        <input
                            type="email"
                            name="email"
                            placeholder="Digite seu e-mail"
                            class="w-full border-0 bg-transparent py-4 text-xs text-white placeholder:text-white focus:outline-none"
                        />
                    </div>
                    <x-fr-button type="submit" variant="white" rounded="md" size="lg" class="md:min-w-[185px]">
                        {{ $submitLabel }}
                    </x-fr-button>
                </form>
            </div>

            {{-- O recorte orgânico já vem no canal alpha do asset, por isso a imagem não leva clip-path --}}
            <img
                src="{{ $image ?: asset('images/blog-imagem_1.webp') }}"
                alt="Leitura de conteúdo do blog Fire|ce"
                class="absolute top-[4.9%] right-[2.32%] hidden h-[91.75%] w-auto md:block"
            />
        </div>
    </div>
</section>
