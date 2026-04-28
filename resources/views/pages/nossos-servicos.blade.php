<x-layout.landing headerTheme="dark" splashFrom="#09090a" splashTo="#09090a" splashLogoClass="text-brand-primary">
    <section class="dark bg-elevation-surface pt-(--section-first-gap) pb-(--section-gap)">
        <div class="container flex flex-col gap-8">
            <x-fr-headline size="2xl">
                <x-slot:header>
                    <x-logo-badge> Nossos serviços </x-logo-badge>
                </x-slot:header>
                <x-slot:title>
                    Qual é o seu próximo capítulo?
                </x-slot:title>
                <x-slot:description>
                    Cada pessoa chega com uma situação diferente. Cada serviço foi construído para uma fase específica
                    da jornada financeira
                </x-slot:description>
            </x-fr-headline>

            <div
                class="divide-border-base border-border-base grid grid-cols-1 gap-3 divide-y border-y"
                data-reveal-stagger="140"
            >
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Bem-estar financeiro para equipes
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero organizar minha vida financeira
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Sou dev, PJ ou recebo em dólar
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Tenho patrimônio e quero proteger
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero ensinar finanças e ganhar com isso
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
                <div class="flex items-center justify-between py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero ser parceiro da Firece
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-8">
            <div class="mx-auto mb-2.5">
                <img src="{{ asset('images/logos/flamma-logo.svg') }}" alt="Logo Flamma" class="h-9 w-auto" />
            </div>
            <x-fr-headline>
                <x-slot:title>
                    Educação financeira pessoal como <mark>benefício corporativo</mark>
                </x-slot:title>
                <x-slot:description>
                    Com pacotes flexíveis, sua empresa garante orientação individualizada para os colaboradores,
                    reduzindo o estresse financeiro, aumentando a produtividade e promovendo segurança e bem-estar no
                    ambiente corporativo.
                </x-slot:description>
            </x-fr-headline>
        </div>
    </section>
</x-layout.landing>
