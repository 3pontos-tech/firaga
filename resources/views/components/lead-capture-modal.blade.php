{{--
    Modal de captura aberto por qualquer link de WhatsApp do site. A interceptação
    fica centralizada em resources/js/app.js; os links mantêm o href original, então
    sem JavaScript a pessoa segue direto para o WhatsApp.
--}}
<div
    x-data="leadQuiz({
        steps: @js(\App\View\LeadQuiz::steps()),
        context: 'modal',
        fallbackUrl: @js(config('services.gohighlevel.default_whatsapp_url')),
        endpoint: @js(route('leads.store', absolute: false)),
    })"
    x-on:lead-capture:open.window="show($event.detail)"
    x-on:keydown.escape.window="isOpen && close()"
    x-show="isOpen"
    x-cloak
    data-lead-capture-modal
    {{-- O fluxo do Figma é sempre claro: .light redefine os tokens mesmo em páginas com tema escuro/metálico. --}}
    class="light fixed inset-0 z-60 flex items-center justify-center p-4"
>
    <div
        x-show="isOpen"
        x-transition.opacity
        x-on:click="close()"
        class="absolute inset-0 bg-black/50"
        aria-hidden="true"
    ></div>

    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        x-trap.noscroll="isOpen"
        x-ref="scroller"
        role="dialog"
        aria-modal="true"
        aria-labelledby="lead-capture-title"
        class="bg-elevation-surface border-border-base relative max-h-[calc(100dvh-2rem)] w-full max-w-[361px] overflow-y-auto overscroll-contain rounded-md border px-4 py-8 text-left"
    >
        <h2 id="lead-capture-title" class="sr-only">Fale com um consultor da {{ \App\View\LeadQuiz::BOT_NAME }}</h2>

        <button
            type="button"
            x-on:click="close()"
            aria-label="Fechar"
            class="text-text-medium hover:text-text-high absolute top-3 right-3 flex size-8 items-center justify-center rounded-sm transition-colors"
        >
            <x-heroicon-o-x-mark class="size-5" />
        </button>

        <x-lead-quiz.chat x-ref="chat" />
    </div>
</div>
