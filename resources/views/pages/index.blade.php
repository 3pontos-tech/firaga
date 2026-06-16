<x-layout.landing>
    <x-slot:metatags>
        <title>{{ $page?->meta_title ?? ($page?->title ?? config('app.name')) }}</title>
        <link rel="canonical" href="{{ $page?->url() ?? '' }}" />
        <meta name="description" content="{{ $page?->meta_description ?? '' }}" />
        <meta name="keywords" content="{{ $page?->meta_keywords ?? '' }}" />
        <meta property="og:title" content="{{ $page?->opengraph_title ?? '' }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page?->url() ?? '' }}" />
        <meta property="og:description" content="{{ $page?->opengraph_description }}" />
        <meta property="og:image" content="{{ asset('images/meta-logo.png') }}" />
        <meta property="og:image:alt" content="{{ $page?->opengraph_picture_alt }}" />
    </x-slot:metatags>

    <section
        class="section-first flex min-h-[calc(100dvh-var(--header-height))] flex-col items-center gap-4 md:min-h-0"
    >
        <div
            class="container flex flex-col items-center gap-8 md:flex-1 md:flex-row md:items-center md:justify-between md:gap-12"
            data-reveal-stagger="140"
        >
            <div class="flex w-full flex-col items-center gap-8 md:basis-3/5 md:items-start">
                <x-fr-headline size="2xl" align="left-desk" data-reveal="up">
                    <x-slot:header>
                        <x-social-proof align="left-desk">Mais de 9.000 investidores já fazem parte</x-social-proof>
                    </x-slot:header>

                    <x-slot:title class="md:text-7xl!">
                        Sua próxima conquista começa com <mark>Planejamento Financeiro</mark>
                    </x-slot:title>
                    <x-slot:description>
                        A <mark>Fire|ce</mark> ajuda a organizar sua vida financeira, controlar seu dinheiro com clareza
                        e tomar decisões inteligentes, sem depender de produtos empurrados por bancos ou investimentos
                        da moda.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex w-full flex-col items-center gap-4 md:items-start" data-reveal="up">
                    <x-fr-button
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Falar com um consultor
                    </x-fr-button>
                    <x-logo-badge class="justify-center md:justify-start">
                        Sem custo, sem compromisso, uma conversa rápida
                    </x-logo-badge>
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

        <div class="relative mt-auto w-full md:hidden" data-reveal="scale">
            <div
                class="from-brand-primary to-brand-secondary absolute inset-0 top-10 -z-1 rounded-t-lg bg-linear-to-b"
            ></div>
            <img src="{{ asset('images/man-with-clock.png') }}" alt="Imagem de homem" class="w-full" />
        </div>
    </section>

    <section class="section">
        <div class="container flex flex-col items-center gap-8 text-center">
            <x-fr-heading size="lg" data-reveal="up"> Reconhece alguma dessas histórias? </x-fr-heading>
            <div class="grid grid-cols-1 items-start gap-3 text-left md:grid-cols-3 md:gap-6" data-reveal-stagger="100">
                <div class="group flex flex-col gap-4" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Tenho dívidas que parecem não ter fim. Pago o mínimo e o saldo não cai
                    </x-fr-text>
                    <hr
                        class="border-border-base group-hover:border-brand-primary w-full transition-colors duration-300"
                    />
                </div>

                <div class="group flex flex-col gap-4" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Trabalho muito, ganho bem mas no fim do mês não sobra nada. E eu não sei por quê.
                    </x-fr-text>
                    <hr
                        class="border-border-base group-hover:border-brand-primary w-full transition-colors duration-300"
                    />
                </div>

                <div class="group flex flex-col gap-4" data-reveal="up">
                    <x-fas-quote-left class="text-brand-primary size-4" />
                    <x-fr-text class="text-text-low font-medium! italic">
                        Já poupo alguma coisa, mas sinto que meu dinheiro poderia estar rendendo muito mais.
                    </x-fr-text>
                    <hr
                        class="border-border-base group-hover:border-brand-primary w-full transition-colors duration-300"
                    />
                </div>
            </div>
            <x-logo-badge class="justify-center"> Não é falta de disciplina. É falta de um plano </x-logo-badge>
        </div>
    </section>

    <section class="section dark bg-elevation-surface px-4 py-20">
        <div
            class="container flex flex-col gap-8 md:flex-row md:items-stretch md:gap-12 md:gap-x-28"
            data-reveal-stagger="120"
        >
            <div class="md:order-2 md:basis-1/3 md:self-stretch" data-reveal="left">
                <img
                    src="{{ asset('images/guys-looking-at-notebook.png') }}"
                    alt="Imagem dos caras"
                    class="h-50 w-auto md:h-full md:w-full md:rounded-lg md:object-cover"
                />
            </div>

            <div class="flex flex-col gap-8 md:order-1 md:basis-2/3 md:gap-11">
                <x-fr-headline align="left" data-reveal="up">
                    <x-slot:title>
                        <mark>Independência para recomendar</mark> o que realmente faz sentido para você
                    </x-slot:title>
                    <x-slot:description>
                        A <mark>Fire|ce</mark> não possui vínculo com bancos, seguradoras ou instituições financeiras.
                    </x-slot:description>
                </x-fr-headline>

                <div
                    class="divide-border-base grid grid-cols-1 divide-y md:grid-cols-3 md:divide-x md:divide-y-0"
                    data-reveal-stagger="140"
                >
                    <div
                        class="flex flex-col gap-4 py-6 first:pt-0 last:pb-0 md:px-4 md:py-0 md:first:pl-0 md:last:pr-0"
                        data-reveal="up"
                    >
                        <x-icon-box icon="heroicon-c-user" />
                        <x-fr-headline align="left" size="sm" container-class="gap-2!">
                            <x-slot:title>
                                Isso significa que
                                <mark
                                    >nossas recomendações não são feitas com base em metas comerciais, comissões ou
                                    produtos específicos</mark
                                >
                            </x-slot:title>
                            <x-slot:description></x-slot:description>
                        </x-fr-headline>
                    </div>

                    <div
                        class="flex flex-col gap-4 py-6 first:pt-0 last:pb-0 md:px-4 md:py-0 md:first:pl-0 md:last:pr-0"
                        data-reveal="up"
                    >
                        <x-icon-box icon="heroicon-c-user" />
                        <x-fr-headline align="left" size="sm" container-class="gap-2!">
                            <x-slot:title>
                                Nosso compromisso é
                                <mark
                                    >construir estratégias alinhadas aos objetivos, momento de vida e realidade de cada
                                    cliente</mark
                                >
                            </x-slot:title>
                            <x-slot:description></x-slot:description>
                        </x-fr-headline>
                    </div>

                    <div
                        class="flex flex-col gap-4 py-6 first:pt-0 last:pb-0 md:px-4 md:py-0 md:first:pl-0 md:last:pr-0"
                        data-reveal="up"
                    >
                        <x-icon-box icon="heroicon-c-user" />
                        <x-fr-headline align="left" size="sm" container-class="gap-2!">
                            <x-slot:title>
                                Porque
                                <mark
                                    >planejamento financeiro de verdade começa pela confiança em quem está do seu
                                    lado</mark
                                >.
                            </x-slot:title>
                            <x-slot:description></x-slot:description>
                        </x-fr-headline>
                    </div>
                </div>

                <x-testimonial
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
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container grid grid-cols-1 items-center gap-8 md:grid-cols-2 md:gap-12 md:gap-x-28">
            <div class="flex flex-col items-center gap-8 md:items-start">
                <x-fr-headline align="left-desk" data-reveal="up">
                    <x-slot:title>
                        Clareza <mark>financeira</mark> começa com estratégia.
                    </x-slot:title>
                    <x-slot:description>
                        Sem curso, sem palestra, sem planilha genérica. Um plano construído para a
                        <mark>sua realidade</mark> e só para ela.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex w-full flex-col items-center gap-4" data-reveal="up">
                    <x-fr-button
                        class="w-full!"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Descobrir meu plano
                    </x-fr-button>
                    <x-logo-badge class="justify-center md:justify-start"> Simples assim. Sem enrolação. </x-logo-badge>
                </div>
            </div>

            <div
                class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y md:border"
                data-reveal-stagger="140"
            >
                <x-numbered-step class="p-8" data-reveal="up" number="01" title="Diagnóstico financeiro">
                    Entendemos sua realidade atual, hábitos financeiros, objetivos e desafios.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Clareza primeiro. Estratégia depois.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="02" title="Planejamento personalizado">
                    Criamos uma estratégia alinhada ao seu perfil e ao momento que você está vivendo.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Seu plano. Do seu jeito. Para o seu momento.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="03" title="Organização financeira">
                    Estruturamos sua vida financeira para gerar mais clareza, controle e previsibilidade.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Menos surpresas. Mais previsibilidade. Sempre.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>

                <x-numbered-step class="p-8" data-reveal="up" number="04" title="Acompanhamento contínuo">
                    Agendamos reuniões periódicas para acompanhar sua evolução, ajustando estratégias quando necessário.

                    <x-slot:footer>
                        <x-fr-text size="sm" class="text-brand-primary! font-semibold!">
                            Menos surpresas. Mais previsibilidade. Sempre.
                        </x-fr-text>
                    </x-slot:footer>
                </x-numbered-step>
            </div>
        </div>
    </section>

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

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="140">
                <x-plan-card data-reveal="up" tagline="“Meu dinheiro some sem explicação”">
                    <x-fr-heading>Perfil Gold</x-fr-heading>
                    <x-fr-text>
                        Para quem está começando a organizar sua vida financeira e deseja mais tranquilidade.
                    </x-fr-text>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">Base</x-fr-text>

                    <hr class="border-border-base" />

                    <ul class="flex flex-col gap-4">
                        <x-plan-feature featured>Organização Anual</x-plan-feature>
                        <x-plan-feature>Mapa financeiro</x-plan-feature>
                        <x-plan-feature>Construção de Reserva</x-plan-feature>
                        <x-plan-feature>Planilha de fluxo de caixa</x-plan-feature>
                        <x-plan-feature>Planilha de patrimônio</x-plan-feature>
                    </ul>

                    <x-fr-button
                        variant="outline"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+gold&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Esse sou eu
                    </x-fr-button>
                </x-plan-card>

                <x-plan-card
                    data-reveal="up"
                    variant="highlighted"
                    tagline="“Quero fazer meu dinheiro trabalhar por mim”"
                >
                    <x-fr-heading>Perfil Platinum</x-fr-heading>
                    <x-fr-text> Para quem quer clareza sobre o presente e confiança para planejar o futuro. </x-fr-text>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">+Gold</x-fr-text>

                    <hr class="border-border-base" />

                    <ul class="flex flex-col gap-4">
                        <x-plan-feature featured>Preenchimento de Fluxo de Caixa</x-plan-feature>
                        <x-plan-feature>Diagnóstico de Carteira</x-plan-feature>
                        <x-plan-feature>Estruturar aquisição de bens</x-plan-feature>
                        <x-plan-feature>Parceiros de Investimento</x-plan-feature>
                        <x-plan-feature>Custo Oportunidade</x-plan-feature>
                    </ul>

                    <x-fr-button
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+platinum&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Esse sou eu
                    </x-fr-button>
                </x-plan-card>

                <x-plan-card data-reveal="up" tagline="“Quero acelerar minha independência financeira”">
                    <x-fr-heading>Perfil Black</x-fr-heading>
                    <x-fr-text>
                        Para quem quer organizar as finanças do zero e finalmente respirar no fim do mês.
                    </x-fr-text>
                    <x-fr-text size="sm" class="text-brand-primary! font-semibold!">+Platinum</x-fr-text>

                    <hr class="border-border-base" />

                    <ul class="flex flex-col gap-4">
                        <x-plan-feature featured>Revisão do Progresso</x-plan-feature>
                        <x-plan-feature>Construção de Reserva Internacional</x-plan-feature>
                        <x-plan-feature>Estratégias Exclusivas</x-plan-feature>
                        <x-plan-feature>Carteiras Personalizadas</x-plan-feature>
                        <x-plan-feature>Acompanhamento personalizado</x-plan-feature>
                    </ul>

                    <x-fr-button
                        variant="outline"
                        tag="a"
                        href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+black&type=phone_number&app_absent=0"
                        target="_blank"
                    >
                        Esse sou eu
                    </x-fr-button>
                </x-plan-card>
            </div>

            <x-logo-badge class="flex-col justify-center text-center">
                Não tem certeza qual é o seu? A gente descobre juntos na primeira conversa
            </x-logo-badge>
        </div>
    </section>

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

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-reveal-stagger="140">
                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Emilly Monteiro Gomes"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://lh3.googleusercontent.com/a-/ALV-UjVOkOLWGbS9XPq1JU32VcUkJAH1Sa1b0JhIGRYjlRr8oYto8Fgi=w90-h90-p-rp-mo-br100"
                    metric="0% → 20% da renda investida"
                >
                    O atendimento da Firece é
                    <span class="text-brand-primary font-bold">atencioso, profissional e personalizado</span>, o que
                    torna todo o processo mais tranquilo e eficiente. Tenho me sentido mais confiante em relação à minha
                    vida financeira. Recomendo o trabalho com total segurança.
                </x-testimonial>

                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Paulo Lima"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://lh3.googleusercontent.com/a/ACg8ocJZRAYVtNhUwcGWdv3MP2mP7RbRFQH4w-T08u78BprvC-AWNg=w90-h90-p-rp-mo-br100"
                    metric="0% → 20% da renda investida"
                >
                    Fechei a consultoria a três meses. Estou muito satisfeito, hoje tenho
                    <span class="text-brand-primary font-bold"
                        >visão de todos meus gastos, estou conseguindo guardar parte do meu rendimento</span
                    >, e tenho uma visão futura de como vai estar o meu dinheiro e alcançar os meus objetivos
                    financeiro.
                </x-testimonial>

                <x-testimonial
                    data-reveal="up"
                    variant="centered"
                    class="bg-elevation-01dp border-border-base border p-4"
                    name="Mariana Shah Coury"
                    role="Design"
                    plan="Plano Gold"
                    avatar="https://lh3.googleusercontent.com/a-/ALV-UjXRkXe2TX0jhbnpEfo6DRjqPHJLgWT-j_6uQDtEurYLwua9FPfA=w90-h90-p-rp-mo-br100"
                    metric="0% → 20% da renda investida"
                >
                    Os
                    <span class="text-brand-primary font-bold"
                        >insights sobre organização financeira, entendimento dos meus gastos e tomada de decisões mais
                        conscientes</span
                    >
                    foram extremamente valiosos e continuam fazendo sentido até hoje. Recomendo muito e agradeço de
                    verdade pelo cuidado e dedicação.
                </x-testimonial>
            </div>
        </div>
    </section>

    <x-cta-banner
        cta-label="Descobrir meu plano"
        cta-href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
        cta-target="_blank"
        footer="O objetivo não é encontrar atalhos. É construir uma vida financeira mais organizada, segura e alinhada aos seus objetivos."
    >
        <x-slot:proof>
            <x-social-proof variant="dark">Mais de 9.000 investidores já fazem parte</x-social-proof>
        </x-slot:proof>
        <x-slot:title>
            O que muda quando existe planejamento financeiro?
        </x-slot:title>
        <x-slot:description>
            Mais organização financeira - Clareza para tomar decisões importantes - Segurança para investir - Controle
            sobre o próprio dinheiro - Construção patrimonial sustentável<br />
            Mais tranquilidade para planejar o futuro
        </x-slot:description>
    </x-cta-banner>

    <section class="section">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:header>
                    <x-social-proof variant="high">Mais de 50 investidores já fazem parte</x-social-proof>
                </x-slot:header>

                <x-slot:title>
                    <mark>Planejamento financeiro</mark> é o primeiro passo para todos os outros que você vai dar na sua
                    vida.
                </x-slot:title>
                <x-slot:description>
                    Se tem alguma dúvida que a consultoria vai ajudar sua vida, por que não testa?<br />
                    A primeira análise é gratuita.
                </x-slot:description>
            </x-fr-headline>
            <x-fr-button
                tag="a"
                href="https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0"
                target="_blank"
            >
                Falar com um consultor
            </x-fr-button>
        </div>
    </section>
</x-layout.landing>
