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
                    <div class="mt-4 flex w-full items-center justify-between">
                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> +10 anos </x-fr-heading>
                            <x-fr-text size="xs"> DE MERCADO </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> 300% </x-fr-heading>
                            <x-fr-text size="xs"> CRES. ANUAL </x-fr-text>
                        </div>

                        <div class="bg-border-base w-px self-stretch"></div>

                        <div class="flex flex-col items-start gap-2">
                            <x-fr-heading> +2 mil </x-fr-heading>
                            <x-fr-text size="xs"> CLIENTES </x-fr-text>
                        </div>
                    </div>
                </x-slot:footer>
            </x-fr-headline>
        </div>
    </section>

    <section class="section bg-elevation-01dp border-border-base rounded-t-lg border-y px-4 py-11">
        <div class="container flex flex-col gap-8" data-reveal-stagger="120">
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
                    Para quem não aceita menos do que <mark>alta performance</mark>
                </x-slot:title>
            </x-fr-headline>

            <div class="flex flex-col gap-4" data-reveal="up">
                <x-fr-heading size="xs"> O que buscamos </x-fr-heading>

                <div class="flex flex-col gap-8" data-reveal-stagger="120">
                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Patrimônio relevante, objetivos de longo prazo </x-fr-heading>
                            <x-fr-text size="sm">
                                Você construiu algo que precisa ser protegido e expandido com inteligência
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Decisões financeiras complexas e recorrentes </x-fr-heading>
                            <x-fr-text size="sm">
                                Investimentos, estrutura familiar, bens você precisa de alguém que pense junto
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Interesse em exposição internacional </x-fr-heading>
                            <x-fr-text size="sm">
                                Dólar, libra, ativos em NY e Londres parte da sua estratégia já está ou deveria estar
                                fora do Brasil
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-text-high size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-heading size="xxs"> Discrição e exclusividade como padrão </x-fr-heading>
                            <x-fr-text size="sm">
                                Você não quer um atendente. Quer um consultor que te conhece de verdade
                            </x-fr-text>
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

    <section class="section mt-28 flex flex-col items-center gap-8">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline data-reveal="up">
                <x-slot:title>
                    Quatro pilares. Uma parceria completa.
                </x-slot:title>
            </x-fr-headline>
        </div>

        <div
            class="border-border-base divide-border-base grid w-full grid-cols-1 divide-y border-y"
            data-reveal-stagger="140"
        >
            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">01</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Estratégia patrimonial avançada
                    </x-slot:title>
                    <x-slot:description>
                        A empresa contrata pacotes de horas mensais, semestrais ou anuais disponíveis para todos os
                        colaboradores.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-3">
                    <x-fr-text size="sm" class="text-text-high!"> Proteção </x-fr-text>
                    <div class="bg-text-high size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-text-high!"> Crescimento </x-fr-text>
                </div>
            </div>

            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">02</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Gestão e alocação internacional
                    </x-slot:title>
                    <x-slot:description>
                        Cada colaborador agenda seu atendimento diretamente pela plataforma Flamma, quando quiser.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-3">
                    <x-fr-text size="sm" class="text-text-high!"> Diversificação </x-fr-text>
                </div>
            </div>

            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">03</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Planejamento sucessório
                    </x-slot:title>
                    <x-slot:description>
                        Sessões individuais de 60 minutos com consultores especializados, online ou presencial.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-3">
                    <x-fr-text size="sm" class="text-text-high!"> Família </x-fr-text>
                    <div class="bg-text-high size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-text-high!"> Legado </x-fr-text>
                </div>
            </div>

            <div class="flex flex-col gap-3 p-8" data-reveal="up">
                <div class="flex items-center justify-between">
                    <p class="text-brand-primary font-display text-xl font-medium">04</p>
                    <x-heroicon-c-chevron-right class="text-icon-medium size-7" />
                </div>

                <x-fr-headline align="left" size="sm" container-class="gap-2!">
                    <x-slot:title>
                        Acompanhamento contínuo
                    </x-slot:title>
                    <x-slot:description>
                        O RH acompanha a adesão e os resultados com relatórios consolidados de uso e evolução.
                    </x-slot:description>
                </x-fr-headline>

                <div class="flex items-center gap-3">
                    <x-fr-text size="sm" class="text-text-high!"> Parceria </x-fr-text>
                    <div class="bg-text-high size-1 rounded-full"></div>
                    <x-fr-text size="sm" class="text-text-high!"> Suporte </x-fr-text>
                </div>
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
</x-layout.landing>
