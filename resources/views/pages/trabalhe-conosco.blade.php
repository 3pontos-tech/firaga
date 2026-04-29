<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section class="section-first">
        <div class="container flex flex-col items-center gap-8" data-reveal-stagger="140">
            <x-fr-headline size="2xl" data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-logo-badge class="justify-center"> Nossos serviços </x-logo-badge>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    <mark>Transforme</mark> vidas Começando pela sua
                </x-slot:title>
                <x-slot:description>
                    O modelo de atendimento premium da Firece para quem exige personalização, estratégia avançada e
                    confidencialidade em cada decisão.
                </x-slot:description>

                <x-slot:actions class="my-4">
                    <x-fr-button> Quero fazer parte </x-fr-button>
                </x-slot:actions>

                <x-slot:footer>
                    <div class="mt-4 flex w-full items-center justify-between">
                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading class="text-brand-primary!"> +10 anos </x-fr-heading>
                            <x-fr-text size="xs"> DE MERCADO </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading class="text-brand-primary!"> 300% </x-fr-heading>
                            <x-fr-text size="xs"> CRES. ANUAL </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading class="text-brand-primary!"> +2 mil </x-fr-heading>
                            <x-fr-text size="xs"> CLIENTES </x-fr-text>
                        </div>
                    </div>
                </x-slot:footer>
            </x-fr-headline>
        </div>
    </section>

    <section class="section flex flex-col items-center gap-8 pt-7">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    <mark>Sem experiência?</mark> Esse é o ponto
                </x-slot:title>
                <x-slot:description>
                    O programa trainee da Firece foi criado para quem está começando. Você aprende a metodologia, atende
                    clientes reais e constrói sua carreira com suporte de quem já fez o caminho.
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div
            class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
            data-reveal-stagger="140"
        >
            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Imersão na metodologia
                    </x-slot:title>
                    <x-slot:description>
                        Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o
                        início
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Semanas 1–2 </x-fr-text>
            </div>

            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">02</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Primeiros atendimentos com mentoria
                    </x-slot:title>
                    <x-slot:description>
                        Você atende com um consultor sênior ao lado. Aprende na prática, com suporte real.
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary!"> Mês 1–2 </x-fr-text>
            </div>

            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">03</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Carteira própria e autonomia
                    </x-slot:title>
                    <x-slot:description>
                        Com a base construída, você assume sua carteira e cresce no ritmo que seu resultado permite
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary!"> A partir do mês 3 </x-fr-text>
            </div>
        </div>

        <div class="container flex flex-col items-center gap-8">
            <x-fr-button> Descobrir meu plano </x-fr-button>
        </div>
    </section>
</x-layout.landing>
