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
                    <x-fr-button
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+ser+parceiro&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Quero fazer parte
                    </x-fr-button>
                </x-slot:actions>
            </x-fr-headline>
        </div>
    </section>

    <section class="section">
        <div class="bg-brand-primary relative my-28 h-56 w-full overflow-hidden md:hidden">
            <x-logo
                class="text-brand-secondary absolute top-0 left-0 z-0 h-75! w-auto -translate-x-1/4 -translate-y-1/6"
            />
            <img
                src="{{ asset('images/man-with-clock.png') }}"
                alt="Imagem de homem"
                class="absolute right-0 bottom-0 z-0 h-full w-auto object-cover"
            />
            <div
                class="from-brand-primary/32 to-brand-secondary/24 pointer-events-none absolute inset-0 z-10 bg-linear-to-t"
            ></div>
        </div>

        <div class="container flex flex-col gap-8 md:flex-row md:items-center md:gap-16">
            <div class="flex flex-col gap-8 md:basis-3/5">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:title>
                        Quem pode ser parceiro da <mark>Firece</mark>?
                    </x-slot:title>
                    <x-slot:description>
                        Qualquer profissional, empresa ou instituição com sinergia de propósito. Se você quer
                        transformar a relação das pessoas com o dinheiro de algum ângulo provavelmente tem espaço aqui
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
                            Quer oferecer educação financeira como benefício para sua equipe? A Flamma foi criada
                            exatamente para isso e a Firece cuida de tudo
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Expertise" title="Profissionais e especialistas de mercado">
                            Contador, advogado, coach, terapeuta financeiro você atende pessoas que precisam de
                            planejamento financeiro. A parceria amplia o que você oferece sem aumentar sua operação
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Educação" title="Instituições educacionais">
                            Escolas, universidades e cursos que querem integrar educação financeira real no currículo
                            não teoria, mas prática com metodologia comprovada
                        </x-arrow-block>

                        <x-arrow-block eyebrow="Tech" title="Instituições educacionais">
                            Produtos financeiros, fintechs, plataformas de benefícios se você tem tech e precisa de
                            conteúdo, metodologia ou consultoria para seu usuário, tem conversa a ter
                        </x-arrow-block>
                    </div>
                </div>
            </div>

            <div class="relative hidden w-full md:block md:min-h-160 md:basis-2/5" data-reveal="scale">
                <div
                    class="from-brand-primary to-brand-secondary absolute inset-0 -z-1 rounded-lg bg-linear-to-b"
                ></div>
                <img
                    src="{{ asset('images/man-with-clock.png') }}"
                    alt="Imagem de homem"
                    class="absolute inset-0 h-full w-full rounded-lg object-contain object-bottom"
                />
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

    <x-cta-banner
        cta-label="Quero ser parceiro"
        cta-href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+a+página+de+Parcerias+da+Fire%7Cce+e+quero+conversar+sobre+uma+possível+parceria&type=phone_number&app_absent=0"
        cta-target="_blank"
        footer="Toda parceria começa com uma conversa. O próximo projeto pode gerar valor para sua audiência, sua empresa e milhares de pessoas."
    >
        <x-slot:proof>
            <x-social-proof variant="dark">Parcerias construídas com propósito e resultado</x-social-proof>
        </x-slot:proof>

        <x-slot:title>
            Vamos construir algo relevante juntos?
        </x-slot:title>

        <x-slot:description>
            Seja para educação financeira, conteúdo, tecnologia ou novos produtos, buscamos parceiros que compartilhem
            nossa visão de transformar a relação das pessoas com o dinheiro através de soluções práticas e acessíveis.
        </x-slot:description>
    </x-cta-banner>

    <x-partner-form submit-label="Enviar proposta" />
</x-layout.landing>
