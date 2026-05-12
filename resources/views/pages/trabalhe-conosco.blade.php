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
            <x-numbered-step
                class="p-8"
                data-reveal="up"
                number="01"
                title="Imersão na metodologia"
                :show-chevron="false"
            >
                Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o início

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Semanas 1–2 </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step
                class="p-8"
                data-reveal="up"
                number="02"
                title="Primeiros atendimentos com mentoria"
                :show-chevron="false"
            >
                Você atende com um consultor sênior ao lado. Aprende na prática, com suporte real.

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary!"> Mês 1–2 </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step
                class="p-8"
                data-reveal="up"
                number="03"
                title="Carteira própria e autonomia"
                :show-chevron="false"
            >
                Com a base construída, você assume sua carteira e cresce no ritmo que seu resultado permite

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary!"> A partir do mês 3 </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>
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
                    <x-arrow-block title="Orientado a resultado com propósito genuíno">
                        Você quer impactar a vida das pessoas, não só bater meta.
                    </x-arrow-block>

                    <x-arrow-block title="Comunicação clara e escuta ativa">
                        Sabe ouvir, criar confiança e explicar o complexo de forma simples
                    </x-arrow-block>

                    <x-arrow-block title="Disciplina e consistência">
                        A carreira tem altos e baixos. Buscamos quem se mantém firme
                    </x-arrow-block>

                    <x-arrow-block title="Alinhamento com os valores da Firece">
                        Transparência, impacto real, sem empurrar produto. É assim que trabalhamos
                    </x-arrow-block>
                </div>
            </div>
        </div>
    </section>

    <section class="section dark bg-elevation-surface py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" data-reveal="up">
                <x-slot:title>
                    Eles começaram do mesmo lugar
                </x-slot:title>
                <x-slot:description>
                    Para qualquer vaga, o que mais importa é para quê você quer estar aqui. Experiência se constrói
                    postura e propósito são suas.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8" data-reveal-stagger="140">
                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Felipe Rosa"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://i.pravatar.cc/80?img=12"
                    metric="0% → 20% da renda investida"
                >
                    Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o
                    <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho
                    reserva de emergência.
                </x-testimonial>

                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Felipe Rosa"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://i.pravatar.cc/80?img=12"
                    metric="0% → 20% da renda investida"
                >
                    Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o
                    <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho
                    reserva de emergência.
                </x-testimonial>

                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Felipe Rosa"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://i.pravatar.cc/80?img=12"
                    metric="0% → 20% da renda investida"
                >
                    Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o
                    <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho
                    reserva de emergência.
                </x-testimonial>
            </div>
        </div>
    </section>

    <x-lead-form
        :select-options="
            [
           'consultor-financeiro' => 'Consultor Financeiro',
           'trainee' => 'Trainee',
           'marketing' => 'Marketing',
           'tecnologia' => 'Tecnologia',
           'operacoes' => 'Operações',
     ]
        "
        submit-label="Enviar currículo"
    />
</x-layout.landing>
