<x-layout.landing>
    <x-slot:metatags>
        <title>{{ $page?->meta_title ?? ($page?->title ?? config('app.name')) }}</title>
        <link rel="canonical" href="{{ $page?->url() ?? '' }}" />
        <meta name="description" content="{{ $page?->meta_description ?? '' }}" />
        <meta name="keywords" content="{{ $page?->meta_keywords ?? '' }}" />
        <meta property="og:title" content="{{ $page?->opengraph_title ?? '' }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page?->url() ?? '' }}" />
        <meta property="og:description" content="{{ $page?->opengraph_description }}" />
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}" />
        <meta property="og:image:alt" content="{{ $page?->opengraph_picture_alt }}" />
    </x-slot:metatags>

    <section class="section-first flex min-h-[calc(100dvh-var(--header-height))] flex-col items-center gap-4">
        <div class="container flex flex-col items-center gap-8" data-reveal-stagger="140">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-avatar-group />
                        <x-fr-text class="font-semibold!" size="sm">
                            Mais de 9.000 investidores já fazem parte
                        </x-fr-text>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    Você sabe quanto ganha. <mark>Mas você sabe quanto perde?</mark>
                </x-slot:title>
                <x-slot:description>
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A <mark>Firece</mark> mostra
                    exatamente o que está acontecendo
                </x-slot:description>
            </x-fr-headline>

            <div class="flex w-full flex-col items-center gap-4" data-reveal="up">
                <x-fr-button> Descobrir meu plano </x-fr-button>
                <x-logo-badge class="justify-center"> Sem custo, sem compromisso, uma conversa rápida </x-logo-badge>
            </div>
        </div>

        <div class="relative mt-auto w-full" data-reveal="scale">
            <div
                class="from-brand-primary to-brand-secondary absolute inset-0 top-10 -z-1 rounded-t-lg bg-linear-to-b"
            ></div>
            <img src="{{ asset('images/image-1.webp') }}" alt="Imagem de homem" class="w-full" />
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col items-center gap-8 text-center">
            <x-fr-heading size="lg" data-reveal="up"> Reconhece alguma dessas histórias? </x-fr-heading>
            <div class="flex flex-col items-start gap-3 text-left" data-reveal-stagger="100">
                <div class="flex flex-col" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary mb-4 size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Tenho dívidas que parecem não ter fim. Pago o mínimo e o saldo não cai
                    </x-fr-text>
                </div>

                <hr class="border-border-base w-full" />

                <div class="flex flex-col" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary mb-4 size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Trabalho muito, ganho bem mas no fim do mês não sobra nada. E eu não sei por quê.
                    </x-fr-text>
                </div>

                <hr class="border-border-base w-full" />

                <div class="flex flex-col" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary mb-4 size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Já poupo alguma coisa, mas sinto que meu dinheiro poderia estar rendendo muito mais.
                    </x-fr-text>
                </div>

                <hr class="border-border-base w-full" />
            </div>
            <x-logo-badge class="justify-center"> Não é falta de disciplina. É falta de um plano </x-logo-badge>
        </div>
    </section>

    <section class="section dark bg-elevation-surface px-4 py-20">
        <div class="container flex flex-col gap-8" data-reveal-stagger="120">
            <img src="{{ asset('images/Image.webp') }}" alt="Imagem dos caras" class="h-50 w-auto" data-reveal="left" />

            <x-fr-headline align="left" data-reveal="up">
                <x-slot:title>
                    Por que a <mark>Firece</mark>?
                </x-slot:title>
                <x-slot:description>
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A Firece mostra exatamente o que
                    está acontecendo
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4 p-4" data-reveal="up">
                <x-icon-box icon="heroicon-c-user" />
                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Mais de <mark>2 mil clientes</mark> atendidos
                    </x-slot:title>
                    <x-slot:description>
                        Em média, brasileiros perdem 23% da renda sem saber para onde foi.
                    </x-slot:description>
                </x-fr-headline>
            </div>

            <hr class="border-border-base" />

            <div class="flex flex-col gap-4 p-4" data-reveal="up">
                <x-icon-box icon="heroicon-c-user" />
                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        <mark>+10 anos</mark> de experiência de mercado
                    </x-slot:title>
                    <x-slot:description>
                        Em média, brasileiros perdem 23% da renda sem saber para onde foi.
                    </x-slot:description>
                </x-fr-headline>
            </div>

            <hr class="border-border-base" />

            <div class="flex flex-col gap-4 p-4" data-reveal="up">
                <x-icon-box icon="heroicon-c-user" />
                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        <mark>R$4M+</mark> em dívidas eliminadas
                    </x-slot:title>
                    <x-slot:description>
                        Em média, brasileiros perdem 23% da renda sem saber para onde foi.
                    </x-slot:description>
                </x-fr-headline>
            </div>

            <hr class="border-border-base" />

            <x-testimonial
                data-reveal="up"
                name="Felipe Rosa"
                role="Design"
                plan="Plano Gold"
                avatar="https://i.pravatar.cc/80?img=12"
                metric="0% → 20% da renda investida"
            >
                Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o
                <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho reserva de
                emergência.
            </x-testimonial>
        </div>
    </section>

    <section class="section flex flex-col items-center gap-8">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Três encontros, uma <mark>vida financeira</mark> diferente
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark> e só para ela.
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div
            class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
            data-reveal-stagger="140"
        >
            <x-numbered-step class="p-8" data-reveal="up" number="01" title="Análise">
                Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                        Não é falta de disciplina. É falta de um plano
                    </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step class="p-8" data-reveal="up" number="01" title="Análise">
                Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                        Não é falta de disciplina. É falta de um plano
                    </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step class="p-8" data-reveal="up" number="01" title="Análise">
                Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.

                <x-slot:footer>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                        Não é falta de disciplina. É falta de um plano
                    </x-fr-text>
                </x-slot:footer>
            </x-numbered-step>
        </div>

        <div class="container flex flex-col items-center gap-8">
            <x-fr-button> Descobrir meu plano </x-fr-button>

            <x-logo-badge> Simples assim. Sem enrolação. </x-logo-badge>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Qual é o seu momento?
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark> e só para ela.
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
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Qual é o seu momento?
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark> e só para ela.
                </x-slot:description>
            </x-fr-headline>

            <div class="md:grid-cols-auto grid grid-cols-1 gap-8" data-reveal-stagger="140">
                <x-plan-card data-reveal="up" tagline="“Meu dinheiro some sem explicação”">
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

                <x-plan-card data-reveal="up" variant="highlighted" tagline="“Meu dinheiro some sem explicação”">
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

                <x-plan-card data-reveal="up" tagline="“Meu dinheiro some sem explicação”">
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

            <x-logo-badge class="flex-col justify-center text-center">
                Não tem certeza qual é o seu? A gente descobre juntos na primeira conversa
            </x-logo-badge>
        </div>
    </section>

    <section class="section bg-brand-primary py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-avatar-group />
                        <x-fr-text class="text-text-light! font-semibold!" size="sm">
                            Mais de 9.000 investidores já fazem parte
                        </x-fr-text>
                    </div>
                </x-slot:header>
                <x-slot:title class="text-text-light!">
                    Venha fazer parte da Firece
                </x-slot:title>
                <x-slot:description class="text-text-light!">
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A Firece mostra exatamente o que
                    está acontecendo
                </x-slot:description>
            </x-fr-headline>

            <x-fr-button variant="white"> Descobrir meu plano </x-fr-button>

            <x-logo-badge class="text-text-light!"> Sem custo, sem compromisso, uma conversa rápida </x-logo-badge>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-avatar-group />
                        <x-fr-text class="text-text-high! font-semibold!" size="sm">
                            Mais de 50 investidores já fazem parte
                        </x-fr-text>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    Você sabe quanto ganha. Mas você sabe quanto perde?
                </x-slot:title>
                <x-slot:description>
                    Acreditamos que educação financeira é poder. E, por aqui, formamos um time que une propósito,
                    inovação, e alta performance para levar esse poder a mais pessoas
                </x-slot:description>
            </x-fr-headline>
        </div>
    </section>
</x-layout.landing>
