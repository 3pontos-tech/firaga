<x-layout.landing headerTheme="dark" splashFrom="#09090a" splashTo="#09090a" splashLogoClass="text-brand-primary">
    <x-slot:metatags>
        <title>Nossos Serviços | {{ config('app.name') }}</title>
        <meta
            name="description"
            content="Cada pessoa chega com uma situação diferente. Cada serviço da Fire|ce foi construído para uma fase específica da jornada financeira."
        />
    </x-slot:metatags>

    {{-- 1. HERO --}}
    <section id="hero" class="dark bg-elevation-surface pt-(--section-first-gap) pb-16 sm:pt-27.5">
        <div class="container flex flex-col items-center gap-11">
            <x-fr-headline size="md" data-reveal="up">
                <x-slot:title>
                    <mark>Como podemos</mark> te ajudar?
                </x-slot:title>
                <x-slot:description>
                    Cada pessoa chega com uma situação diferente. Cada serviço foi construído para uma fase específica
                    da jornada financeira.
                </x-slot:description>
            </x-fr-headline>

            <div class="border-border-base w-full border-t pt-4" data-reveal="up">
                <div class="flex items-center justify-center gap-4 sm:gap-8">
                    <div class="flex flex-col items-start gap-2">
                        <p class="font-display text-brand-primary text-md font-bold">+10 anos</p>
                        <p class="text-text-medium text-xxxs font-bold uppercase">De mercado</p>
                    </div>

                    <div class="bg-border-base w-px self-stretch"></div>

                    <div class="flex flex-col items-start gap-2">
                        <p class="font-display text-brand-primary text-md font-bold">300%</p>
                        <p class="text-text-medium text-xxxs font-bold uppercase">Cres. anual</p>
                    </div>

                    <div class="bg-border-base w-px self-stretch"></div>

                    <div class="flex flex-col items-start gap-2">
                        <p class="font-display text-brand-primary text-md font-bold">+2 mil</p>
                        <p class="text-text-medium text-xxxs font-bold uppercase">Clientes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. FLAMMA --}}
    <section id="flamma" class="section">
        <div class="container flex flex-col gap-11">
            <div class="mx-auto">
                <img src="{{ asset('images/logos/flamma-logo.svg') }}" alt="Logo Flamma" class="h-8.5 w-auto" />
            </div>
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Educação financeira pessoal como
                    <span class="from-flamma-primary to-flamma-secondary bg-linear-to-r bg-clip-text text-transparent">
                        benefício corporativo
                    </span>
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
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline size="md" container-class="mx-auto max-w-[658px]" data-reveal="up">
                <x-slot:title class="text-text-light!">
                    Como funciona?
                </x-slot:title>
                <x-slot:description class="text-text-light!">
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
                class="grid w-full grid-cols-1 divide-y divide-[#d9d9d9] overflow-hidden rounded-md border border-white md:mt-12 md:grid-cols-2 md:divide-x lg:grid-cols-4 lg:divide-y-0"
                data-reveal-stagger="140"
            >
                <x-numbered-step class="p-4" data-reveal="up" number="01" title="Contratação" inverted>
                    A empresa contrata pacotes de horas mensais, semestrais ou anuais para todos os colaboradores.
                </x-numbered-step>

                <x-numbered-step class="p-4" data-reveal="up" number="02" title="Agendamento" inverted>
                    Cada colaborador agenda seu atendimento diretamente pela plataforma Flamma, quando quiser.
                </x-numbered-step>

                <x-numbered-step class="p-4" data-reveal="up" number="03" title="Atendimento" inverted>
                    Sessões individuais de 60 minutos com consultores especializados, online ou presencial.
                </x-numbered-step>

                <x-numbered-step class="p-4" data-reveal="up" number="04" title="Relatórios de impacto" inverted>
                    O RH acompanha a adesão e os resultados com relatórios consolidados de uso e evolução.
                </x-numbered-step>
            </div>
        </div>
    </section>

    {{-- 4. PLANEJAMENTO FINANCEIRO --}}
    <section id="planejamento" class="section">
        <div class="container grid gap-8 md:grid-cols-[652fr_538fr] md:items-center md:gap-16 lg:gap-[9.15rem]">
            <div class="flex flex-col gap-8">
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

                <div class="flex flex-col gap-4" data-reveal="up">
                    <x-fr-heading size="xs" class="sm:text-xs!">
                        O que muda na sua vida quando existe planejamento financeiro?
                    </x-fr-heading>

                    <div class="flex flex-col gap-8" data-reveal-stagger="120">
                        <x-arrow-block align="center">Mais organização financeira.</x-arrow-block>
                        <x-arrow-block align="center">Clareza para tomar decisões importantes.</x-arrow-block>
                        <x-arrow-block align="center">Segurança para investir.</x-arrow-block>
                        <x-arrow-block align="center">Controle sobre o próprio dinheiro.</x-arrow-block>
                        <x-arrow-block align="center">Construção patrimonial sustentável.</x-arrow-block>
                        <x-arrow-block align="center">Mais tranquilidade para planejar o futuro.</x-arrow-block>
                    </div>
                </div>
            </div>

            <div class="hidden w-full md:block" data-reveal="scale">
                <div class="relative aspect-538/596 w-full overflow-hidden rounded-lg">
                    <img
                        src="{{ asset('images/servicos-imagem_1.webp') }}"
                        alt="Consultor e cliente em uma sessão de planejamento financeiro"
                        class="h-full w-full object-cover object-bottom"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- 5. PLANOS --}}
    <section id="planos" class="section bg-elevation-01dp scroll-mt-(--header-height) py-16">
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
                                <hr class="border-brand-primary" />

                                <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                                    Dê o primeiro passo
                                </x-fr-text>

                                <ul class="flex flex-col gap-4">
                                    <x-plan-feature featured>Organização Anual</x-plan-feature>
                                    <x-plan-feature>Mapa financeiro</x-plan-feature>
                                    <x-plan-feature>Construção de Reserva</x-plan-feature>
                                    <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                                    <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                                </ul>
                            </div>
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
                            content-gap="lg"
                            tagline="“Quero acelerar minha independência financeira”"
                        >
                            <div class="flex flex-col gap-4">
                                <x-fr-heading size="sm">Perfil Platinum</x-fr-heading>
                                <x-fr-text>
                                    Para quem está começando a organizar sua vida financeira e deseja mais
                                    tranquilidade.
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
                                <hr class="border-brand-primary" />

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
                    </div>

                    {{-- Black --}}
                    <div
                        class="transition-opacity duration-300 [grid-area:card] md:pointer-events-auto! md:opacity-100! md:[grid-area:auto]"
                        :class="selected === 'black' ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                    >
                        <x-plan-card
                            data-reveal="up"
                            variant="filled"
                            content-gap="lg"
                            tagline="“Quero fazer meu dinheiro trabalhar por mim” "
                        >
                            <div class="flex flex-col gap-4">
                                <x-fr-heading size="sm" class="text-text-light!">Perfil Black</x-fr-heading>
                                <x-fr-text class="text-text-light!">
                                    Para quem já alcançou a liberdade financeira e quer proteger e aumentar seu
                                    patrimônio.
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
                                    <x-plan-feature featured inverted>Organização Anual</x-plan-feature>
                                    <x-plan-feature inverted>Construção de Reserva Internacional</x-plan-feature>
                                    <x-plan-feature inverted>Estratégias Exclusivas</x-plan-feature>
                                    <x-plan-feature inverted>Carteiras Personalizadas</x-plan-feature>
                                    <x-plan-feature inverted>Acompanhamento Personalizado</x-plan-feature>
                                </ul>
                            </div>
                        </x-plan-card>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6. FLARE (IA) --}}
    <section id="flare" class="section">
        <div class="container">
            <div
                class="relative overflow-hidden rounded-2xl bg-linear-to-r from-[#f4f2ea] to-[#f1d12a] p-8 md:px-16 md:py-[4.375rem]"
            >
                {{-- Arcos concêntricos decorativos: domos que nascem na base do card --}}
                <div
                    class="pointer-events-none absolute -bottom-[11.5%] left-1/2 h-[123.5%] w-[89.2%] -translate-x-1/2 rounded-t-full bg-[#fdfdff]/15"
                ></div>
                <div
                    class="pointer-events-none absolute bottom-0 left-1/2 h-[74%] w-[66.5%] -translate-x-1/2 rounded-t-full bg-[#fdfdff]/15"
                ></div>

                <div class="relative flex flex-col gap-10 md:flex-row md:items-center md:justify-between md:gap-12">
                    <div class="flex flex-col gap-4 md:basis-[52.6%]" data-reveal="up">
                        <img
                            src="{{ asset('images/logos/flare-logo.svg') }}"
                            alt="Logo Flare"
                            class="h-[22px] w-auto self-start"
                        />
                        <x-fr-headline align="left">
                            <x-slot:title>
                                Seu dinheiro organizado com IA
                            </x-slot:title>
                            <x-slot:description class="text-text-high!">
                                Se você quer dar o primeiro passo para sua tranquilidade financeira ou entender como
                                funciona uma consultoria, conheça o Flare, uma IA treinada pelos melhores consultores
                                financeiros do país para te ajudar a começar.
                            </x-slot:description>
                        </x-fr-headline>
                    </div>

                    <div class="w-full rounded-md bg-white p-8 md:basis-[43.4%]" data-reveal="up">
                        <form class="flex flex-col gap-8">
                            @csrf
                            <div class="flex flex-col gap-4">
                                <x-fr-text class="text-text-high! font-bold!">Nome</x-fr-text>
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Digite seu nome"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-4 focus:outline-none"
                                />
                            </div>
                            <div class="flex flex-col gap-4">
                                <x-fr-text class="text-text-high! font-bold!">E-mail</x-fr-text>
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="exemplo@email.com"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-4 focus:outline-none"
                                />
                            </div>
                            <div class="flex flex-col gap-4">
                                <x-fr-text class="text-text-high! font-bold!">Telefone</x-fr-text>
                                <input
                                    type="tel"
                                    name="phone"
                                    placeholder="(12) 9 0000-0000"
                                    class="border-border-base focus:border-brand-primary placeholder:text-text-medium w-full rounded-sm border p-4 focus:outline-none"
                                />
                            </div>
                            <button
                                type="submit"
                                class="font-display text-text-dark w-full rounded-sm bg-[#f1d12a] px-4 py-2.5 text-sm font-bold transition-opacity hover:opacity-90 md:w-auto md:self-end"
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
    <section id="premium" class="section dark bg-elevation-surface overflow-hidden py-20">
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

            <div
                class="relative hidden overflow-hidden rounded-[20px] md:block md:w-[calc(100%_+_max(0px,50vw_-_46rem))] md:max-w-none"
                data-reveal="left"
            >
                <img
                    src="{{ asset('images/man-walking-stair.jpg') }}"
                    alt="Pessoa no topo de uma escadaria"
                    class="block w-full"
                />

                <x-organic-cutout />
            </div>
        </div>
    </section>

    {{-- 8. EDUCA FIRE --}}
    <section id="educafire" class="section pb-20">
        <div class="container">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Educa Fire </x-fr-text>
                </x-slot:header>
                <x-slot:title>
                    Aprenda a <mark>transformar vidas</mark> com finanças.
                </x-slot:title>
                <x-slot:description class="text-text-high!">
                    O Educa Fire é para quem quer ir além aprender a ensinar finanças e construir liberdade financeira
                    ajudando outras pessoas. Workshop, mentoria e formação com a metodologia Fire|ce.
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
