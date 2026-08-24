<x-layout.landing>
    <x-slot:metatags>
        <title>Quem somos | {{ config('app.name') }}</title>
        <meta
            name="description"
            content="Ajudamos pessoas, famílias e empresas a transformarem objetivos em estratégias por meio do planejamento financeiro."
        />
    </x-slot:metatags>

    {{-- 1. HERO --}}
    <section id="hero" class="section-first md:mt-20!">
        <div
            class="container flex flex-col items-center gap-8 md:flex-row md:items-center md:justify-between"
            data-reveal-stagger="140"
        >
            <div class="flex w-full flex-col items-center gap-8 md:basis-[57.5%] md:items-start">
                <x-fr-headline size="2xl" align="left-desk" container-class="gap-8!" data-reveal="up">
                    <x-slot:title class="md:text-7xl!">
                        Estratégia hoje, liberdade <mark>amanhã</mark>
                    </x-slot:title>
                    <x-slot:description class="font-display! font-medium!">
                        Ajudamos pessoas, famílias e empresas a transformarem objetivos em estratégias — porque
                        compreender as próprias finanças é o primeiro passo para decidir com <mark>consciência</mark>.
                    </x-slot:description>
                </x-fr-headline>
            </div>

            <div class="hidden w-full md:block md:basis-[42.5%]" data-reveal="scale">
                {{-- O Figma corta ~12% do topo da arte para fechar a proporção 568x561 da coluna. --}}
                <div class="ml-auto aspect-568/561 w-full max-w-[568px] overflow-hidden">
                    <img
                        src="{{ asset('images/quem_somos-imagem_1.webp') }}"
                        alt="Equipe Fire|ce"
                        class="h-full w-full object-cover object-bottom"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- 2. MISSÃO E VISÃO --}}
    <section id="missao-visao-valores" class="section dark bg-elevation-surface py-16">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    O futuro que queremos construir
                </x-slot:title>
                <x-slot:description class="mx-auto max-w-[800px]!">
                    Trabalhamos para tornar o planejamento financeiro mais acessível, estratégico e presente na vida de
                    pessoas, famílias e empresas.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2" data-reveal-stagger="140">
                <div class="flex flex-col gap-4" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl md:text-7xl">01</p>
                    <div class="flex flex-col gap-1">
                        <h3 class="fr-heading text-md">Nossa Missão</h3>
                        <p class="text-text-medium font-sans text-xs leading-6 font-medium">Ampliar o acesso à educação financeira e ajudar pessoas, famílias e empresas a transformarem objetivos em estratégias por meio do planejamento financeiro.</p>
                    </div>
                    <hr class="border-border-base w-full" />
                    <div class="flex items-stretch gap-4">
                        <div class="bg-brand-primary w-[3px] shrink-0"></div>
                        <p class="text-text-medium font-sans text-xs leading-normal font-medium italic">Acreditamos que compreender as próprias finanças é o primeiro passo para tomar decisões mais conscientes e construir um futuro com mais segurança, clareza e possibilidades.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-4" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl md:text-7xl">02</p>
                    <div class="flex flex-col gap-1">
                        <h3 class="fr-heading text-md">Nossa visão</h3>
                        <p class="text-text-medium font-sans text-xs leading-6 font-medium">Ser referência em planejamento e educação financeira no Brasil, ampliando o acesso à informação de qualidade para decisões financeiras mais conscientes.</p>
                    </div>
                    <hr class="border-border-base w-full" />
                    <div class="flex items-stretch gap-4">
                        <div class="bg-brand-primary w-[3px] shrink-0"></div>
                        <p class="text-text-medium font-sans text-xs leading-normal font-medium italic">Queremos participar da construção de um cenário em que o mercado financeiro deixe de ser visto como algo distante ou complexo e passe a fazer parte da vida de quem deseja construir objetivos de longo prazo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. PILARES — O que sustenta nossa atuação --}}
    <section id="pilares" class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    O que sustenta nossa atuação
                </x-slot:title>
                <x-slot:description class="mx-auto max-w-[800px]!">
                    Educação, transparência, desenvolvimento contínuo, compromisso e visão de longo prazo orientam cada
                    escolha da <mark class="font-bold">Fire|ce</mark>.
                </x-slot:description>
            </x-fr-headline>

            <div
                class="border-border-base divide-border-base grid grid-cols-1 divide-y overflow-hidden rounded-md border lg:grid-cols-5 lg:divide-x lg:divide-y-0"
                data-reveal-stagger="120"
            >
                <div
                    class="dark flex flex-col gap-2 p-8"
                    style="
                        background:
                            linear-gradient(270deg, rgba(253, 253, 253, 0) 0%, rgba(253, 253, 253, 0.12) 100%), #121213;
                    "
                    data-reveal="up"
                >
                    <p class="fr-heading text-brand-primary! text-xl">01</p>
                    <h3 class="fr-heading text-md break-normal">Educação</h3>
                    <p class="text-text-medium font-sans text-xs leading-6 font-medium">Acreditamos que o conhecimento transforma decisões e orienta escolhas financeiras mais conscientes.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl">02</p>
                    <h3 class="fr-heading text-md break-normal">Transparência</h3>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Construímos relações baseadas em clareza, ética e confiança em cada etapa da jornada financeira.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl">03</p>
                    <h3 class="fr-heading text-md break-normal">Desenvolvimento contínuo</h3>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Investimos constantemente na evolução dos nossos profissionais, da nossa metodologia e da experiência entregue.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl">04</p>
                    <h3 class="fr-heading text-md break-normal">Compromisso com o cliente</h3>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Colocamos os objetivos de cada cliente no centro de todas as decisões, com atenção, estratégia e responsabilidade.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="fr-heading text-brand-primary! text-xl">05</p>
                    <h3 class="fr-heading text-md break-normal">Visão de longo prazo</h3>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Valorizamos decisões conscientes e estratégias construídas para gerar resultados sustentáveis ao longo do tempo.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. FIRE|CE EM NÚMEROS --}}
    @php
        $stats = [
            ['value' => '+2000', 'label' => 'Clientes', 'icon' => 'heroicon-o-user-group'],
            ['value' => '+40', 'label' => 'Consultores ativos', 'icon' => 'heroicon-o-identification'],
            ['value' => '+5000', 'label' => 'Consultorias feitas', 'icon' => 'fas-handshake'],
        ];
    @endphp

    <section id="numeros" class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    A Fire<mark>|</mark>ce em números
                </x-slot:title>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="120">
                @foreach ($stats as $stat)
                    <div
                        class="bg-brand-primary border-outline-light flex flex-col items-center justify-center gap-4 rounded-md border px-16 py-8 text-center"
                        data-reveal="up"
                    >
                        <p class="fr-heading text-text-light! text-3xl leading-normal">{{ $stat['value'] }}</p>

                        <div class="flex items-center justify-center gap-2">
                            <x-dynamic-component :component="$stat['icon']" class="text-icon-light size-6 shrink-0" />
                            <p class="fr-heading text-text-light! text-md leading-normal">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 5. VÍDEO INSTITUCIONAL — vertical no mobile, horizontal no desktop --}}
    <section id="video" class="section">
        <div class="dark container" data-reveal="scale">
            <video
                class="bg-elevation-surface aspect-9/16 w-full rounded-md object-cover md:hidden"
                poster="{{ asset('images/firece-day-vertical-poster.jpg') }}"
                controls
                playsinline
                preload="none"
            >
                <source src="{{ asset('video/firece-day-vertical.mp4') }}" type="video/mp4" />
            </video>

            <video
                class="bg-elevation-surface hidden aspect-video w-full rounded-md object-cover md:block"
                poster="{{ asset('images/firece-day-horizontal-poster.jpg') }}"
                controls
                playsinline
                preload="none"
            >
                <source src="{{ asset('video/firece-day-horizontal.mp4') }}" type="video/mp4" />
            </video>
        </div>
    </section>

    {{-- 6. CONTEÚDO QUE TRANSFORMA --}}
    <section id="conteudo" class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" container-class="gap-2!" data-reveal="up">
                <x-slot:title>
                    Conteúdo que <mark>transforma</mark>
                </x-slot:title>
                <x-slot:description>
                    Acesse os conteúdos que nossos especialistas prepararam para você se organizar financeiramente,
                    consolidar seu patrimônio ou aumentar seus rendimentos.
                </x-slot:description>
            </x-fr-headline>

            @if ($posts->isNotEmpty())
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-[54px]" data-reveal-stagger="140">
                    @foreach ($posts as $post)
                        <x-blog-card :post="$post" data-reveal="up" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layout.landing>
