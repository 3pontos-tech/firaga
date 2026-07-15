<x-layout.landing headerTheme="dark" splashFrom="#09090a" splashTo="#09090a" splashLogoClass="text-brand-primary">
    <x-slot:metatags>
        <title>Nossos Serviços | {{ config('app.name') }}</title>
        <meta
            name="description"
            content="Cada pessoa chega com uma situação diferente. Cada serviço da Fire|ce foi construído para uma fase específica da jornada financeira."
        />
    </x-slot:metatags>

    {{-- 1. HERO --}}
    <section class="dark bg-elevation-surface pt-(--section-first-gap) pb-(--section-gap) md:pt-27.5">
        <div class="container flex flex-col items-center gap-12">
            <x-fr-headline size="2xl" data-reveal="up">
                <x-slot:title>
                    <mark>Como podemos</mark> te ajudar?
                </x-slot:title>
                <x-slot:description>
                    Cada pessoa chega com uma situação diferente. Cada serviço foi construído para uma fase específica
                    da jornada financeira.
                </x-slot:description>
            </x-fr-headline>

            <div class="border-border-base flex w-full max-w-lg border-t pt-6" data-reveal="up">
                <div class="divide-border-base grid w-full grid-cols-3 divide-x">
                    <div class="flex flex-col items-center gap-1 px-4 text-center">
                        <p class="font-display text-brand-primary text-md font-medium">+10 anos</p>
                        <p class="text-text-medium text-xxxs font-semibold tracking-wider uppercase">De mercado</p>
                    </div>
                    <div class="flex flex-col items-center gap-1 px-4 text-center">
                        <p class="font-display text-brand-primary text-md font-medium">300%</p>
                        <p class="text-text-medium text-xxxs font-semibold tracking-wider uppercase">Cres. anual</p>
                    </div>
                    <div class="flex flex-col items-center gap-1 px-4 text-center">
                        <p class="font-display text-brand-primary text-md font-medium">+7 mil</p>
                        <p class="text-text-medium text-xxxs font-semibold tracking-wider uppercase">Clientes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. FLAMMA --}}
    <section class="section">
        <div class="container flex flex-col gap-8">
            <div class="mx-auto">
                <img src="{{ asset('images/logos/flamma-logo.svg') }}" alt="Logo Flamma" class="h-9 w-auto" />
            </div>
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Educação financeira pessoal como
                    <mark>benefício corporativo</mark>
                </x-slot:title>
                <x-slot:description>
                    Sua empresa garante orientação individualizada para os colaboradores, reduzindo o estresse
                    financeiro, aumentando a produtividade e promovendo segurança e bem-estar no ambiente corporativo.
                </x-slot:description>
            </x-fr-headline>
        </div>
    </section>

    {{-- 3. COMO FUNCIONA --}}
    <section class="section from-flamma-primary to-flamma-secondary bg-linear-to-r py-20">
        <div class="container flex flex-col items-center gap-10">
            <x-fr-headline data-reveal="up">
                <x-slot:title class="text-text-light!">
                    Como funciona?
                </x-slot:title>
                <x-slot:description class="text-text-light! mx-auto max-w-[42rem]">
                    A Flamma surge como um benefício corporativo inovador, desenhado para empoderar seus colaboradores
                    com educação financeira de alta qualidade.
                </x-slot:description>
            </x-fr-headline>

            <x-fr-button
                class="order-last md:order-none"
                variant="white"
                tag="a"
                href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                target="_blank"
            >
                Descobrir meu plano
            </x-fr-button>

            <div
                class="grid w-full grid-cols-1 divide-y divide-white/25 overflow-hidden rounded-md border border-white/25 md:grid-cols-2 md:divide-x lg:grid-cols-4 lg:divide-y-0"
                data-reveal-stagger="140"
            >
                <x-numbered-step class="p-8" data-reveal="up" number="01" title="Contratação" inverted>
                    A empresa contrata pacotes de horas mensais, semestrais ou anuais para todos os colaboradores.
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="02" title="Agendamento" inverted>
                    Cada colaborador agenda seu atendimento diretamente pela plataforma Flamma, quando quiser.
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="03" title="Atendimento" inverted>
                    Sessões individuais de 60 minutos com consultores especializados, online ou presencial.
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="04" title="Relatórios de impacto" inverted>
                    O RH acompanha a adesão e os resultados com relatórios consolidados de uso e evolução.
                </x-numbered-step>
            </div>
        </div>
    </section>

    {{-- 4. PLANEJAMENTO FINANCEIRO --}}
    <section class="section">
        <div class="container flex flex-col gap-8 md:flex-row md:items-center md:gap-16">
            <div class="flex flex-col gap-8 md:basis-1/2">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:header>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Planejamento financeiro
                        </x-fr-text>
                    </x-slot:header>
                    <x-slot:title>
                        O que muda na sua vida quando existe planejamento financeiro?
                    </x-slot:title>
                    <x-slot:description>
                        O Planejamento Financeiro é onde tudo começa. Três encontros com um consultor dedicado que vai
                        entender sua realidade dívidas, hábitos, objetivos e construir uma estratégia feita para você.
                        Não para um perfil genérico. Para você.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-6" data-reveal="up">
                    <x-fr-heading size="xs">
                        O que muda na sua vida quando existe planejamento financeiro?
                    </x-fr-heading>

                    <div class="flex flex-col gap-6" data-reveal-stagger="120">
                        <x-arrow-block align="center">Mais organização financeira.</x-arrow-block>
                        <x-arrow-block align="center">Clareza para tomar decisões importantes.</x-arrow-block>
                        <x-arrow-block align="center">Segurança para investir.</x-arrow-block>
                        <x-arrow-block align="center">Controle sobre o próprio dinheiro.</x-arrow-block>
                        <x-arrow-block align="center">Construção patrimonial sustentável.</x-arrow-block>
                        <x-arrow-block align="center">Mais tranquilidade para planejar o futuro.</x-arrow-block>
                    </div>
                </div>
            </div>

            <div class="hidden w-full md:block md:basis-1/2 md:self-stretch" data-reveal="scale">
                <img
                    src="{{ asset('images/planejamento-financeiro.png') }}"
                    alt="Consultor e cliente em uma sessão de planejamento financeiro"
                    class="w-full md:h-full md:rounded-lg md:object-cover"
                />
            </div>
        </div>
    </section>

    {{-- 5. PLANOS --}}
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

            <div class="flex flex-col items-center gap-8" x-data="{ selected: 'gold' }">
                <div class="flex w-full md:hidden">
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

                <div
                    class="grid w-full items-start [grid-template-areas:'card'] md:grid-cols-3 md:gap-8"
                    data-reveal-stagger="140"
                >
                    {{-- Gold --}}
                    <div
                        class="transition-opacity duration-300 [grid-area:card] md:pointer-events-auto! md:opacity-100! md:[grid-area:auto]"
                        :class="selected === 'gold' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <x-plan-card data-reveal="up" variant="highlighted" tagline="“Estou bagunçado financeiramente”">
                            <x-fr-heading>Perfil Gold</x-fr-heading>
                            <x-fr-text>Para quem está bagunçado e precisa ajuda para começar a se organizar.</x-fr-text>

                            <x-fr-button
                                variant="outline"
                                tag="a"
                                href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+gold&type=phone_number&app_absent=0"
                                target="_blank"
                            >
                                Começar por aqui
                            </x-fr-button>

                            <hr class="border-border-base" />

                            <x-fr-text size="sm" class="text-brand-primary! font-semibold!"
                                >Dê o primeiro passo</x-fr-text
                            >
                            <ul class="flex flex-col gap-4">
                                <x-plan-feature featured>Organização Anual</x-plan-feature>
                                <x-plan-feature>Mapa financeiro</x-plan-feature>
                                <x-plan-feature>Construção de Reserva</x-plan-feature>
                                <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                                <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                            </ul>
                        </x-plan-card>
                    </div>

                    {{-- Platinum --}}
                    <div
                        class="transition-opacity duration-300 [grid-area:card] md:pointer-events-auto! md:opacity-100! md:[grid-area:auto]"
                        :class="selected === 'platinum' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <x-plan-card
                            data-reveal="up"
                            variant="highlighted"
                            tagline="“Ganho bem, mas guardo pouco ou nada”"
                        >
                            <x-fr-heading>Perfil Platinum</x-fr-heading>
                            <x-fr-text
                                >Para quem quer clareza dos gastos e um plano real de construção de
                                patrimônio.</x-fr-text
                            >

                            <x-fr-button
                                variant="outline"
                                tag="a"
                                href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+platinum&type=phone_number&app_absent=0"
                                target="_blank"
                            >
                                Começar por aqui
                            </x-fr-button>

                            <hr class="border-border-base" />

                            <x-fr-text size="sm" class="text-brand-primary! font-semibold!"
                                >Tudo do Gold, e mais:</x-fr-text
                            >
                            <ul class="flex flex-col gap-4">
                                <x-plan-feature featured>Preenchimento de Fluxo de Caixa</x-plan-feature>
                                <x-plan-feature>Diagnóstico de Carteira</x-plan-feature>
                                <x-plan-feature>Estruturar aquisição de bens</x-plan-feature>
                                <x-plan-feature>Parceiros de Investimento</x-plan-feature>
                                <x-plan-feature>Custo Oportunidade</x-plan-feature>
                            </ul>
                        </x-plan-card>
                    </div>

                    {{-- Black --}}
                    <div
                        class="transition-opacity duration-300 [grid-area:card] md:pointer-events-auto! md:opacity-100! md:[grid-area:auto]"
                        :class="selected === 'black' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <x-plan-card
                            data-reveal="up"
                            variant="filled"
                            tagline="“Já invisto, mas sei que posso ir mais longe”"
                        >
                            <x-fr-heading class="text-text-light!">Perfil Black</x-fr-heading>
                            <x-fr-text class="text-text-light!">
                                Para quem quer otimizar carteira, diversificar e acelerar o que já construiu.
                            </x-fr-text>

                            <x-fr-button
                                variant="white"
                                tag="a"
                                href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+black&type=phone_number&app_absent=0"
                                target="_blank"
                            >
                                Começar por aqui
                            </x-fr-button>

                            <hr class="border-white/30" />

                            <x-fr-text size="sm" class="text-text-light! font-semibold!"
                                >Tudo do Platinum, e mais:</x-fr-text
                            >
                            <ul class="flex flex-col gap-4">
                                <x-plan-feature featured inverted>Organização Anual</x-plan-feature>
                                <x-plan-feature inverted>Construção de Reserva Internacional</x-plan-feature>
                                <x-plan-feature inverted>Estratégias Exclusivas</x-plan-feature>
                                <x-plan-feature inverted>Carteiras Personalizadas</x-plan-feature>
                                <x-plan-feature inverted>Acompanhamento Personalizado</x-plan-feature>
                            </ul>
                        </x-plan-card>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. FLARE (IA) --}}
    <section class="section">
        <div class="container">
            <div
                class="to-yellow-primary relative overflow-hidden rounded-2xl bg-linear-to-r from-[#f3f1e7] p-8 md:p-16"
            >
                {{-- Círculos concêntricos decorativos (centro na base, arcos subindo) --}}
                <div
                    class="pointer-events-none absolute bottom-0 left-1/2 aspect-square w-[75rem] max-w-[120%] -translate-x-1/2 translate-y-1/2 rounded-full bg-white/[0.08]"
                ></div>
                <div
                    class="pointer-events-none absolute bottom-0 left-1/2 aspect-square w-[55rem] max-w-[80%] -translate-x-1/2 translate-y-1/2 rounded-full bg-white/[0.16]"
                ></div>

                <div class="relative flex flex-col gap-10 md:flex-row md:items-center md:gap-16">
                    <div class="flex flex-col gap-4 md:basis-1/2" data-reveal="up">
                        <img
                            src="{{ asset('images/logos/flare-logo.svg') }}"
                            alt="Logo Flare"
                            class="h-6 w-auto self-start"
                        />
                        <x-fr-headline align="left">
                            <x-slot:title class="lg:text-nowrap">
                                Seu dinheiro organizado com IA
                            </x-slot:title>
                            <x-slot:description class="text-text-medium!">
                                Se você quer dar o primeiro passo para sua tranquilidade financeira ou entender como
                                funciona uma consultoria, conheça o Flare, uma IA treinada pelos melhores consultores
                                financeiros do país para te ajudar a começar.
                            </x-slot:description>
                        </x-fr-headline>
                    </div>

                    <div class="w-full rounded-lg bg-white p-8 md:basis-1/2" data-reveal="up">
                        <form class="flex flex-col gap-6">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <x-fr-text class="text-text-high! font-semibold!">Nome</x-fr-text>
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Digite seu nome"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-3 focus:outline-none"
                                />
                            </div>
                            <div class="flex flex-col gap-2">
                                <x-fr-text class="text-text-high! font-semibold!">E-mail</x-fr-text>
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="exemplo@email.com"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-3 focus:outline-none"
                                />
                            </div>
                            <div class="flex flex-col gap-2">
                                <x-fr-text class="text-text-high! font-semibold!">Telefone</x-fr-text>
                                <input
                                    type="tel"
                                    name="phone"
                                    placeholder="(12) 9 0000-0000"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-3 focus:outline-none"
                                />
                            </div>
                            <button
                                type="submit"
                                class="bg-yellow-primary text-text-dark rounded-sm px-8 py-3 font-sans font-semibold transition-opacity hover:opacity-90"
                            >
                                Me avise quando estiver disponível
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. KEY ACCOUNT --}}
    <section class="section dark bg-elevation-surface overflow-hidden py-20">
        <div class="container flex flex-col gap-8 md:grid md:grid-cols-2 md:items-center md:gap-16">
            <div class="flex flex-col gap-8">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:header>
                        <x-fr-text size="sm" class="text-text-high! font-semibold!"> Atendimento premium </x-fr-text>
                    </x-slot:header>
                    <x-slot:title>
                        Dê a atenção que seu
                        <span class="text-text-medium">patrimônio e seus investimentos</span> merecem.
                    </x-slot:title>
                    <x-slot:description>
                        Se você acha que precisa proteger seus bens e aumentar seus rendimentos, o
                        <span class="text-text-high">Key Account</span> é a solução ideal.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-6" data-reveal="up">
                    <x-fr-heading size="xs"> O que muda na sua vida: </x-fr-heading>

                    <div class="flex flex-col gap-6" data-reveal-stagger="120">
                        <x-arrow-block align="center" icon-color="text-text-high">
                            Acompanhamento contínuo com revisões mensais do seu plano.
                        </x-arrow-block>
                        <x-arrow-block align="center" icon-color="text-text-high">
                            Acesso direto ao seu consultor, em tempo integral.
                        </x-arrow-block>
                        <x-arrow-block align="center" icon-color="text-text-high">
                            Estratégias exclusivas adaptadas ao seu momento de vida.
                        </x-arrow-block>
                        <x-arrow-block align="center" icon-color="text-text-high">
                            Decisões financeiras com suporte em tempo real.
                        </x-arrow-block>
                    </div>
                </div>

                <x-fr-button
                    variant="white"
                    class="text-text-dark! md:self-start"
                    data-reveal="up"
                    href="{{ route('key-account') }}"
                >
                    Entrar em contato
                </x-fr-button>
            </div>

            <div class="hidden md:block" data-reveal="left">
                <img
                    src="{{ asset('images/key-account-premium.webp') }}"
                    alt="Pessoa no topo de uma escadaria"
                    class="w-full md:w-[calc(100%_+_max(0px,50vw_-_44rem))] md:max-w-none"
                />
            </div>
        </div>
    </section>

    {{-- 8. EDUCA FIRE --}}
    <section class="section">
        <div class="container">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Educa Fire </x-fr-text>
                </x-slot:header>
                <x-slot:title>
                    Aprenda a <mark>transformar vidas</mark> com finanças.
                </x-slot:title>
                <x-slot:description class="text-xxs!">
                    O Educa Fire é para quem quer ir além aprender a ensinar finanças e construir liberdade financeira
                    ajudando outras pessoas. Workshop, mentoria e formação com a metodologia Firece.
                </x-slot:description>
                <x-slot:actions>
                    <x-fr-button
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+ser+avisado+sobre+a+EducaFire&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Me avise quando estiver disponível
                    </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>
        </div>
    </section>
</x-layout.landing>
