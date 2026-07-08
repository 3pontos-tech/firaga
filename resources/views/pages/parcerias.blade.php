<x-layout.landing
    splashFrom="var(--color-elevation-surface)"
    splashTo="var(--color-elevation-surface)"
    splashLogoClass="text-brand-primary"
>
    <section class="section-first">
        <div
            class="container flex flex-col items-center gap-8 pt-8 pb-10 md:pt-20 md:pr-60 md:pb-16 md:pl-60"
            data-reveal-stagger="140"
        >
            <x-fr-headline size="2xl" data-reveal="up">
                <x-slot:title>
                    A transformação se constrói com <mark>boas alianças</mark>
                </x-slot:title>
                <x-slot:description>
                    Não trabalhamos com parcerias de vitrine. Buscamos quem tem propósito alinhado e algo real a
                    construir junto e estamos prontos para investir de verdade nessa construção.
                </x-slot:description>
            </x-fr-headline>
        </div>
    </section>

    <hr class="border-border-base" />

    <section class="section md:mt-20!">
        <img
            src="{{ asset('images/parcerias_1x.webp') }}"
            alt="Aperto de mãos representando uma parceria"
            class="aspect-[393/328] w-full object-cover md:hidden"
        />

        <div class="container mt-8 flex flex-col gap-8 md:mt-0 md:flex-row md:items-start md:gap-16">
            <div class="flex flex-col gap-8 md:basis-3/5">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:title>
                        Quem pode ser parceiro da <strong><mark>Fire</mark>|<mark>ce</mark></strong
                        >?
                    </x-slot:title>
                    <x-slot:description>
                        Qualquer profissional, empresa ou instituição com sinergia de propósito. Se você quer
                        transformar a relação das pessoas com o dinheiro de algum ângulo provavelmente tem espaço aqui
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex flex-col gap-4" data-reveal="up">
                    <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                    <div class="flex flex-col gap-8" data-reveal-stagger="120">
                        <x-arrow-block eyebrow="Audiência" title="Influenciadores e criadores de conteúdo.">
                            Você tem seguidores que confiam em você. A gente tem o produto e a metodologia. Juntos, você
                            monetiza sua influência enquanto entrega valor real para sua audiência.
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Corporativo" title="Empresas e RH corporativo.">
                            Quer oferecer educação financeira como benefício para sua equipe? A Flamma foi criada
                            exatamente para isso e a Firece cuida de tudo.
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Expertise" title="Profissionais e especialistas de mercado.">
                            Contador, advogado, coach, terapeuta financeiro você atende pessoas que precisam de
                            planejamento financeiro. A parceria amplia o que você oferece sem aumentar sua operação.
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Educação" title="Instituições educacionais.">
                            Escolas, universidades e cursos que querem integrar educação financeira real no currículo
                            não teoria, mas prática com metodologia comprovada.
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Tech" title="Soluções financeiras digitais.">
                            Produtos financeiros, fintechs, plataformas de benefícios se você tem tech e precisa de
                            conteúdo, metodologia ou consultoria para seu usuário, tem conversa a ter
                        </x-arrow-block>
                    </div>
                </div>
            </div>

            <div class="relative hidden w-full md:block md:min-h-160 md:basis-2/5" data-reveal="scale">
                <div class="absolute top-0 left-0 -z-1 rounded-lg bg-linear-to-b"></div>
                <img
                    src="{{ asset('images/parcerias_1x.webp') }}"
                    alt="Aperto de mãos representando uma parceria"
                    class="absolute inset-0 h-full w-full rounded-lg object-contain object-top"
                />
            </div>
        </div>
    </section>

    <section class="section flex flex-col items-center gap-8 md:mt-20!">
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

        <div class="w-full md:container md:mx-auto">
            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y md:grid-cols-3 md:gap-6 md:divide-y-0 md:border-y-0"
                data-reveal-stagger="140"
            >
                <x-numbered-step
                    class="bg-elevation-01dp md:border-border-base p-8 md:rounded-lg md:border"
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
                    class="bg-elevation-01dp md:border-border-base p-8 md:rounded-lg md:border"
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
                    class="bg-elevation-01dp md:border-border-base p-8 md:rounded-lg md:border"
                    data-reveal="up"
                    number="03"
                    title="Joint Venture estratégico"
                    :show-chevron="false"
                >
                    Para quem quer construir algo maior um produto, uma solução, um canal novo. Avaliamos projetos com
                    potencial real e, quando há sinergia, investimos tempo, estrutura e recursos juntos.

                    <x-slot:footer>
                        <div class="flex items-center gap-2">
                            <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                                Produto Conjunto
                            </x-fr-text>
                            <div class="bg-brand-primary size-1 rounded-full"></div>
                            <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                                Investimento mútuo
                            </x-fr-text>
                        </div>
                    </x-slot:footer>
                </x-numbered-step>
            </div>
        </div>
    </section>

    <x-partner-form class="pt-8 pb-8 md:mt-15 md:pt-8 md:pr-80 md:pb-8 md:pl-80" submit-label="Enviar proposta" />
</x-layout.landing>
