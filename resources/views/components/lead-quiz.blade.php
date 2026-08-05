@props ([
    'phone' => '5511958397432',
    'botName' => 'Firece'
])

@php
    $steps = [
        [
            'key' => 'situation',
            'type' => 'choice',
            'question' =>
                'Olá! Antes de te conectar com um consultor, me conta rapidinho: qual é a sua situação financeira hoje?',
            'label' => 'Situação financeira',
            'options' => [
                'Tenho dívidas e quero sair delas',
                'Ganho bem mas não controlo os gastos',
                'Já poupo mas quero investir melhor',
            ],
        ],
        [
            'key' => 'availability',
            'type' => 'choice',
            'question' => 'Quase lá! Qual o melhor momento para um consultor entrar em contato com você?',
            'label' => 'Melhor horário',
            'options' => ['Manhã (8h–12h)', 'Tarde (12h–18h)', 'Noite (18h–21h)'],
        ],
        [
            'key' => 'name',
            'type' => 'text',
            'question' => 'Boa escolha. Agora me conta, como posso te chamar?',
            'label' => 'Nome',
            'placeholder' => 'Digite seu primeiro nome',
        ],
        [
            'key' => 'email',
            'type' => 'email',
            'question' => 'Quase lá! Para qual email enviamos o resumo do seu perfil?',
            'label' => 'Email',
            'placeholder' => 'Digite o seu email',
        ],
    ];

    $intro = 'Olá! Fiz o quiz no site da Fire|ce e meu perfil é:';
@endphp

<section {{ $attributes->class('section') }} id="quiz">
    <div class="container flex flex-col gap-8 md:flex-row md:items-stretch md:gap-12" data-reveal-stagger="120">
        <div class="flex w-full flex-col gap-8 md:basis-1/2">
            <x-fr-headline align="left-desk" data-reveal="up">
                <x-slot:title>
                    3 perguntas, 30 segundos
                    <br class="hidden md:block" />
                    um plano que é seu
                </x-slot:title>
                <x-slot:description>
                    Responda abaixo e um consultor entra em contato no horário que você escolher
                </x-slot:description>
            </x-fr-headline>

            <div
                x-data="leadQuiz({ steps: @js($steps), phone: @js($phone), intro: @js($intro) })"
                data-reveal="up"
                class="border-border-base bg-elevation-surface w-full rounded-md border p-6 text-left"
            >
                <div class="flex flex-col gap-4">
                    <template x-for="(item, index) in history" :key="index">
                        <div
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="flex flex-col gap-2"
                        >
                            <x-fr-text>
                                <span class="text-brand-primary font-semibold">{{ $botName }}</span>
                                <span x-text="item.question"></span>
                            </x-fr-text>

                            <p
                                x-text="item.answer"
                                class="bg-brand-primary text-text-light ml-auto max-w-[80%] rounded-md rounded-tr-none px-4 py-2 text-xs font-medium"
                            ></p>
                        </div>
                    </template>

                    <template x-for="step in visibleStep ? [visibleStep] : []" :key="step._key">
                        <div
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2"
                            class="flex flex-col gap-8"
                        >
                            <div class="flex flex-col gap-4">
                                <x-fr-text>
                                    <span class="text-brand-primary font-semibold">{{ $botName }}</span>
                                </x-fr-text>

                                <x-fr-text>
                                    <span x-text="step.question"></span>
                                </x-fr-text>
                            </div>

                            <div x-show="step.type === 'choice'" class="flex flex-col gap-4">
                                <template x-for="option in step.options ?? []" :key="option">
                                    <button
                                        type="button"
                                        x-on:click="choose(option)"
                                        x-text="option"
                                        class="bg-elevation-01dp border-border-base hover:border-brand-primary w-full rounded-sm border px-4 py-3 text-left text-xs font-medium transition-colors"
                                    ></button>
                                </template>
                            </div>

                            <div x-show="step.type === 'text' || step.type === 'email'" class="flex flex-col gap-2">
                                <div
                                    class="border-border-base focus-within:border-brand-primary flex items-center gap-2 rounded-sm border pr-1.5 pl-4"
                                >
                                    <input
                                        x-model="input"
                                        x-on:keydown.enter="submitText()"
                                        :type="step.type === 'email' ? 'email' : 'text'"
                                        :placeholder="step.placeholder"
                                        :aria-label="step.label"
                                        class="text-text-high placeholder:text-text-medium w-full py-3 text-xs focus:outline-none"
                                    />
                                    <button
                                        type="button"
                                        x-on:click="submitText()"
                                        aria-label="Enviar"
                                        class="bg-brand-primary text-text-light flex size-9 shrink-0 items-center justify-center rounded-sm"
                                    >
                                        <x-heroicon-o-paper-airplane class="size-4 shrink-0" />
                                    </button>
                                </div>

                                <p x-show="error" x-text="error" class="text-helper-error text-xs"></p>
                            </div>
                        </div>
                    </template>

                    <div
                        x-show="finished"
                        x-transition
                        class="bg-helper-success/8 border-helper-success/24 flex flex-col gap-4 rounded-sm border p-4"
                    >
                        <x-fr-text>
                            <span class="text-helper-success font-semibold">{{ $botName }}</span>
                            <br />
                            Perfeito! Vou te conectar agora com um consultor que trabalha com o seu perfil.
                        </x-fr-text>

                        <x-fr-button tag="a" variant="success" href="#" x-bind:href="whatsappUrl" target="_blank" block>
                            Abrir conversa no WhatsApp
                        </x-fr-button>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative hidden w-full md:block md:basis-1/2" data-reveal="scale">
            <img
                src="{{ asset('images/woman-with-phone.jpg') }}"
                alt="Mulher sorrindo enquanto usa o celular"
                class="absolute inset-0 h-full w-full rounded-lg object-cover"
            />

            <x-organic-cutout />
        </div>
    </div>
</section>
