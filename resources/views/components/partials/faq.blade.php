@props([
    'thumbnail' => '',
    'solutions' => collect([
        [
            'question' => 'Como posso entrar em contato com o suporte?',
            'answer' => 'Você pode entrar em contato conosco através do nosso e-mail de suporte ou pelo telefone disponível em nosso site.'
        ],
        [
            'question' => 'Quais são os horários de atendimento?',
            'answer' => 'Nosso horário de atendimento é de segunda a sexta-feira, das 9h às 18h.'
        ],
        [
            'question' => 'Como posso acompanhar o status do meu pedido?',
            'answer' => 'Você pode acompanhar o status do seu pedido através da sua conta em nosso site.'
        ],
        [
            'question' => 'O que devo fazer se esquecer minha senha?',
            'answer' => 'Se você esquecer sua senha, pode redefini-la clicando no link "Esqueci minha senha" na página de login.'
        ]
    ])
])
<div class="bg-base-200 py-10">
<div class="flex max-w-7xl gap-12 justify-between items-start container p-6 mx-auto ">
    <div class="relative hidden md:block max-w-1/2">
        <img alt="Customer support representative helping customers"
             loading="lazy"
             decoding="async" data-nimg="1"
             class="rounded-lg object-cover "
             style="color: transparent;"
             src="{{ $thumbnail->url ?? $thumbnail }}">

    </div>
    <div class="min-w-full md:min-w-1/2 md:max-w-1/2">
        <h2 class="text-3xl font-bold text-base-content mb-8">Perguntas Frequentes</h2>
        <div class="w-full space-y-2">
            @forelse($solutions as $index => $solution)
                <div class="border-b border-base-100 bg-base-100/50 px-3" x-data="{ open: false }">
                    <h3 class="flex">
                        <button type="button"
                                @click="open = !open"
                                :aria-expanded="open"
                                class="flex flex-1 items-center justify-between py-4 font-medium transition-all hover:text-primary text-left text-base-content"
                                aria-controls="faq-content-{{ $index }}">
                            {{ $solution['question'] ?? '' }}
                            <svg class="h-5 w-5 text-muted transition-transform duration-200"
                                 :class="{ 'rotate-180': open }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h3>
                    <div x-show="open"
                         x-collapse
                         id="faq-content-{{ $index }}"
                         class="pb-4">
                        <div class="text-base-content/90 bg-base-100 p-3 text-sm leading-relaxed">
                            {{ $solution['answer'] ?? '' }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <p class="text-muted">No FAQ items available.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
</div>
