<x-layout.landing theme="metallic" splash-from="var(--elevation-surface)" splash-to="var(--elevation-surface)">
    <section class="section-first">
        <div class="container flex flex-col items-center gap-8" data-reveal-stagger="140">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-logo-badge class="justify-center"> Nossos serviços </x-logo-badge>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    Seu patrimônio merece mais do que organização
                </x-slot:title>
                <x-slot:description>
                    O modelo de atendimento premium da Firece para quem exige personalização, estratégia avançada e
                    confidencialidade em cada decisão.
                </x-slot:description>

                <x-slot:footer>
                    <x-stat-grid
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

    <section class="section bg-elevation-01dp border-border-base rounded-t-lg border-y px-4 py-11">
        <div class="container flex flex-col gap-8 md:flex-row md:items-start md:gap-16" data-reveal-stagger="120">
            <div class="relative md:order-2 md:basis-2/5 md:self-stretch">
                <div
                    class="from-elevation-surface/0 to-elevation-surface/10 absolute inset-0 z-10 bg-linear-to-b md:hidden"
                ></div>
                <img
                    src="{{ asset('images/guys-looking-at-notebook-but-gray.png') }}"
                    alt="Imagem dos caras cinza"
                    class="h-50 w-auto md:h-full md:w-full md:rounded-lg md:object-cover"
                    data-reveal="left"
                />
            </div>

            <div class="flex flex-col gap-8 md:order-1 md:flex-1">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:header>
                        <x-fr-text size="sm" class="text-text-high! font-semibold!"> Key Account </x-fr-text>
                    </x-slot:header>
                    <x-slot:title>
                        Para quem não aceita menos do que <mark>alta performance</mark>
                    </x-slot:title>
                </x-fr-headline>

                <div class="flex flex-col gap-4" data-reveal="up">
                    <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                    <div class="flex flex-col gap-8" data-reveal-stagger="120">
                        <x-arrow-block
                            icon-color="text-text-high"
                            title="Patrimônio relevante, objetivos de longo prazo"
                        >
                            Você construiu algo que precisa ser protegido e expandido com inteligência
                        </x-arrow-block>

                        <x-arrow-block icon-color="text-text-high" title="Decisões financeiras complexas e recorrentes">
                            Investimentos, estrutura familiar, bens você precisa de alguém que pense junto
                        </x-arrow-block>

                        <x-arrow-block icon-color="text-text-high" title="Interesse em exposição internacional">
                            Dólar, libra, ativos em NY e Londres parte da sua estratégia já está ou deveria estar fora
                            do Brasil
                        </x-arrow-block>

                        <x-arrow-block icon-color="text-text-high" title="Discrição e exclusividade como padrão">
                            Você não quer um atendente. Quer um consultor que te conhece de verdade
                        </x-arrow-block>
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
                    <span class="text-brand-primary font-bold">Matheus</span>, pela primeira vez na vida eu tenho
                    reserva de emergência.
                </x-testimonial>

                <x-fr-button
                    data-reveal="up"
                    tag="a"
                    href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+key+account&type=phone_number&app_absent=0"
                    target="_blank"
                >
                    Esse sou eu
                </x-fr-button>
            </div>
        </div>
    </section>

    <section class="section mt-28 flex flex-col items-center gap-8">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Você busca inteligência, discrição e excelência no cuidado com o seu patrimônio?
                </x-slot:title>
                <x-slot:description>
                    O Key Account é para quem não aceita menos do que alta performance. Vamos construir o próximo nível
                    da sua jornada financeira.
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div class="w-full md:container md:mx-auto">
            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y md:grid-cols-2 md:gap-6 md:divide-y-0 md:border-y-0"
                data-reveal-stagger="140"
            >
                <x-numbered-step
                    class="md:border-border-base p-8 md:rounded-lg md:border"
                    data-reveal="up"
                    number="01"
                    title="Qual o perfil ideal para o Key Account?"
                >
                    Pessoas com patrimônio relevante que buscam estratégias avançadas de proteção e crescimento, com
                    atendimento altamente personalizado.

                    <x-slot:footer>
                        <div class="flex items-center gap-3">
                            <x-fr-text size="sm" class="text-text-high!"> Proteção </x-fr-text>
                            <div class="bg-text-high size-1 rounded-full"></div>
                            <x-fr-text size="sm" class="text-text-high!"> Crescimento </x-fr-text>
                        </div>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="md:border-border-base p-8 md:rounded-lg md:border"
                    data-reveal="up"
                    number="02"
                    title="É possível contratar o Key Account para gestão internacional?"
                >
                    Sim. O Key Account inclui estratégias de blindagem patrimonial e alocação internacional, respeitando
                    o perfil do cliente e as normas regulatórias.

                    <x-slot:footer>
                        <div class="flex items-center gap-3">
                            <x-fr-text size="sm" class="text-text-high!"> Blindagem Patrimonial </x-fr-text>
                            <div class="bg-text-high size-1 rounded-full"></div>
                            <x-fr-text size="sm" class="text-text-high!"> Internacionalização </x-fr-text>
                        </div>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="md:border-border-base p-8 md:rounded-lg md:border"
                    data-reveal="up"
                    number="03"
                    title="Com que frequência acontecem as reuniões?"
                >
                    O acompanhamento é contínuo, com revisões periódicas e disponibilidade para reuniões emergenciais
                    sempre que necessário.

                    <x-slot:footer>
                        <div class="flex items-center gap-3">
                            <x-fr-text size="sm" class="text-text-high!"> Acompanhamento </x-fr-text>
                            <div class="bg-text-high size-1 rounded-full"></div>
                            <x-fr-text size="sm" class="text-text-high!"> Disponibilidade </x-fr-text>
                        </div>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step
                    class="md:border-border-base p-8 md:rounded-lg md:border"
                    data-reveal="up"
                    number="04"
                    title="Planejamento Sucessório"
                >
                    Sim. Planejamos a sucessão de forma estratégica para garantir tranquilidade, segurança e
                    continuidade para seu legado

                    <x-slot:footer>
                        <div class="flex items-center gap-3">
                            <x-fr-text size="sm" class="text-text-high!"> Sucessão </x-fr-text>
                            <div class="bg-text-high size-1 rounded-full"></div>
                            <x-fr-text size="sm" class="text-text-high!"> Legado </x-fr-text>
                        </div>
                    </x-slot:footer>
                </x-numbered-step>
            </div>
        </div>
    </section>

    <section class="section mt-28">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Qual é o seu momento?
                </x-slot:title>
                <x-slot:description>
                    Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                    <span class="text-text-high">sua realidade</span> e só para ela.
                </x-slot:description>
            </x-fr-headline>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2" data-reveal-stagger="140">
                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Isabelly Victória"
                    plan="Plano Platinum"
                    avatar="https://lh3.googleusercontent.com/a-/ALV-UjWI5RyOf8Nhr9tlBG2g5XqtbTwqLIDu9ABSM1jlCBIxJ36Dn-ZiBw=w72-h72-p-rp-mo-br100"
                    metric="0% → 20% da renda investida"
                >
                    Quando falamos em organizar nossas finanças sempre imaginamos que é possível sozinho, mas garanto
                    que com a orientação certa o objetivo é alcançado muito mais rápido e de forma consciente.
                    <span class="text-brand-primary font-bold"
                        >A consultoria é excepcional e traz clareza sobre gastos x investimentos x lazer.</span
                    >
                </x-testimonial>

                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Paulo Lima"
                    plan="Plano Black"
                    avatar="https://lh3.googleusercontent.com/a-/ALV-UjV9yCw5Vw5oINtOnjLuCrpfCke-DHgX9lDXhRZayImkNc1AsaF_Pw=w72-h72-p-rp-mo-br100"
                    metric="0% → 20% da renda investida"
                >
                    O trabalho da Fire me surpreendeu, porque já entendo de finanças, investimentos até que
                    razoavelmente e pensei que seria mais uma empresa querendo vender qualquer coisa, mas aqui é um
                    <span class="text-brand-primary font-bold">trabalho minucioso com visão de futuro.</x-testimonial
                >
            </div>
        </div>
    </section>

    <x-cta-banner
        class="mt-28"
        variant="light"
        cta-label="Ir para o proximo nível"
        cta-href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+key+account&type=phone_number&app_absent=0"
        cta-target="_blank"
    >
        <x-slot:title>
            Pronto para o próximo nível?
        </x-slot:title>
        <x-slot:description>
            Uma conversa de 30 minutos é suficiente para entender se o Key Account faz sentido para o seu momento. Sem
            compromisso. Sem proposta antes de ouvir você.
        </x-slot:description>
    </x-cta-banner>

    <section class="section mt-28 mb-11">
        <div class="container flex flex-col gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Perguntas frequentes
                </x-slot:title>
                <x-slot:description></x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-3" data-reveal-stagger="140">
                <x-faq-item data-reveal="up" question="Como funciona?">
                    Atuamos lado a lado com quem busca proteção, inteligência e alta performance na gestão do
                    patrimônio. Aqui, o planejamento financeiro vai além da organização: ele se transforma em um
                    instrumento de segurança, expansão e legado.
                </x-faq-item>

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

                <x-faq-item data-reveal="up" question="Por que optar pelo Key Account?">
                    Mais do que um serviço financeiro, o Key Account é uma experiência de parceria contínua. Analisamos
                    profundamente sua vida financeira, cruzamos dados patrimoniais e familiares, entendemos seus
                    objetivos de longo prazo e criamos um plano sob medida que evolui com você. Acompanhamos cada tomada
                    de decisão importante, alertamos sobre riscos e oportunidades e adaptamos a estratégia conforme sua
                    realidade muda. O cliente Key Account não é um número: é um relacionamento que atravessa fases, gera
                    confiança e entrega resultados consistentes.
                </x-faq-item>
            </div>
        </div>
    </section>
</x-layout.landing>
