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

    <section
        id="hero"
        class="section-first flex min-h-[calc(100dvh-var(--header-height))] scroll-mt-(--header-height) flex-col items-center gap-4 md:mt-20! md:min-h-0"
    >
        <div
            class="container flex flex-col items-center md:flex-1 md:flex-row md:items-center md:justify-between"
            data-reveal-stagger="140"
        >
            {{-- z-10 mantém o texto acima do recorte orgânico da mídia, que avança 4.24% sobre a coluna --}}
            <div class="relative z-10 flex w-full flex-col items-center gap-8 md:basis-[48.8%] md:items-start">
                <x-fr-headline size="2xl" align="left-desk" data-reveal="up">
                    <x-slot:header>
                        <x-social-proof align="left-desk" size="sm"
                            >Mais de 2.000 pessoas já fazem parte.</x-social-proof
                        >
                    </x-slot:header>

                    <x-slot:title class="sm:text-2xl! md:text-5xl! lg:text-7xl!">
                        Sua próxima conquista começa com
                        <mark>Planejamento Financeiro</mark>
                    </x-slot:title>
                    <x-slot:description>
                        A Fire|ce ajuda a organizar sua vida financeira, controlar seu dinheiro com clareza e tomar
                        decisões inteligentes, sem depender de produtos empurrados por bancos ou investimentos da moda.
                    </x-slot:description>

                    <x-slot:footer>
                        <x-logo-badge class="justify-center md:justify-start">
                            Sem custo, sem compromisso, uma conversa rápida
                        </x-logo-badge>
                    </x-slot:footer>
                </x-fr-headline>

                <div class="flex w-full flex-col items-center gap-4 md:items-start" data-reveal="up">
                    <x-fr-button
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Falar com um consultor
                    </x-fr-button>
                </div>

                <hr class="border-border-base hidden w-full md:block" />
            </div>

            <div
                class="relative hidden w-full md:-ml-[4.24%] md:block md:min-h-160 md:basis-[55.44%]"
                data-reveal="scale"
            >
                <video
                    class="absolute inset-0 h-full w-full rounded-lg object-cover"
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="auto"
                    aria-hidden="true"
                >
                    <source src="{{ asset('video/firece-hero.mp4') }}" type="video/mp4" />
                </video>

                <x-organic-cutout />
            </div>
        </div>

        <div class="relative mt-auto w-full md:hidden" data-reveal="scale">
            <video
                class="aspect-4/5 w-full rounded-lg object-cover"
                autoplay
                muted
                loop
                playsinline
                preload="auto"
                aria-hidden="true"
            >
                <source src="{{ asset('video/firece-hero.mp4') }}" type="video/mp4" />
            </video>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col items-center gap-8 text-center">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Reconhece alguma dessas histórias?
                </x-slot:title>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 text-left md:grid-cols-3 md:gap-3" data-reveal-stagger="100">
                <div class="group flex flex-col gap-3" data-reveal="up">
                    <div class="flex flex-col">
                        <span
                            aria-hidden="true"
                            class="text-brand-primary font-display text-lg leading-tight font-bold"
                        >
                            &ldquo;
                        </span>
                        <x-fr-text class="text-text-low font-medium! italic">
                            Tenho dívidas que parecem não ter fim. Pago o mínimo e o saldo não cai
                        </x-fr-text>
                    </div>
                    <hr
                        class="border-border-base group-hover:border-brand-primary mt-auto w-full transition-colors duration-300"
                    />
                </div>

                <div class="group flex flex-col gap-3" data-reveal="up">
                    <div class="flex flex-col">
                        <span
                            aria-hidden="true"
                            class="text-brand-primary font-display text-lg leading-tight font-bold"
                        >
                            &ldquo;
                        </span>
                        <x-fr-text class="text-text-low font-medium! italic">
                            Trabalho muito, ganho bem mas no fim do mês não sobra nada. E eu não sei por quê.
                        </x-fr-text>
                    </div>
                    <hr
                        class="border-border-base group-hover:border-brand-primary mt-auto w-full transition-colors duration-300"
                    />
                </div>

                <div class="group flex flex-col gap-3" data-reveal="up">
                    <div class="flex flex-col">
                        <span
                            aria-hidden="true"
                            class="text-brand-primary font-display text-lg leading-tight font-bold"
                        >
                            &ldquo;
                        </span>
                        <x-fr-text class="text-text-low font-medium! italic">
                            Já poupo alguma coisa, mas sinto que meu dinheiro poderia estar rendendo muito mais.
                        </x-fr-text>
                    </div>
                    <hr
                        class="border-border-base group-hover:border-brand-primary mt-auto w-full transition-colors duration-300"
                    />
                </div>
            </div>

            <x-logo-badge class="justify-center"> Não é falta de disciplina. É falta de um plano</x-logo-badge>
        </div>
    </section>

    <section
        id="por-que-firece"
        class="section light bg-elevation-surface border-border-base scroll-mt-(--header-height) border-y py-20 md:py-28"
    >
        {{--
            A coluna da imagem sangra até 64px da borda da viewport, como no Figma
            (conteúdo 994px + gutter 32px + imagem 538px em 1920). Abaixo de lg vale o
            padding do `container`; a partir de lg o recuo esquerdo replica o recuo do
            container via porcentagem da seção — e não 100vw — para não somar a scrollbar.
            O `!` é necessário porque as regras de `padding-inline` de breakpoints menores
            são emitidas depois das de `lg` no bundle e venceriam a cascata.
        --}}
        <div
            class="container flex flex-col gap-8 md:flex-row md:items-center md:gap-x-8 lg:max-w-none! lg:pr-16! lg:pl-[max(0px,calc((100%-1336px)/2))]!"
            data-reveal-stagger="120"
        >
            <div class="mx-auto w-full max-w-[538px] md:order-2 md:mx-0 md:w-[34.4%] md:shrink-0" data-reveal="left">
                <div class="relative aspect-538/542 w-full overflow-hidden rounded-lg">
                    <img
                        src="{{ asset('images/home-imagem_2.webp') }}"
                        alt="Consultora da Fire|ce analisando um planejamento financeiro"
                        class="h-full w-full object-contain"
                    />
                </div>
            </div>

            <div class="flex min-w-0 flex-col gap-8 md:order-1 md:flex-1 md:gap-11">
                <div class="flex flex-col gap-8">
                    <x-fr-headline align="left" data-reveal="up">
                        <x-slot:title>
                            Por que a
                            <mark>Fire</mark>|<mark>ce</mark>
                            ?
                        </x-slot:title>
                        <x-slot:description>
                            Em média, brasileiros perdem 23% da renda sem saber para onde foi. A
                            <mark>Fire</mark>|<mark>ce</mark>
                            mostra exatamente o que está acontecendo.
                        </x-slot:description>
                    </x-fr-headline>

                    <div
                        class="divide-border-base grid grid-cols-1 divide-y lg:grid-cols-3 lg:divide-x lg:divide-y-0"
                        data-reveal-stagger="140"
                    >
                        <div
                            class="flex flex-col gap-4 max-lg:py-6 max-lg:first:pt-0 max-lg:last:pb-0 lg:p-4"
                            data-reveal="up"
                        >
                            <x-icon-box icon="heroicon-c-scale" />
                            <x-fr-headline align="left" size="sm" container-class="gap-2!">
                                <x-slot:title>
                                    <mark>Orientação financeira</mark>
                                    sem conflito de interesse
                                </x-slot:title>
                                <x-slot:description>
                                    Recomendações sem metas comerciais, comissões ou produtos específicos para vender.
                                </x-slot:description>
                            </x-fr-headline>
                        </div>

                        <div
                            class="flex flex-col gap-4 max-lg:py-6 max-lg:first:pt-0 max-lg:last:pb-0 lg:p-4"
                            data-reveal="up"
                        >
                            <x-icon-box icon="heroicon-c-adjustments-horizontal" />
                            <x-fr-headline align="left" size="sm" container-class="gap-2!">
                                <x-slot:title>
                                    Estratégias feitas para a
                                    <mark>sua realidade</mark>
                                </x-slot:title>
                                <x-slot:description>
                                    Estratégias alinhadas aos seus objetivos, momento de vida e realidade financeira.
                                </x-slot:description>
                            </x-fr-headline>
                        </div>

                        <div
                            class="flex flex-col gap-4 max-lg:py-6 max-lg:first:pt-0 max-lg:last:pb-0 lg:p-4"
                            data-reveal="up"
                        >
                            <x-icon-box icon="fas-handshake" />
                            <x-fr-headline align="left" size="sm" container-class="gap-2!">
                                <x-slot:title>
                                    <mark>Planejamento financeiro</mark>
                                    baseado em confiança
                                </x-slot:title>
                                <x-slot:description>
                                    Planejamento financeiro começa com confiança em quem está caminhando ao seu lado.
                                </x-slot:description>
                            </x-fr-headline>
                        </div>
                    </div>
                </div>

                @php ($featuredTestimonial = $testimonials->first())
                @if ($featuredTestimonial)
                    <x-testimonial
                        data-reveal="up"
                        :name="$featuredTestimonial->name"
                        :time="$featuredTestimonial->posted_at->locale('pt_BR')->diffForHumans()"
                        :avatar="$featuredTestimonial->getFirstMediaUrl('avatar')"
                        :rating="$featuredTestimonial->rating"
                    >
                        {{ $featuredTestimonial->comment }}
                    </x-testimonial>
                @endif
            </div>
        </div>
    </section>

    <section id="processo" class="section scroll-mt-(--header-height)">
        <div class="container grid grid-cols-1 items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Clareza
                    <mark>financeira</mark>
                    começa com estratégia.
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark>
                    e só para ela.
                </x-slot:description>
            </x-fr-headline>

            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y rounded-md border md:grid-cols-4 md:divide-x"
                data-reveal-stagger="140"
            >
                <x-numbered-step
                    class="bg-elevation-01dp rounded-tl-md rounded-tr-md p-6 md:rounded-tr-none md:rounded-bl-md md:p-8"
                    data-reveal="up"
                    number="01"
                    title="Diagnóstico financeiro"
                >
                    Entendemos sua realidade atual, hábitos financeiros, objetivos e desafios.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Clareza primeiro. Estratégia depois.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step class="p-6 md:p-8" data-reveal="up" number="02" title="Planejamento personalizado">
                    Criamos uma estratégia alinhada ao seu perfil e ao momento que você está vivendo.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Seu plano. Do seu jeito. Para o seu momento.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step class="p-6 md:p-8" data-reveal="up" number="03" title="Organização financeira">
                    Estruturamos sua vida financeira para gerar mais clareza, controle e previsibilidade.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Menos surpresas. Mais previsibilidade. Sempre.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="rounded-br-md rounded-bl-md p-6 md:rounded-tr-md md:rounded-bl-none md:p-8"
                    data-reveal="up"
                    number="04"
                    title="Acompanhamento contínuo"
                >
                    Agendamos reuniões periódicas para acompanhar sua evolução, ajustando estratégias quando necessário.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Menos surpresas. Mais previsibilidade. Sempre.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>
            </div>

            <div class="flex w-full flex-col items-center gap-8" data-reveal="up">
                <x-fr-button
                    tag="a"
                    href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                    target="_blank"
                >
                    Descobrir meu plano
                </x-fr-button>
                <x-logo-badge class="justify-center md:justify-start"> Simples assim. Sem enrolação.</x-logo-badge>
            </div>
        </div>
    </section>

    <section
        id="planos"
        class="section bg-elevation-01dp border-border-base scroll-mt-(--header-height) border-y py-8 md:py-16"
    >
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Qual é o seu momento?
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <mark>sua realidade</mark>
                    e só para ela.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="140">
                <x-plan-card
                    data-reveal="up"
                    variant="highlighted"
                    content-gap="lg"
                    tagline="“Meu dinheiro some sem explicação”"
                >
                    <div class="flex flex-col gap-4">
                        <x-fr-heading size="sm">Perfil Gold</x-fr-heading>
                        <x-fr-text>
                            Para quem quer organizar as finanças do zero e finalmente respirar no fim do mês.
                        </x-fr-text>
                    </div>

                    <x-fr-button
                        class="w-full!"
                        variant="outline"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+gold&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Começar por aqui
                    </x-fr-button>

                    <div class="flex flex-col gap-4">
                        <hr class="border-border-base" />

                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">Dê o primeiro passo</x-fr-text>

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured>Organização Anual</x-plan-feature>
                            <x-plan-feature>Mapa financeiro</x-plan-feature>
                            <x-plan-feature>Construção de Reserva</x-plan-feature>
                            <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                            <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                        </ul>
                    </div>
                </x-plan-card>

                <x-plan-card
                    data-reveal="up"
                    variant="highlighted"
                    content-gap="lg"
                    tagline="“Quero acelerar minha independência financeira”"
                >
                    <div class="flex flex-col gap-4">
                        <x-fr-heading size="sm">Perfil Platinum</x-fr-heading>
                        <x-fr-text>
                            Para quem está começando a organizar sua vida financeira e deseja mais tranquilidade.
                        </x-fr-text>
                    </div>

                    <x-fr-button
                        class="w-full!"
                        variant="outline"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+platinum&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Começar por aqui
                    </x-fr-button>

                    <div class="flex flex-col gap-4">
                        <hr class="border-border-base" />

                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Tudo do Gold, e mais:
                        </x-fr-text>

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured>Preenchimento de Fluxo de Caixa</x-plan-feature>
                            <x-plan-feature>Diagnóstico de Carteira</x-plan-feature>
                            <x-plan-feature>Estruturar aquisição de bens</x-plan-feature>
                            <x-plan-feature>Parceiros de Investimento</x-plan-feature>
                            <x-plan-feature>Custo Oportunidade</x-plan-feature>
                        </ul>
                    </div>
                </x-plan-card>

                <x-plan-card
                    data-reveal="up"
                    variant="filled"
                    content-gap="lg"
                    tagline="“Quero fazer meu dinheiro trabalhar por mim” "
                >
                    <div class="flex flex-col gap-4">
                        <x-fr-heading size="sm" class="text-text-light!">Perfil Black</x-fr-heading>
                        <x-fr-text class="text-text-light!">
                            Para quem já alcançou a liberdade financeira e quer proteger e aumentar seu patrimônio.
                        </x-fr-text>
                    </div>

                    <x-fr-button
                        class="w-full!"
                        variant="white"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+black&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Começar por aqui
                    </x-fr-button>

                    <div class="flex flex-col gap-4">
                        <hr class="border-white/30" />

                        <x-fr-text size="sm" class="text-text-light! font-semibold!">
                            Tudo do Platinum, e mais:
                        </x-fr-text>

                        <ul class="flex flex-col gap-4">
                            <x-plan-feature featured inverted>Revisão do Progresso</x-plan-feature>
                            <x-plan-feature inverted>Construção de Reserva Internacional</x-plan-feature>
                            <x-plan-feature inverted>Estratégias Exclusivas</x-plan-feature>
                            <x-plan-feature inverted>Carteiras Personalizadas</x-plan-feature>
                            <x-plan-feature inverted>Acompanhamento personalizado</x-plan-feature>
                        </ul>
                    </div>
                </x-plan-card>
            </div>
        </div>
    </section>

    <x-cta-banner
        cta-label="Fale com um consultor"
        cta-href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
        cta-target="_blank"
    >
        <x-slot:proof>
            <x-social-proof variant="dark">Mais de 2000 pessoas já fazem parte</x-social-proof>
        </x-slot:proof>
        <x-slot:title>
            Planejamento financeiro é o primeiro passo para todos os outros que você vai dar na sua vida.
        </x-slot:title>
        <x-slot:description>
            Se tem alguma dúvida que a consultoria vai ajudar sua vida, por que não testa?
            <br />
            A primeira análise é gratuita.
        </x-slot:description>
    </x-cta-banner>

    <x-lead-quiz />
</x-layout.landing>
