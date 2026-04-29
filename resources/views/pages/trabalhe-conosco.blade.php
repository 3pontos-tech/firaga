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

    <section class="section">
        <div class="bg-brand-primary relative my-28 h-56 w-full overflow-hidden">
            <x-logo
                class="text-brand-secondary absolute top-0 left-0 z-0 h-75! w-auto -translate-x-1/4 -translate-y-1/6"
            />
            <img
                src="{{ asset('images/image-1.webp') }}"
                alt="Imagem de homem"
                class="absolute right-0 bottom-0 z-0 h-full w-auto object-cover"
            />
            <div
                class="from-brand-primary/32 to-brand-secondary/24 pointer-events-none absolute inset-0 z-10 bg-linear-to-t"
            ></div>
        </div>

        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" data-reveal="up">
                <x-slot:title>
                    Mais <mark>propósito</mark> do que currículo
                </x-slot:title>
                <x-slot:description>
                    Para qualquer vaga, o que mais importa é para quê você quer estar aqui. Experiência se constrói
                    postura e propósito são suas.
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4" data-reveal="up">
                <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                <div class="flex flex-col gap-8" data-reveal-stagger="120">
                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Orientado a resultado com propósito genuíno </x-fr-heading>
                            <x-fr-text size="sm"> Você quer impactar a vida das pessoas, não só bater meta. </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Comunicação clara e escuta ativa </x-fr-heading>
                            <x-fr-text size="sm">
                                Sabe ouvir, criar confiança e explicar o complexo de forma simples
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Disciplina e consistência </x-fr-heading>
                            <x-fr-text size="sm">
                                A carreira tem altos e baixos. Buscamos quem se mantém firme
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Alinhamento com os valores da Firece </x-fr-heading>
                            <x-fr-text size="sm">
                                Transparência, impacto real, sem empurrar produto. É assim que trabalhamos
                            </x-fr-text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
