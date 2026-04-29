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
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Bem-estar financeiro para equipes
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero organizar minha vida financeira
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Sou dev, PJ ou recebo em dólar
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Tenho patrimônio e quero proteger
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero ensinar finanças e ganhar com isso
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero ser parceiro da Firece
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
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

                <div class="grid w-full [grid-template-areas:'card']">
                    <div
                        class="transition-opacity duration-300 [grid-area:card]"
                        :class="selected === 'gold' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
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

                    <div
                        class="transition-opacity duration-300 [grid-area:card]"
                        :class="selected === 'platinum' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
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

                    <div
                        class="transition-opacity duration-300 [grid-area:card]"
                        :class="selected === 'black' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
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

            <x-testimonial
                data-reveal="up"
                name="Felipe Rosa"
                role="Design"
                avatar="https://i.pravatar.cc/80?img=12"
                metric="0% → 20% da renda investida"
            >
                Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o
                <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho reserva de
                emergência.
            </x-testimonial>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-4">
            <x-fr-headline align="left">
                <x-slot:header>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Code Capital </x-fr-text>
                </x-slot:header>
                <x-slot:title>
                    Você trabalha com tech. Seu plano também.
                </x-slot:title>
                <x-slot:description>
                    Consultoria financeira especializada para profissionais do mercado de tecnologia. Porque a renda de
                    quem trabalha com tech tem características únicas e merece uma estratégia à altura.
                </x-slot:description>
            </x-fr-headline>
            <div class="bg-elevation-01dp border-border-base text-xxxs rounded-sm border p-4 font-mono leading-7">
                <div class="mb-3 flex gap-1.5">
                    <span class="size-3 rounded-full bg-red-300"></span>
                    <span class="size-3 rounded-full bg-yellow-100"></span>
                    <span class="size-3 rounded-full bg-green-300"></span>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="flex flex-wrap items-center gap-x-1">
                        <span class="text-brand-primary">$</span>
                        <span class="text-text-medium">Diagnóstico:</span>
                        <span class="text-brand-primary">renda variável</span>
                        <span class="inline-flex items-center gap-1 text-green-600">
                            <x-heroicon-o-check class="size-3 shrink-0 text-green-600" />
                            mapeada
                        </span>
                    </p>
                    <p class="flex flex-wrap items-center gap-x-1">
                        <span class="text-brand-primary">$</span>
                        <span class="text-text-medium">Stock options:</span>
                        <span class="text-brand-primary">estratégia de exercício</span>
                        <span class="inline-flex items-center gap-1 text-green-600">
                            <x-heroicon-o-check class="size-3 shrink-0 text-green-600" />
                            definida
                        </span>
                    </p>
                    <p class="flex flex-wrap items-center gap-x-1">
                        <span class="text-brand-primary">$</span>
                        <span class="text-text-medium">Câmbio:</span>
                        <span class="text-brand-primary">Proteção USD/BRL</span>
                        <span class="inline-flex items-center gap-1 text-green-600">
                            <x-heroicon-o-check class="size-3 shrink-0 text-green-600" />
                            estruturada
                        </span>
                    </p>
                    <p class="flex flex-wrap items-center gap-x-1">
                        <span class="text-brand-primary">$</span>
                        <span class="text-text-medium">PLR + Bônus:</span>
                        <span class="text-brand-primary">Alocação estratégica</span>
                        <span class="text-green-600">planejada</span>
                    </p>
                </div>
            </div>

            <x-fr-button class="mt-4"> Conhecer o code capital </x-fr-button>
        </div>
    </section>

    <section class="section metallic bg-elevation-surface py-20">
        <div class="container flex flex-col gap-8">
            <div class="relative">
                <div
                    class="from-elevation-surface/0 to-elevation-surface/10 absolute inset-0 z-10 bg-linear-to-b"
                ></div>
                <img
                    src="{{ asset('images/guys-looking-at-notebook-but-gray.webp') }}"
                    alt="Imagem dos caras cinza"
                    class="h-50 w-auto"
                    data-reveal="left"
                />
            </div>

            <x-fr-headline align="left" data-reveal="up">
                <x-slot:header>
                    <x-fr-text size="sm" class="text-text-high! font-semibold!"> Key Account </x-fr-text>
                </x-slot:header>
                <x-slot:title>
                    Não é uma consultoria, <mark>é uma parceria</mark>
                </x-slot:title>
                <x-slot:description>
                    O <span class="text-text-high">Key Account</span> é para quem já passou pelo
                    <span class="text-text-high">Planejamento</span> e quer ir além ou para quem, desde o início,
                    precisa de acompanhamento contínuo e acesso direto ao seu consultor. É uma relação de longo prazo,
                    não de três encontros.
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4" data-reveal="up">
                <x-fr-heading size="xs"> O que muda na sua vida: </x-fr-heading>

                <div class="flex flex-col gap-8" data-reveal-stagger="120">
                    <div class="flex items-center gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text size="sm"> Acompanhamento contínuo com revisões mensais do seu plano </x-fr-text>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text size="sm"> Acesso direto ao seu consultor sem fila, sem espera </x-fr-text>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text size="sm"> Estratégias exclusivas adaptadas ao seu momento de vida </x-fr-text>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text size="sm"> Decisões financeiras com suporte em tempo real </x-fr-text>
                        </div>
                    </div>
                </div>
            </div>

            <x-testimonial
                class="mt-12"
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

            <x-fr-button data-reveal="up"> Esse sou eu </x-fr-button>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <x-fr-headline>
                <x-slot:header>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Educafire </x-fr-text>
                </x-slot:header>
                <x-slot:title>
                    Aprenda a <mark>transformar</mark> vidas com finanças.
                </x-slot:title>
                <x-slot:description>
                    O Educa Fire é para quem quer ir além aprender a ensinar finanças e construir liberdade financeira
                    ajudando outras pessoas. Workshop, mentoria e formação com a metodologia Firece.
                </x-slot:description>
                <x-slot:actions>
                    <x-fr-button> Conhecer a EducaFire </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>
        </div>
    </section>

    <section class="section bg-brand-primary py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" data-reveal="up">
                <x-slot:header>
                    <x-logo-badge class="text-text-light!"> Parcerias </x-logo-badge>
                </x-slot:header>
                <x-slot:title class="text-text-light!">
                    Parcerias que geram impacto real
                </x-slot:title>
                <x-slot:description class="text-text-light!">
                    Se você tem sinergia com a missão da Firece, existe um formato de parceria para você. Avaliamos cada
                    oportunidade individualmente e investimos tempo e estrutura quando há alinhamento.
                </x-slot:description>
            </x-fr-headline>

            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
                data-reveal-stagger="140"
            >
                <div class="flex flex-col gap-4 px-4 py-8" data-reveal="up">
                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Joint Ventures
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Projetos conjuntos com estrutura compartilhada e metas alinhadas
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 px-4 py-8" data-reveal="up">
                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Projetos Educacionais
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Co-criação de conteúdo, cursos e programas de educação financeira
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 px-4 py-8" data-reveal="up">
                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Atendimento
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Sessões individuais de 60 minutos com consultores especializados, online ou presencial.
                        </x-slot:description>
                    </x-fr-headline>
                </div>

                <div class="flex flex-col gap-3 px-4 py-8" data-reveal="up">
                    <x-fr-headline align="left" size="sm" container-class="gap-2!">
                        <x-slot:title class="text-text-light!">
                            Parcerias Comerciais
                        </x-slot:title>
                        <x-slot:description class="text-text-light!">
                            Modelos de afiliação e indicação com remuneração inteligente
                        </x-slot:description>
                    </x-fr-headline>
                </div>
            </div>

            <x-fr-button variant="white"> Conhecer o code capital </x-fr-button>
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Qual situação mais se parece com a sua?
                </x-slot:title>
                <x-slot:description>
                    Selecione e a gente te indica o caminho certo
                </x-slot:description>
            </x-fr-headline>

            <div
                class="divide-border-base border-border-base grid grid-cols-1 gap-3 divide-y border-y"
                data-reveal-stagger="140"
            >
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Represento uma empresa e quero cuidar do bem-estar financeiro do meu time
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Meu dinheiro some e não entendo para onde vai
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Sou dev, tenho CNPJ ou rcebo em dólar e não sei como estruturar
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Tenho patrimônio e preciso de uma estratégia mais sofisticada
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
                <div class="flex items-center justify-between gap-3 py-4">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">
                        Quero aprender a ensinar finanças e aganhar com isso
                    </x-fr-text>
                    <x-heroicon-c-chevron-right class="text-brand-primary size-5 shrink-0" />
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
