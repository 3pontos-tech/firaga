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
                    <x-arrow-block icon-color="text-text-high" title="Patrimônio relevante, objetivos de longo prazo">
                        Você construiu algo que precisa ser protegido e expandido com inteligência
                    </x-arrow-block>

                    <x-arrow-block icon-color="text-text-high" title="Decisões financeiras complexas e recorrentes">
                        Investimentos, estrutura familiar, bens você precisa de alguém que pense junto
                    </x-arrow-block>

                    <x-arrow-block icon-color="text-text-high" title="Interesse em exposição internacional">
                        Dólar, libra, ativos em NY e Londres parte da sua estratégia já está ou deveria estar fora do
                        Brasil
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
            <x-numbered-step class="p-8" data-reveal="up" number="01" title="Estratégia patrimonial avançada">
                A empresa contrata pacotes de horas mensais, semestrais ou anuais disponíveis para todos os
                colaboradores.

                <x-slot:footer>
                    <div class="flex items-center gap-3">
                        <x-fr-text size="sm" class="text-text-high!"> Proteção </x-fr-text>
                        <div class="bg-text-high size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-text-high!"> Crescimento </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step class="p-8" data-reveal="up" number="02" title="Gestão e alocação internacional">
                Cada colaborador agenda seu atendimento diretamente pela plataforma Flamma, quando quiser.

                <x-slot:footer>
                    <div class="flex items-center gap-3">
                        <x-fr-text size="sm" class="text-text-high!"> Diversificação </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step class="p-8" data-reveal="up" number="03" title="Planejamento sucessório">
                Sessões individuais de 60 minutos com consultores especializados, online ou presencial.

                <x-slot:footer>
                    <div class="flex items-center gap-3">
                        <x-fr-text size="sm" class="text-text-high!"> Família </x-fr-text>
                        <div class="bg-text-high size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-text-high!"> Legado </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>

            <x-numbered-step class="p-8" data-reveal="up" number="04" title="Acompanhamento contínuo">
                O RH acompanha a adesão e os resultados com relatórios consolidados de uso e evolução.

                <x-slot:footer>
                    <div class="flex items-center gap-3">
                        <x-fr-text size="sm" class="text-text-high!"> Parceria </x-fr-text>
                        <div class="bg-text-high size-1 rounded-full"></div>
                        <x-fr-text size="sm" class="text-text-high!"> Suporte </x-fr-text>
                    </div>
                </x-slot:footer>
            </x-numbered-step>
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

    <x-cta-banner class="mt-28" variant="light" cta-label="Esse sou eu">
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
