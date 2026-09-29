@props ([
    'botName' => \App\View\LeadQuiz::BOT_NAME
])

{{--
    Chat do fluxo de captura (Figma 7293-10811). Só marcação: o estado vem do
    x-data="leadQuiz(...)" do componente pai (seção inline da Home ou modal).
--}}
<div {{ $attributes->class('flex flex-col gap-8') }}>
    <template x-for="(item, index) in history" :key="index">
        <div
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="flex flex-col items-end gap-8"
        >
            <div class="flex w-full flex-col gap-3 text-xs">
                <p class="text-brand-primary leading-none font-bold">{{ $botName }}</p>
                <p x-text="item.question" class="text-text-medium leading-normal font-medium"></p>
            </div>

            <p
                x-text="item.answer"
                class="bg-brand-primary text-text-light max-w-full rounded-sm p-3 text-xs leading-normal font-medium wrap-break-word"
            ></p>
        </div>
    </template>

    <template x-for="step in visibleStep ? [visibleStep] : []" :key="step._key">
        <div
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="flex flex-col gap-8"
        >
            <div class="flex w-full flex-col gap-3 text-xs">
                <p class="text-brand-primary leading-none font-bold">{{ $botName }}</p>
                <p x-text="step.question" class="text-text-medium leading-normal font-medium"></p>
            </div>

            <template x-if="step.type === 'choice'">
                <div class="flex flex-col gap-4">
                    <template x-for="option in step.options" :key="option.value">
                        <button
                            type="button"
                            x-on:click="choose(option)"
                            x-text="option.label"
                            class="bg-elevation-01dp border-border-base text-text-medium hover:border-brand-primary focus-visible:border-brand-primary w-full rounded-sm border px-6 py-3 text-left text-xs leading-normal font-medium transition-colors focus-visible:outline-none"
                        ></button>
                    </template>
                </div>
            </template>

            <template x-if="step.type !== 'choice'">
                <div class="flex flex-col gap-2">
                    <div
                        class="bg-elevation-01dp border-border-base focus-within:border-brand-primary flex items-center justify-between gap-3 rounded-sm border p-4 shadow-[0px_2px_2px_rgba(78,77,78,0.04)] transition-colors"
                    >
                        <input
                            x-model="input"
                            x-init="$nextTick(() => $el.focus({ preventScroll: true }))"
                            x-on:keydown.enter.prevent="submitText()"
                            :type="step.type"
                            :inputmode="step.type === 'tel' ? 'tel' : null"
                            :autocomplete="{ text: 'given-name', email: 'email', tel: 'tel-national' }[step.type]"
                            :placeholder="step.placeholder"
                            :aria-label="step.label"
                            :aria-invalid="error ? 'true' : 'false'"
                            class="text-text-high placeholder:text-text-medium w-full min-w-0 bg-transparent text-xs leading-normal font-medium focus:outline-none"
                        />
                        <button
                            type="button"
                            x-on:click="submitText()"
                            aria-label="Enviar"
                            class="bg-brand-primary flex size-8 shrink-0 items-center justify-center rounded-[4px] p-2.5"
                        >
                            <img
                                src="{{ asset('images/icons/lucide-send.svg') }}"
                                alt=""
                                width="20"
                                height="20"
                                class="block size-5 max-w-none"
                            />
                        </button>
                    </div>

                    <p x-show="error" x-text="error" role="alert" class="text-helper-error text-xs"></p>
                </div>
            </template>
        </div>
    </template>

    <div
        x-show="finished"
        x-transition
        class="bg-helper-success/8 border-helper-success/32 flex flex-col gap-8 rounded-sm border p-4"
    >
        <div class="text-helper-success flex flex-col gap-3 text-xs">
            <p class="leading-none font-bold">{{ $botName }}</p>
            <p class="leading-normal font-medium">Perfeito! Vou te conectar agora com um consultor que trabalha com o seu perfil.</p>
        </div>

        {{--
            Isenção explícita da interceptação de links de WhatsApp (resources/js/app.js):
            este CTA encerra um fluxo já respondido e, se fosse interceptado, reabriria o
            modal de captura sobre ele em laço.
        --}}
        <x-fr-button
            tag="a"
            variant="success"
            href="#"
            x-bind:href="whatsappUrl"
            x-on:click="openWhatsapp()"
            target="_blank"
            rel="noopener"
            data-lead-capture-exempt
            block
            class="w-full! font-normal!"
        >
            Abrir conversa no WhatsApp
        </x-fr-button>
    </div>
</div>
