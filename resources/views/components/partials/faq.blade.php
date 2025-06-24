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

<div class="grid lg:grid-cols-2 max-w-5xl gap-12 items-start container p-6  mx-auto">
    <div class="relative hidden lg:block">
        <img alt="Customer support representative helping customers"
             loading="lazy" width="500" height="600"
             decoding="async" data-nimg="1"
             class="rounded-lg object-cover w-full h-auto"
             style="color: transparent;"
             src="{{ $thumbnail->url }}">
        <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent rounded-lg"></div>
    </div>
    <div class="space-y-4">
        <h2 class="text-3xl font-bold text-heading mb-8">Perguntas Frequentes</h2>
        <div class="w-full space-y-2">
            @forelse($solutions as $index => $solution)
                <div class="border-b border-base" x-data="{ open: false }">
                    <h3 class="flex">
                        <button type="button"
                                @click="open = !open"
                                :aria-expanded="open"
                                class="flex flex-1 items-center justify-between py-4 font-medium transition-all hover:textneutral text-left text-heading"
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
                        <div class="text-primary-content text-sm leading-relaxed">
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
