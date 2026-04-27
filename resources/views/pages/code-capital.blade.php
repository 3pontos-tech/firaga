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
                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Especialidade</x-fr-text>
                            <x-fr-heading size="xxs"> PJ / CNPJ </x-fr-heading>
                            <x-fr-text size="sm">
                                Pró-labore, distribuição de lucros e regime tributário usados a favor do seu patrimônio.
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Atendemos</x-fr-text>
                            <x-fr-heading size="xxs"> Remoto USD / EUR </x-fr-heading>
                            <x-fr-text size="sm">
                                Câmbio como estratégia de patrimônio, não só uma variável. Alocação inteligente em moeda
                                forte.
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Atendemos</x-fr-text>
                            <x-fr-heading size="xxs"> Stock Options </x-fr-heading>
                            <x-fr-text size="sm">
                                Quando e como exercer, com visão de impacto tributário e estratégia de patrimônio de
                                longo prazo.
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Atendemos</x-fr-text>
                            <x-fr-heading size="xxs"> CLT </x-fr-heading>
                            <x-fr-text size="sm">
                                Planejamento financeiro além do salário: investimentos, reservas e objetivos de longo
                                prazo.
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Atendemos</x-fr-text>
                            <x-fr-heading size="xxs"> Freela </x-fr-heading>
                            <x-fr-text size="sm">
                                Renda variável com estrutura sólida: reserva de emergência, fluxo de caixa e crescimento
                                sustentável.
                            </x-fr-text>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <x-heroicon-c-arrow-right class="text-brand-primary size-5" />

                        <div class="flex flex-col gap-2">
                            <x-fr-text class="text-brand-primary! font-semibold!" size="xs">Atendemos</x-fr-text>
                            <x-fr-heading size="xxs"> Mix de regimes </x-fr-heading>
                            <x-fr-text size="sm">
                                CLT + freela + crypto + USD ao mesmo tempo. A realidade de muitos profissionais de tech
                                hoje.
                            </x-fr-text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.landing>
