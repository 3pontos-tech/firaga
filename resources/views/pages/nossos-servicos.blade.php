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

    <section class="section from-flamma-primary to-flamma-secondary bg-linear-to-r py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline size="2xl" align="left">
                <x-slot:title class="text-text-light!">
                    Como funciona?
                </x-slot:title>
                <x-slot:description class="text-text-light!">
                    A Flamma surge como um benefício corporativo inovador, desenhado para empoderar seus colaboradores
                    com educação financeira de alta qualidade.
                </x-slot:description>
            </x-fr-headline>

            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
                data-reveal-stagger="140"
            >
                <div class="flex flex-col gap-3 py-8" data-reveal="up">
                    <div class="flex items-center justify-between">
                        <p class="text-text-light font-display text-xl font-medium">01</p>
                        <x-heroicon-c-chevron-right class="text-text-light size-7" />
                    </div>

                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Contratação
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            A empresa contrata pacotes de horas mensais, semestrais ou anuais disponíveis para todos os
                            colaboradores.
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 py-8" data-reveal="up">
                    <div class="flex items-center justify-between">
                        <p class="text-text-light font-display text-xl font-medium">02</p>
                        <x-heroicon-c-chevron-right class="text-text-light size-7" />
                    </div>

                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Agendamento
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Cada colaborador agenda seu atendimento diretamente pela plataforma Flamma, quando quiser.
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 py-8" data-reveal="up">
                    <div class="flex items-center justify-between">
                        <p class="text-text-light font-display text-xl font-medium">03</p>
                        <x-heroicon-c-chevron-right class="text-text-light size-7" />
                    </div>

                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Atendimento
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Sessões individuais de 60 minutos com consultores especializados, online ou presencial.
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 py-8" data-reveal="up">
                    <div class="flex items-center justify-between">
                        <p class="text-text-light font-display text-xl font-medium">04</p>
                        <x-heroicon-c-chevron-right class="text-text-light size-7" />
                    </div>

                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Relatórios de impacto
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            O RH acompanha a adesão e os resultados com relatórios consolidados de uso e evolução.
                        </x-slot:description>
                    </x-fr-headline>
                </div>
            </div>

            <x-fr-button variant="white"> Descobrir meu plano </x-fr-button>
        </div>
    </section>
</x-layout.landing>
