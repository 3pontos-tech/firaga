<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section class="section-first">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Você ganhou <mark>autonomia</mark> no trabalho. Mas ainda não ganhou <mark>nas finanças</mark>
                </x-slot:title>
                <x-slot:description>
                    Consultoria financeira para profissionais de tecnologia a única que entende PJ, renda em dólar e
                    stock options sem você precisar traduzir sua realidade
                </x-slot:description>
                <x-slot:actions>
                    <x-fr-button> Conhecer o code capital </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>

            <div class="bg-elevation-01dp border-border-base text-xxxs rounded-sm border p-4 font-mono leading-7">
                <div class="mb-3 flex gap-1.5">
                    <span class="size-3 rounded-full bg-red-300"></span>
                    <span class="size-3 rounded-full bg-yellow-100"></span>
                    <span class="size-3 rounded-full bg-green-300"></span>
                </div>
                <div>
                    <p><span class="text-text-low">// TODO: entender pra onde o dinheiro foi</span></p>
                    <p>
                        <span class="text-indigo-300">const </span
                        ><span class="text-text-high font-medium">patrimônio</span
                        ><span class="text-text-medium"> = [];</span>
                    </p>
                    <p>
                        <span class="text-indigo-300">let </span
                        ><span class="text-text-high font-medium">propósito</span
                        ><span class="text-text-medium"> = </span><span class="text-orange-300">undefined</span
                        ><span class="text-text-medium">;</span>
                    </p>
                    <p>&nbsp;</p>
                    <p><span class="text-text-low">// ERROR: CNPJ sem estratégia de distribuição</span></p>
                    <p><span class="text-text-low">// ERROR: USD sem alocação → reserva = null</span></p>
                    <p>&nbsp;</p>
                    <p>
                        <span class="text-indigo-300">function </span><span class="text-text-high">fix</span
                        ><span class="text-text-medium">() { </span><span class="text-indigo-300">return </span
                        ><span class="text-brand-primary">Code.Capital</span><span class="text-text-medium">; }</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section dark bg-elevation-surface mt-28 py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left">
                <x-slot:title>
                    Atendemos <mark>todo tipo</mark> de dev
                </x-slot:title>
                <x-slot:description>
                    CLT, PJ, freela ou remoto o planejamento é adaptado para o seu regime, não para um genérico.
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4" data-reveal="up">
                <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                <div class="flex flex-col gap-8" data-reveal-stagger="120">
                    <x-arrow-block eyebrow="Especialidade" title="PJ / CNPJ">
                        Pró-labore, distribuição de lucros e regime tributário usados a favor do seu patrimônio.
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Atendemos" title="Remoto USD / EUR">
                        Câmbio como estratégia de patrimônio, não só uma variável. Alocação inteligente em moeda forte.
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Atendemos" title="Stock Options">
                        Quando e como exercer, com visão de impacto tributário e estratégia de patrimônio de longo
                        prazo.
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Atendemos" title="CLT">
                        Planejamento financeiro além do salário: investimentos, reservas e objetivos de longo prazo.
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Atendemos" title="Freela">
                        Renda variável com estrutura sólida: reserva de emergência, fluxo de caixa e crescimento
                        sustentável.
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Atendemos" title="Mix de regimes">
                        CLT + freela + crypto + USD ao mesmo tempo. A realidade de muitos profissionais de tech hoje.
                    </x-arrow-block>
                </div>
            </div>
        </div>
    </section>

    <section class="section mt-28">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Caso real
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a sua realidade e só para
                    ela.
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-3" data-reveal="up">
                <x-fas-quote-left class="text-text-high size-4" />
                <x-fr-text class="text-text-low italic">
                    Antes, ao ver o saldo, acabava <span class="text-brand-primary">gastando por impulso</span>. Hoje,
                    meu dinheiro tem um propósito.
                </x-fr-text>
                <hr class="border-border-base w-full" />
                <div class="flex items-center gap-2">
                    <x-avatar src="https://i.pravatar.cc/80?img=12" alt="Image Danilo" />
                    <x-fr-text size="sm">Danilo</x-fr-text>
                    <div class="bg-border-base size-1 rounded-full"></div>
                    <x-fr-text size="sm">Desenvolvedor</x-fr-text>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <x-fr-text>
                    Danilo é desenvolvedor backend, trabalha como PJ e tinha um problema comum: faturava bem, mas o fim
                    do mês não refletia isso. Sem estrutura de distribuição de lucros ou destino definido para os
                    investimentos, o dinheiro simplesmente sumia.
                </x-fr-text>
                <x-fr-text>
                    Depois da consultoria com a Code Capital, organizou o CNPJ, montou uma carteira com propósito e
                    passou a não mexer nem na reserva de emergência. O diferencial foi ter uma consultoria que constrói
                    estratégia em vez de empurrar produto.
                </x-fr-text>
            </div>
        </div>
    </section>

    <section class="section bg-brand-primary mt-28 py-20">
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

    <section class="section mt-28 mb-11">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Perguntas frequentes
                </x-slot:title>
                <x-slot:description>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum
                    quis, pretium eu dui.
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-3" data-reveal-stagger="140">
                <x-faq-item data-reveal="up" question="O Key Account é para qualquer pessoa?">
                    Não. O modelo é pensado para quem já tem patrimônio relevante, renda acima da média ou decisões
                    financeiras complexas que exigem acompanhamento próximo e personalizado.
                </x-faq-item>

                <x-faq-item data-reveal="up" question="Qual a diferença entre o Key Account e os outros planos?">
                    No Key Account você tem um consultor dedicado, atendimento prioritário, estratégia patrimonial
                    avançada e acesso a alocação internacional — sem a padronização dos planos convencionais.
                </x-faq-item>

                <x-faq-item data-reveal="up" question="Como funciona o primeiro contato?">
                    Agendamos uma conversa de 30 minutos para entender o seu momento financeiro. Sem compromisso e sem
                    proposta antes de ouvir você.
                </x-faq-item>
            </div>
        </div>
    </section>
</x-layout.landing>
