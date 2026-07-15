<div class="border-border-base bg-elevation-01dp mt-20 border-t py-14 md:py-20">
    <div class="container flex flex-col gap-7">
        <div class="flex flex-col gap-10 md:flex-row md:items-start md:justify-between md:gap-12">
            <div class="flex flex-col gap-6 md:max-w-xs">
                <x-logo-with-text
                    size="xl"
                    :clickable="false"
                    class="[&_.st0]:text-brand-primary [&_.st1]:text-text-high"
                />

                <div class="flex flex-col gap-1">
                    <x-fr-text size="md" class="text-text-high! font-semibold!">Nosso Endereço</x-fr-text>
                    <x-fr-text size="md">Dr. Cardoso de Mello, 1666, Cj, 92 Vila Olímpia, São Paulo</x-fr-text>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-x-8 gap-y-8 md:flex-1 md:grid-cols-[1fr_1fr_1fr_3fr] md:gap-12">
                <div class="flex flex-col gap-4">
                    <h3 class="text-text-high text-xxs font-bold">Links e Serviços</h3>
                    <a
                        href="https://flaredigital.com.br/"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs transition-colors"
                        >Flare</a
                    >
                    <a
                        href="https://flammabeneficios.com/"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs transition-colors"
                        >Flamma</a
                    >
                    <a
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs transition-colors"
                        >Atendimento Premium</a
                    >
                    <a
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+ser+avisado+sobre+a+EducaFire&type=phone_number&app_absent=0"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs transition-colors"
                        >Educa Fire</a
                    >
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-text-high text-xxs font-bold">Redes Sociais</h3>
                    <a
                        href="https://www.linkedin.com/company/firece"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs flex items-center gap-2 transition-colors"
                    >
                        <x-fab-linkedin class="size-4 shrink-0" />
                        LinkedIn
                    </a>
                    <a
                        href="https://www.instagram.com/firece.oficial/"
                        target="_blank"
                        class="text-text-medium hover:text-text-high text-xxs flex items-center gap-2 transition-colors"
                    >
                        <x-fab-instagram class="size-4 shrink-0" />
                        Instagram
                    </a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="text-text-high text-xxs font-bold">Contato</h3>
                    <a
                        href="mailto:contato@firece.com.br"
                        class="text-text-medium hover:text-text-high text-xxs transition-colors"
                        >contato@firece.com.br</a
                    >
                    <a
                        href="tel:+5511987201303"
                        class="text-text-medium hover:text-text-high text-xxs flex items-center gap-2 transition-colors"
                    >
                        <img src="{{ asset('images/brasil-flag.webp') }}" alt="Brasil" class="h-4 w-auto shrink-0" />
                        (11) 98720-1303
                    </a>
                </div>

                <div class="col-span-2 flex flex-col gap-4 md:col-span-1">
                    <h3 class="text-text-high text-xxs font-bold">Nossa Newsletter</h3>
                    <x-fr-text size="sm">
                        Envie nos o seu email e receba as melhores notícias e textos sobre o que acontece no mercado
                        financeiro
                    </x-fr-text>

                    {{-- Visual only: no back-end handler wired yet --}}
                    <form class="flex flex-col gap-3 lg:flex-row" onsubmit="return false;">
                        @csrf
                        <input
                            type="email"
                            name="email"
                            placeholder="Digite seu email"
                            class="border-border-base focus:border-brand-primary placeholder:text-text-medium text-xxs w-full rounded-sm border px-4 py-3 focus:outline-none lg:flex-1"
                        />
                        <x-fr-button type="submit" class="md:w-full! lg:w-auto!">Inscrever-se</x-fr-button>
                    </form>
                </div>
            </div>
        </div>

        <hr class="border-border-base" />

        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-text-high font-bold">&copy; {{ now()->year }} {{ config('app.name') }}</p>
            <p class="text-text-high font-bold">Todos os direitos reservados</p>
        </div>
    </div>
</div>
