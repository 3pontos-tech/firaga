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
                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Audiencia</x-fr-text>
                            <x-fr-heading size="xxs"> Influenciadores e criadores de conteúdo </x-fr-heading>
                            <x-fr-text size="sm">
                                Você tem seguidores que confiam em você. A gente tem o produto e a metodologia. Juntos,
                                você monetiza sua influência enquanto entrega valor real para sua audiência
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Corporativo</x-fr-text>
                            <x-fr-heading size="xxs"> Empresas e RH corporativo </x-fr-heading>
                            <x-fr-text size="sm">
                                Quer oferecer educação financeira como benefício para sua equipe? A Flamma foi criada
                                exatamente para isso e a Firece cuida de tudo
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Expertise</x-fr-text>
                            <x-fr-heading size="xxs"> Profissionais e especialistas de mercado </x-fr-heading>
                            <x-fr-text size="sm">
                                Contador, advogado, coach, terapeuta financeiro você atende pessoas que precisam de
                                planejamento financeiro. A parceria amplia o que você oferece sem aumentar sua operação
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Educação</x-fr-text>
                            <x-fr-heading size="xxs"> Instituições educacionais </x-fr-heading>
                            <x-fr-text size="sm">
                                Escolas, universidades e cursos que querem integrar educação financeira real no
                                currículo não teoria, mas prática com metodologia comprovada
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5 shrink-0" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Tech</x-fr-text>
                            <x-fr-heading size="xxs"> Instituições educacionais </x-fr-heading>
                            <x-fr-text size="sm">
                                Produtos financeiros, fintechs, plataformas de benefícios se você tem tech e precisa de
                                conteúdo, metodologia ou consultoria para seu usuário, tem conversa a ter
                            </x-fr-text>
                        </div>
                    </div>
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
            <div class="bg-elevation-01dp flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Parceria comercial
                    </x-slot:title>
                    <x-slot:description>
                        Você indica clientes para a Firece e recebe por isso. Modelo simples, sem burocracia você foca
                        no relacionamento, a gente foca no atendimento. Ideal para quem tem audiência ou rede de
                        contatos qualificada.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-2">
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Indicação </x-fr-text>
                    <div class="bg-brand-primary size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Comissão </x-fr-text>
                    <div class="bg-brand-primary size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Sem operação </x-fr-text>
                </div>
            </div>

            <div class="bg-elevation-01dp flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">02</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Projeto educacional conjunto
                    </x-slot:title>
                    <x-slot:description>
                        Co-criamos conteúdo, cursos, workshops ou programas de educação financeira com a sua marca. A
                        Firece entra com metodologia, especialistas e estrutura você entra com canal e audiência.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-2">
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Co-criação </x-fr-text>
                    <div class="bg-brand-primary size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Conteúdo </x-fr-text>
                    <div class="bg-brand-primary size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Workshops </x-fr-text>
                </div>
            </div>

            <div class="bg-elevation-01dp flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">03</p>
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Joint Venture estratégico
                    </x-slot:title>
                    <x-slot:description>
                        Para quem quer construir algo maior um produto, uma solução, um canal novo. Avaliamos projetos
                        com potencial real e, quando há sinergia, investimos tempo, estrutura e recursos juntos.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-2">
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Produto Conjunto </x-fr-text>
                    <div class="bg-brand-primary size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!"> Investimento mútuo </x-fr-text>
                </div>
            </div>
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

    <section class="section">
        <div class="container flex flex-col gap-8">
            <x-fr-headline>
                <x-slot:title>
                    Pronto para começar?
                </x-slot:title>
                <x-slot:description>
                    Preencha abaixo e a gente entra em contato em até 2 dias úteis
                </x-slot:description>
            </x-fr-headline>

            <form class="flex flex-col gap-6">
                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">Nome</x-fr-text>
                    <input
                        type="text"
                        name="name"
                        class="border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">E-mail</x-fr-text>
                    <input
                        type="email"
                        name="email"
                        class="border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">Telefone</x-fr-text>
                    <input
                        type="tel"
                        name="phone"
                        class="border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">LinkedIn</x-fr-text>
                    <input
                        type="url"
                        name="linkedin"
                        class="border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none"
                    />
                </div>

                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">Vaga de interesse</x-fr-text>
                    <select
                        name="role"
                        class="border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none"
                    >
                        <option value="" disabled selected></option>
                        <option value="consultor-financeiro">Consultor Financeiro</option>
                        <option value="trainee">Trainee</option>
                        <option value="marketing">Marketing</option>
                        <option value="tecnologia">Tecnologia</option>
                        <option value="operacoes">Operações</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">Por que a Firece?</x-fr-text>
                    <textarea
                        name="message"
                        placeholder="Digite sua mensagem"
                        class="border-border-base placeholder:text-text-medium focus:border-brand-primary h-50 w-full resize-none rounded-sm border p-4 focus:outline-none"
                    ></textarea>
                </div>
            </form>

            <x-fr-button> Enviar currículo </x-fr-button>
        </div>
    </section>
</x-layout.landing>
