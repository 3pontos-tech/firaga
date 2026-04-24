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
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Você sabe quanto ganha. <mark>Mas você sabe quanto perde?</mark>
                </x-slot:title>
                <x-slot:description>
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A <mark>Firece</mark> mostra
                    exatamente o que está acontecendo
                </x-slot:description>
            </x-fr-headline>

            <div class="flex w-full flex-col items-center gap-4">
                <x-fr-button> Descobrir meu plano </x-fr-button>
                <x-logo-badge class="justify-center"> Sem custo, sem compromisso, uma conversa rápida </x-logo-badge>
            </div>
        </div>

        <div class="relative mt-auto w-full">
            <div
                class="from-brand-primary to-brand-secondary absolute inset-0 top-10 -z-1 rounded-t-lg bg-linear-to-b"
            ></div>
            <img src="{{ asset('images/image-1.webp') }}" alt="Imagem de homem" class="w-full" />
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col items-center gap-8 text-center">
            <x-fr-heading size="lg"> Reconhece alguma dessas histórias? </x-fr-heading>
            <div class="flex flex-col items-start gap-3 text-left">
                <div class="flex flex-col">
                    <x-fas-quote-left class="text-brand-primary mb-4 size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Tenho dívidas que parecem não ter fim. Pago o mínimo e o saldo não cai
                    </x-fr-text>
                </div>

                <hr class="border-border-base w-full" />

                <div class="flex flex-col">
                    <x-fas-quote-left class="text-brand-primary mb-4 size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Trabalho muito, ganho bem mas no fim do mês não sobra nada. E eu não sei por quê.
                    </x-fr-text>
                </div>

                <hr class="border-border-base w-full" />

                <div class="flex flex-col">
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
        <div class="container flex flex-col gap-8">
            <img src="{{ asset('images/Image.webp') }}" alt="Imagem dos caras" class="h-50 w-auto" />

            <x-fr-headline align="left">
                <x-slot:title>
                    Por que a <mark>Firece</mark>?
                </x-slot:title>
                <x-slot:description>
                    Em média, brasileiros perdem 23% da renda sem saber para onde foi. A Firece mostra exatamente o que
                    está acontecendo
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4 p-4">
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

            <div class="flex flex-col gap-4 p-4">
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

            <div class="flex flex-col gap-4 p-4">
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
            <x-fr-headline>
                <x-slot:title>
                    Três encontros, uma <mark>vida financeira</mark> diferente
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark> e só para ela.
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y">
            <div class="flex flex-col gap-3 p-8">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Análise
                    </x-slot:title>
                    <x-slot:description>
                        Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary!">
                    Não é falta de disciplina. É falta de um plano
                </x-fr-text>
            </div>

            <div class="flex flex-col gap-3 p-8">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Análise
                    </x-slot:title>
                    <x-slot:description>
                        Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary!">
                    Não é falta de disciplina. É falta de um plano
                </x-fr-text>
            </div>

            <div class="flex flex-col gap-3 p-8">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Análise
                    </x-slot:title>
                    <x-slot:description>
                        Entendemos onde você está de verdade. Renda, dívidas, hábitos, objetivos. Sem julgamento.
                    </x-slot:description>
                </x-fr-headline>

                <x-fr-text size="sm" class="text-brand-primary!">
                    Não é falta de disciplina. É falta de um plano
                </x-fr-text>
            </div>
        </div>

        <div class="container flex flex-col items-center gap-8">
            <x-fr-button> Descobrir meu plano </x-fr-button>

            <x-logo-badge> Simples assim. Sem enrolação. </x-logo-badge>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Qual é o seu momento?
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark> e só para ela.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8">
                <x-testimonial
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
</x-layout.landing>
