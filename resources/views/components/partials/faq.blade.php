@props([
    'thumbnail' => '',
    'solutions' => collect([
        [
            'question' => 'Como posso entrar em contato com o suporte?',
            'answer' =>
                'Você pode entrar em contato conosco através do nosso e-mail de suporte ou pelo telefone disponível em nosso site.',
        ],
        [
            'question' => 'Quais são os horários de atendimento?',
            'answer' => 'Nosso horário de atendimento é de segunda a sexta-feira, das 9h às 18h.',
        ],
        [
            'question' => 'Como posso acompanhar o status do meu pedido?',
            'answer' => 'Você pode acompanhar o status do seu pedido através da sua conta em nosso site.',
        ],
        [
            'question' => 'O que devo fazer se esquecer minha senha?',
            'answer' =>
                'Se você esquecer sua senha, pode redefini-la clicando no link "Esqueci minha senha" na página de login.',
        ],
    ]),
])
<div class="py-10">
    <div class="flex gap-12 justify-between items-center container mx-auto">
        <div class="relative hidden md:block max-w-1/2">
            <img alt="Customer support representative helping customers" loading="lazy" decoding="async" data-nimg="1"
                class="rounded-lg object-cover " style="color: transparent;" src="{{ $thumbnail->url ?? $thumbnail }}">

        </div>
        <div class="min-w-full md:min-w-1/2 md:max-w-1/2">
            <div class="flex flex-col gap-y-8">
                <h2 class="text-5xl font-bold text-text-high">Perguntas Frequentes</h2>
                <p class="text-text-medium font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                    urna tellus, cursus vitae vestibulum quis, pretium eu dui.</p>
            </div>
            <div class="w-full space-y-8 mt-5">
                @forelse($solutions as $index => $solution)
                    <div class="transition-all duration-300 ease-in-out hover:bg-[#303030] rounded-lg p-3"
                        x-data="{ open: false }">
                        <h3 class="flex">
                            <button type="button" @click="open = !open" :aria-expanded="open"
                                class="flex flex-1 items-center justify-between font-medium transition-all hover:text-primary text-left text-text-high text-lg"
                                aria-controls="faq-content-{{ $index }}">
                                {{ $solution['question'] ?? '' }}
                                <svg class="h-4 w-4 text-muted transition-transform duration-200"
                                    :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </h3>
                        <div x-show="open" x-collapse id="faq-content-{{ $index }}" class="pb-4">
                            <div class="text-text-high/90 bg-base-100 p-3 text-sm leading-relaxed">
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
