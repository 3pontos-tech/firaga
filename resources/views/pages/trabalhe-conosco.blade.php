<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section id="hero" class="flex flex-col items-center gap-4 pt-8 pb-8 md:pt-20">
        <div
            class="container flex flex-col items-center gap-8 md:flex-row md:items-center md:justify-between md:gap-16"
            data-reveal-stagger="140"
        >
            <div class="flex w-full flex-col items-center gap-8 md:basis-1/2 md:items-start">
                <x-fr-headline size="2xl" align="left-desk" data-reveal="up">
                    <x-slot:header>
                        <x-logo-badge class="md:hidden"> Trabalhe conosco </x-logo-badge>
                    </x-slot:header>

                    <x-slot:title>
                        <mark>Transforme</mark> vidas começando pela sua
                    </x-slot:title>
                    <x-slot:description>
                        Se você tem experiência na área comercial, gosta do mercado financeiro e quer receber comissões
                        sem limite, junte-se ao time de Planejadores Financeiros da Fire|ce.
                    </x-slot:description>

                    <x-slot:footer>
                        <div class="mt-4 flex w-full flex-col gap-4">
                            <hr class="border-border-base w-full" />
                            <x-stat-grid
                                highlight
                                :stats="
                                    [
       ['value' => '+10 anos', 'label' => 'DE MERCADO'],
       ['value' => '300%', 'label' => 'CRES. ANUAL'],
       ['value' => '+2 mil', 'label' => 'CLIENTES'],
    ]
                                "
                            />
                        </div>
                    </x-slot:footer>
                </x-fr-headline>

                <div class="hidden w-full md:block" data-reveal="up">
                    <x-fr-button
                        rel="noopener noreferrer"
                        href="https://forms.monday.com/forms/70a696032cb3a829f81b7735b8b6ab9f?r=use1"
                        target="_blank"
                    >
                        Enviar currículo
                    </x-fr-button>
                </div>
            </div>

            <div class="relative hidden w-full md:block md:min-h-130 md:basis-2/5" data-reveal="scale">
                <img
                    src="{{ asset('images/carreira-imagem_1.webp') }}"
                    alt="Consultora Fire|ce atendendo cliente"
                    class="absolute bottom-0 h-full w-full rounded-xl object-contain"
                />
            </div>
        </div>
    </section>

    <section id="comece" class="section flex flex-col items-center gap-8">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    <mark>Comece sua carreira</mark> no mercado financeiro
                </x-slot:title>
                <x-slot:description class="mx-auto max-w-[900px]!">
                    Se você sente que pode mais, mas ainda não encontrou o ambiente certo para evoluir, o Programa de
                    Trainee da Fire|ce 2026 pode ser o próximo passo estratégico da sua trajetória.<br />
                    Uma formação estruturada para quem quer construir carreira em consultoria financeira mesmo vindo de
                    outra área.
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div class="w-full md:container md:mx-auto">
            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y md:grid-cols-3 md:gap-8 md:divide-y-0 md:border-y-0"
                data-reveal-stagger="140"
            >
                <x-numbered-step
                    class="md:border-border-base bg-elevation-01dp gap-3! p-8 md:border"
                    data-reveal="up"
                    number="01"
                    title="Imersão na metodologia."
                >
                    Você aprende o jeito Fire|ce de diagnosticar, planejar e acompanhar com casos reais desde o início.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Semanas 1–2 </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="md:border-border-base bg-elevation-01dp gap-3! p-8 md:border"
                    data-reveal="up"
                    number="02"
                    title="Primeiros atendimentos com mentoria."
                >
                    Você atende com um consultor sênior ao lado. Aprende na prática, com suporte real.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Mês 1–2 </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="md:border-border-base bg-elevation-01dp gap-3! p-8 md:border"
                    data-reveal="up"
                    number="03"
                    title="Carteira própria e autonomia."
                >
                    Com a base construída, você assume sua carteira e cresce no ritmo que seu resultado permite.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> A partir do mês 3 </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>
            </div>
        </div>
    </section>

    <section id="proposito" class="section">
        <div class="container flex flex-col gap-8 md:flex-row md:items-center md:justify-between md:gap-16">
            <div class="flex flex-col gap-8 md:basis-1/2">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:title>
                        Mais <mark>propósito</mark> do que currículo.
                    </x-slot:title>
                    <x-slot:description>
                        Para qualquer vaga, o que mais importa é <strong>para quê você quer estar aqui</strong>.
                        Experiência se constrói postura e propósito são suas.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-8" data-reveal="up">
                    <x-fr-heading size="xs" class="font-medium!"> O que buscamos... </x-fr-heading>

                    <div class="flex flex-col gap-8" data-reveal-stagger="120">
                        <x-arrow-block title="Orientado a resultado com propósito genuíno">
                            Você quer impactar a vida das pessoas, não só bater meta.
                        </x-arrow-block>

                        <x-arrow-block title="Comunicação clara e escuta ativa.">
                            Sabe ouvir, criar confiança e explicar o complexo de forma simples.
                        </x-arrow-block>

                        <x-arrow-block title="Disciplina e consistência.">
                            A carreira tem altos e baixos. Buscamos quem se mantém firme.
                        </x-arrow-block>

                        <x-arrow-block title="Alinhamento com os valores da Fire|ce.">
                            Transparência, impacto real, sem empurrar produto. É assim que trabalhamos.
                        </x-arrow-block>
                    </div>
                </div>
            </div>

            <div class="relative hidden w-full md:block md:min-h-160 md:basis-2/5" data-reveal="scale">
                <img
                    src="{{ asset('images/carreira-imagem_2.webp') }}"
                    alt="Time Fire|ce"
                    class="absolute inset-0 h-full w-full rounded-xl object-contain object-bottom"
                />
            </div>
        </div>
    </section>

    <x-cta-banner
        id="cta-banner"
        class="from-brand-primary to-brand-secondary bg-linear-to-b"
        cta-label="Quero participar do programa"
        cta-href="https://forms.monday.com/forms/70a696032cb3a829f81b7735b8b6ab9f?r=use1"
        footer="O crescimento profissional não acontece por acaso. Ele é construído com método, prática e acompanhamento."
    >
        <x-slot:proof>
            <x-social-proof variant="dark">Desenvolvimento baseado em experiência real</x-social-proof>
        </x-slot:proof>

        <x-slot:title>
            Sua carreira pode começar antes da experiência.
        </x-slot:title>

        <x-slot:description>
            O programa trainee da Fire|ce foi criado para quem quer aprender na prática, desenvolver habilidades
            consultivas e construir uma trajetória sólida no mercado financeiro com acompanhamento próximo desde o
            primeiro dia.
        </x-slot:description>
    </x-cta-banner>
</x-layout.landing>
