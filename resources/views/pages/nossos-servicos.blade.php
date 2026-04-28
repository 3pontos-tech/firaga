<x-layout.landing headerTheme="dark" splashFrom="#09090a" splashTo="#09090a" splashLogoClass="text-brand-primary">
    <section class="dark bg-elevation-surface pt-(--section-first-gap) pb-(--section-gap)">
        <div class="container flex flex-col gap-8">
            <x-fr-headline size="2xl">
                <x-slot:header>
                    <x-logo-badge> Nossos serviços</x-logo-badge>
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
                    Educação financeira pessoal como
                    <mark>benefício corporativo</mark>
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

            <x-fr-button variant="white"> Descobrir meu plano</x-fr-button>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-16">
            <div class="flex flex-col gap-8">
                <x-fr-headline align="left">
                    <x-slot:header>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Planejamento financeiro
                        </x-fr-text>
                    </x-slot:header>
                    <x-slot:title>
                        O ponto de partida de
                        <mark>2.347 histórias</mark>
                    </x-slot:title>
                    <x-slot:description>
                        O Planejamento Financeiro é onde tudo começa. Três encontros com um consultor dedicado que vai
                        entender sua realidade dívidas, hábitos, objetivos e construir uma estratégia feita para você.
                        Não para um perfil genérico. Para você.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-4" data-reveal="up">
                    <x-fr-heading size="xs"> O que buscamos</x-fr-heading>

                    <div class="flex flex-col gap-8" data-reveal-stagger="120">
                        <div class="flex items-center gap-3">
                            <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                            <div class="flex flex-col gap-2">
                                <x-fr-text size="sm">
                                    Você sabe, pela primeira vez, para onde vai cada real da sua renda
                                </x-fr-text>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                            <div class="flex flex-col gap-2">
                                <x-fr-text size="sm">
                                    Tem um plano real para os próximos 12 meses com metas que cabem na sua realidade
                                </x-fr-text>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                            <div class="flex flex-col gap-2">
                                <x-fr-text size="sm">
                                    Começa a construir reserva de emergência sem precisar ganhar mais
                                </x-fr-text>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                            <div class="flex flex-col gap-2">
                                <x-fr-text size="sm">
                                    Toma decisões financeiras com clareza, não com ansiedade
                                </x-fr-text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-8" x-data="{ selected: 'gold' }">
                <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Escolha seu momento</x-fr-text>

                <div class="flex w-full">
                    <button
                        class="w-full border-b pb-2 transition-colors"
                        :class="selected === 'gold' ? 'border-brand-primary' : 'border-border-base'"
                        @click="selected = 'gold'"
                    >
                        <x-fr-text
                            x-bind:class="selected === 'gold' ? 'text-brand-primary! font-semibold!' : 'font-semibold!'"
                        >
                            Gold
                        </x-fr-text>
                    </button>
                    <button
                        class="w-full border-b pb-2 transition-colors"
                        :class="selected === 'platinum' ? 'border-brand-primary' : 'border-border-base'"
                        @click="selected = 'platinum'"
                    >
                        <x-fr-text
                            x-bind:class="
                                selected === 'platinum' ? 'text-brand-primary! font-semibold!' : 'font-semibold!'
                            "
                        >
                            Platinum
                        </x-fr-text>
                    </button>
                    <button
                        class="w-full border-b pb-2 transition-colors"
                        :class="selected === 'black' ? 'border-brand-primary' : 'border-border-base'"
                        @click="selected = 'black'"
                    >
                        <x-fr-text
                            x-bind:class="
                                selected === 'black' ? 'text-brand-primary! font-semibold!' : 'font-semibold!'
                            "
                        >
                            Black
                        </x-fr-text>
                    </button>
                </div>

                <div x-show="selected === 'gold'" class="w-full">
                    <x-plan-card :tagline="'Meu dinheiro some sem explicação'">
                        <x-fr-heading>Perfil Gold</x-fr-heading>
                        <x-fr-text>
                            Para quem quer organizar as finanças do zero e finalmente respirar no fim do mês
                        </x-fr-text>

                        <hr class="border-border-base" />

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured>Organização Anual</x-plan-feature>
                            <x-plan-feature>Mapa financeiro</x-plan-feature>
                            <x-plan-feature>Construção de Reserva</x-plan-feature>
                            <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                            <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                        </ul>

                        <x-fr-button variant="outline">Esse sou eu</x-fr-button>
                    </x-plan-card>
                </div>

                <div x-show="selected === 'platinum'" class="w-full" style="display: none">
                    <x-plan-card variant="highlighted" :tagline="'Meu dinheiro some sem explicação'">
                        <x-fr-heading>Perfil Platinum</x-fr-heading>
                        <x-fr-text>
                            Para quem quer organizar as finanças do zero e finalmente respirar no fim do mês
                        </x-fr-text>

                        <hr class="border-border-base" />

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured>Organização Anual</x-plan-feature>
                            <x-plan-feature>Mapa financeiro</x-plan-feature>
                            <x-plan-feature>Construção de Reserva</x-plan-feature>
                            <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                            <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                        </ul>

                        <x-fr-button>Esse sou eu</x-fr-button>
                    </x-plan-card>
                </div>

                <div x-show="selected === 'black'" class="w-full" style="display: none">
                    <x-plan-card :tagline="'Meu dinheiro some sem explicação'">
                        <x-fr-heading>Perfil Black</x-fr-heading>
                        <x-fr-text>
                            Para quem quer organizar as finanças do zero e finalmente respirar no fim do mês
                        </x-fr-text>

                        <hr class="border-border-base" />

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured>Organização Anual</x-plan-feature>
                            <x-plan-feature>Mapa financeiro</x-plan-feature>
                            <x-plan-feature>Construção de Reserva</x-plan-feature>
                            <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                            <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                        </ul>

                        <x-fr-button variant="outline">Esse sou eu</x-fr-button>
                    </x-plan-card>
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
