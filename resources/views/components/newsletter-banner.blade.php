@props ([
    'title' => 'Acompanhe nosso blog e tenha acesso à conteúdos exclusivos',
    'description' =>
        'Nosso blog é o lugar ideal para quem busca conhecimento e insights sobre o mercado financeiro, riqueza e vida global.',
    'submitLabel' => 'Subscribe',
    'image' => null
])

<section {{ $attributes->class('section') }}>
    <div class="md:container">
        <div
            class="bg-brand-primary flex flex-col overflow-hidden rounded-none md:flex-row md:items-stretch md:rounded-lg"
            data-reveal="up"
        >
            <div class="flex flex-col justify-center gap-6 p-8 md:basis-3/5 md:p-12">
                <x-logo :clickable="false" size="lg" class="text-text-light! md:hidden" />

                <div class="flex flex-col gap-3">
                    <x-fr-heading :level="2" size="lg" class="text-text-light!">{{ $title }}</x-fr-heading>
                    <x-fr-text size="sm" class="text-text-light/80!">{{ $description }}</x-fr-text>
                </div>

                {{-- Visual only: no back-end handler wired yet --}}
                <form class="flex w-full flex-col gap-3 sm:flex-row" onsubmit="return false;">
                    @csrf
                    <div class="flex flex-1 items-center gap-2 rounded-lg border border-white/70 px-4">
                        <x-heroicon-o-envelope class="size-5 shrink-0 text-white" />
                        <input
                            type="email"
                            name="email"
                            placeholder="Digite seu e-mail"
                            class="w-full border-0 bg-transparent py-4 text-sm text-white placeholder:text-white/70 focus:outline-none"
                        />
                    </div>
                    <x-fr-button type="submit" variant="white" rounded="lg" size="lg">{{ $submitLabel }}</x-fr-button>
                </form>
            </div>

            <div class="hidden md:block md:basis-2/5 md:py-4 md:pr-4">
                <svg
                    class="h-full min-h-72 w-full"
                    viewBox="883 18 439 353"
                    preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg"
                    role="img"
                    aria-label="Leitura de conteúdo do blog Fire|ce"
                >
                    <defs>
                        <clipPath id="newsletter-image-clip">
                            <path
                                d="M884.521 31.9085C881.581 25.7326 886.084 18.6016 892.924 18.6016H1311.88C1317.02 18.6016 1321.19 22.7683 1321.19 27.9083V361.089C1321.19 366.229 1317.02 370.396 1311.88 370.396H894.949C887.645 370.396 883.188 362.367 887.049 356.168L918.717 305.334C952.611 250.928 956.447 183.001 928.895 125.125L884.521 31.9085Z"
                            />
                        </clipPath>
                    </defs>
                    <image
                        href="{{ $image ?: asset('images/guys-looking-at-notebook.png') }}"
                        x="809.316"
                        y="1.84766"
                        width="667.717"
                        height="445.199"
                        preserveAspectRatio="xMidYMid slice"
                        clip-path="url(#newsletter-image-clip)"
                    />
                </svg>
            </div>
        </div>
    </div>
</section>
