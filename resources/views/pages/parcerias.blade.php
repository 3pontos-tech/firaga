<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section class="section-first">
        <div class="container flex flex-col items-center gap-8" data-reveal-stagger="140">
            <x-fr-headline size="2xl" data-reveal="up">
                <x-slot:header>
                    <div class="flex w-full flex-col items-center justify-center gap-2">
                        <x-logo-badge class="justify-center"> Parcerias </x-logo-badge>
                    </div>
                </x-slot:header>

                <x-slot:title>
                    A transformação se constrói com <mark>boas alianças</mark>
                </x-slot:title>
                <x-slot:description>
                    Não trabalhamos com parcerias de vitrine. Buscamos quem tem propósito alinhado e algo real a
                    construir junto e estamos prontos para investir de verdade nessa construção.
                </x-slot:description>

                <x-slot:actions class="my-4">
                    <x-fr-button> Quero fazer parte </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>
        </div>
    </section>

    <section class="section">
        <div class="bg-brand-primary relative my-28 h-56 w-full overflow-hidden">
            <x-logo
                class="text-brand-secondary absolute top-0 left-0 z-0 h-75! w-auto -translate-x-1/4 -translate-y-1/6"
            />
            <img
                src="{{ asset('images/image-1.webp') }}"
                alt="Imagem de homem"
                class="absolute right-0 bottom-0 z-0 h-full w-auto object-cover"
            />
            <div
                class="from-brand-primary/32 to-brand-secondary/24 pointer-events-none absolute inset-0 z-10 bg-linear-to-t"
            ></div>
        </div>

        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" data-reveal="up">
                <x-slot:title>
                    Quem pode ser parceiro da <mark>Firece</mark>?
                </x-slot:title>
                <x-slot:description>
                    Qualquer profissional, empresa ou instituição com sinergia de propósito. Se você quer transformar a
                    relação das pessoas com o dinheiro de algum ângulo provavelmente tem espaço aqui
                </x-slot:description>
            </x-fr-headline>

            <div class="flex flex-col gap-4" data-reveal="up">
                <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                <div class="flex flex-col gap-8" data-reveal-stagger="120">
                    <x-arrow-block eyebrow="Audiencia" title="Influenciadores e criadores de conteúdo">
                        Você tem seguidores que confiam em você. A gente tem o produto e a metodologia. Juntos, você
                        monetiza sua influência enquanto entrega valor real para sua audiência
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Corporativo" title="Empresas e RH corporativo">
                        Quer oferecer educação financeira como benefício para sua equipe? A Flamma foi criada exatamente
                        para isso e a Firece cuida de tudo
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Expertise" title="Profissionais e especialistas de mercado">
                        Contador, advogado, coach, terapeuta financeiro você atende pessoas que precisam de planejamento
                        financeiro. A parceria amplia o que você oferece sem aumentar sua operação
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Educação" title="Instituições educacionais">
                        Escolas, universidades e cursos que querem integrar educação financeira real no currículo não
                        teoria, mas prática com metodologia comprovada
                    </x-arrow-block>

                    <x-arrow-block eyebrow="Tech" title="Instituições educacionais">
                        Produtos financeiros, fintechs, plataformas de benefícios se você tem tech e precisa de
                        conteúdo, metodologia ou consultoria para seu usuário, tem conversa a ter
                    </x-arrow-block>
                </div>
            </div>
        </div>
    </section>

    <section class="section flex flex-col items-center gap-8 pt-7">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Três formas de <mark>construir juntos</mark>
                </x-slot:title>
                <x-slot:description>
                    Avaliamos cada oportunidade individualmente. Mas existem três formatos que usamos com mais
                    frequência
                </x-slot:description>
            </x-fr-headline>
        </div>

        <div
            class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
            data-reveal-stagger="140"
        >
            <x-numbered-step
                class="bg-elevation-01dp p-8"
                data-reveal="up"
                number="01"
                title="Parceria comercial"
                :show-chevron="false"
            >
                Você indica clientes para a Firece e recebe por isso. Modelo simples, sem burocracia você foca no
                relacionamento, a gente foca no atendimento. Ideal para quem tem audiência ou rede de contatos
                qualificada.

                <x-slot:footer>
                    <div class="flex items-center gap-2">
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Indicação </x-fr-text>
                        <div class="bg-brand-primary size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Comissão </x-fr-text>
                        <div class="bg-brand-primary size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Sem operação </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step
                class="bg-elevation-01dp p-8"
                data-reveal="up"
                number="02"
                title="Projeto educacional conjunto"
                :show-chevron="false"
            >
                Co-criamos conteúdo, cursos, workshops ou programas de educação financeira com a sua marca. A Firece
                entra com metodologia, especialistas e estrutura você entra com canal e audiência.

                <x-slot:footer>
                    <div class="flex items-center gap-2">
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Co-criação </x-fr-text>
                        <div class="bg-brand-primary size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Conteúdo </x-fr-text>
                        <div class="bg-brand-primary size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Workshops </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step
                class="bg-elevation-01dp p-8"
                data-reveal="up"
                number="03"
                title="Joint Venture estratégico"
                :show-chevron="false"
            >
                Para quem quer construir algo maior um produto, uma solução, um canal novo. Avaliamos projetos com
                potencial real e, quando há sinergia, investimos tempo, estrutura e recursos juntos.

                <x-slot:footer>
                    <div class="flex items-center gap-2">
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Produto Conjunto </x-fr-text>
                        <div class="bg-brand-primary size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Investimento mútuo </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>
        </div>
    </section>

    <section class="section py-20">
        <div class="container flex flex-col gap-8">
            <x-fr-headline align="left" data-reveal="up">
                <x-slot:title>
                    Eles começaram do mesmo lugar
                </x-slot:title>
                <x-slot:description>
                    Para qualquer vaga, o que mais importa é para quê você quer estar aqui. Experiência se constrói
                    postura e propósito são suas.
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

    <x-lead-form
        :select-options="
            [
           'consultor-financeiro' => 'Consultor Financeiro',
           'trainee' => 'Trainee',
           'marketing' => 'Marketing',
           'tecnologia' => 'Tecnologia',
           'operacoes' => 'Operações',
     ]
        "
        submit-label="Enviar currículo"
    />
</x-layout.landing>
