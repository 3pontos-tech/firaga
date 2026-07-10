<x-layout.landing>
    <x-slot:metatags>
        <title>Quem somos | {{ config('app.name') }}</title>
        <meta
            name="description"
            content="Ajudamos pessoas, famílias e empresas a transformarem objetivos em estratégias por meio do planejamento financeiro."
        />
    </x-slot:metatags>

    {{-- 1. HERO --}}
    <section class="section-first">
        <div
            class="container flex flex-col items-center gap-8 md:flex-row md:items-center md:justify-between md:gap-12"
            data-reveal-stagger="140"
        >
            <div class="flex w-full flex-col items-center gap-8 md:basis-3/5 md:items-start">
                <x-fr-headline size="2xl" align="left-desk" data-reveal="up">
                    <x-slot:title class="md:text-7xl!">
                        Estratégia hoje, liberdade <mark>amanhã</mark>
                    </x-slot:title>
                    <x-slot:description>
                        Ajudamos pessoas, famílias e empresas a transformarem objetivos em estratégias — porque
                        compreender as próprias finanças é o primeiro passo para decidir com <mark>consciência</mark>.
                    </x-slot:description>
                </x-fr-headline>
            </div>

            <div class="hidden w-full md:block md:basis-2/5" data-reveal="scale">
                <img
                    src="{{ asset('images/quem-somos-hero.webp') }}"
                    alt="Equipe Firece"
                    class="mx-auto w-full max-w-[423px] md:mr-0 md:ml-auto"
                />
            </div>
        </div>
    </section>

    <section class="section dark bg-elevation-surface py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    O futuro que queremos construir
                </x-slot:title>
                <x-slot:description>
                    Trabalhamos para tornar o planejamento financeiro mais acessível, estratégico e presente na vida de
                    pessoas, famílias e empresas.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-12" data-reveal-stagger="140">
                <div class="flex flex-col gap-4" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-7xl">01</p>
                    <div class="flex flex-col gap-1">
                        <p class="font-display text-text-high text-md">Nossa Missão</p>
                        <p class="text-text-medium font-sans text-xs leading-6 font-medium">Ampliar o acesso à educação financeira e ajudar pessoas, famílias e empresas a transformarem objetivos em estratégias por meio do planejamento financeiro.</p>
                    </div>
                    <hr class="border-border-base w-full" />
                    <div class="flex items-stretch gap-4">
                        <div class="bg-brand-primary w-[3px] shrink-0"></div>
                        <p class="text-text-medium font-sans text-xs leading-normal font-medium italic">Acreditamos que compreender as próprias finanças é o primeiro passo para tomar decisões mais conscientes e construir um futuro com mais segurança, clareza e possibilidades.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-4" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-7xl">02</p>
                    <div class="flex flex-col gap-1">
                        <p class="font-display text-text-high text-md">Nossa visão</p>
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
    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title class="font-bold!">
                    O que sustenta nossa atuação
                </x-slot:title>
                <x-slot:description>
                    Educação, transparência, desenvolvimento contínuo, compromisso e visão de longo prazo orientam cada
                    escolha da <mark>Fire|ce</mark>.
                </x-slot:description>
            </x-fr-headline>

            <div
                class="border-border-base divide-border-base grid grid-cols-1 divide-y overflow-hidden rounded-md border lg:grid-cols-5 lg:divide-x lg:divide-y-0"
                data-reveal-stagger="120"
            >
                <div class="dark bg-elevation-surface flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-3xl">01</p>
                    <p class="font-display text-text-high text-md">Educação</p>
                    <p class="text-text-medium font-sans text-xs leading-6 font-medium">Acreditamos que o conhecimento transforma decisões e orienta escolhas financeiras mais conscientes.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-3xl">02</p>
                    <p class="font-display text-text-high text-md">Transparência</p>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Construímos relações baseadas em clareza, ética e confiança em cada etapa da jornada financeira.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-3xl">03</p>
                    <p class="font-display text-text-high text-md">Desenvolvimento contínuo</p>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Investimos constantemente na evolução dos nossos profissionais, da nossa metodologia e da experiência entregue.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-3xl">04</p>
                    <p class="font-display text-text-high text-md">Compromisso com o cliente</p>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Colocamos os objetivos de cada cliente no centro de todas as decisões, com atenção, estratégia e responsabilidade.</p>
                </div>

                <div class="flex flex-col gap-2 p-8" data-reveal="up">
                    <p class="font-display text-brand-primary text-xl md:text-3xl">05</p>
                    <p class="font-display text-text-high text-md">Visão de longo prazo</p>
                    <p class="text-text-high font-sans text-xs leading-6 font-medium">Valorizamos decisões conscientes e estratégias construídas para gerar resultados sustentáveis ao longo do tempo.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. BLOG --}}
    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Confira nosso <mark>Blog</mark>
                </x-slot:title>
                <x-slot:description>
                    Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o início
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="140">
                <x-blog-card
                    data-reveal="up"
                    :image="asset('images/guys-looking-at-notebook.png')"
                    title="Orçamento Individual e Familiar"
                    description="Controle, organização e consciência para sua vida financeira com apoio especializado."
                    author-name="Laura Papaiano"
                    author-role="Consultora Financeira"
                    author-avatar="https://i.pravatar.cc/80?img=45"
                />

                <x-blog-card
                    data-reveal="up"
                    :image="asset('images/guys-looking-at-notebook.png')"
                    title="Orçamento Individual e Familiar"
                    description="Controle, organização e consciência para sua vida financeira com apoio especializado."
                    author-name="Laura Papaiano"
                    author-role="Consultora Financeira"
                    author-avatar="https://i.pravatar.cc/80?img=45"
                />

                <x-blog-card
                    data-reveal="up"
                    :image="asset('images/guys-looking-at-notebook.png')"
                    title="Orçamento Individual e Familiar"
                    description="Controle, organização e consciência para sua vida financeira com apoio especializado."
                    author-name="Laura Papaiano"
                    author-role="Consultora Financeira"
                    author-avatar="https://i.pravatar.cc/80?img=45"
                />
            </div>
        </div>
    </section>
</x-layout.landing>
