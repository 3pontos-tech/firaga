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
<div class="py-8 sm:py-12 md:py-16 lg:py-20 xl:py-60 min-h-screen">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 justify-between items-start lg:items-center">
            <div class="relative hidden lg:block w-full lg:w-1/2">
                <img alt="Customer support representative helping customers" loading="lazy" decoding="async" data-nimg="1"
                    class="rounded-lg object-cover w-full h-auto" style="color: transparent;" src="{{ $thumbnail->url ?? $thumbnail }}">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex flex-col gap-y-4 sm:gap-y-6 md:gap-y-8">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-text-high">Perguntas Frequentes</h2>
                    <p class="text-text-medium font-medium text-base sm:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        urna tellus, cursus vitae vestibulum quis, pretium eu dui.</p>
                </div>
                <div class="w-full space-y-4 sm:space-y-6 md:space-y-8 mt-6 sm:mt-8">
                    @forelse($solutions as $index => $solution)
                        <div class="transition-all duration-300 ease-in-out hover:bg-[#303030] rounded-lg p-3 sm:p-4"
                            x-data="{ open: false }">
                            <h3 class="flex">
                                <button type="button" @click="open = !open" :aria-expanded="open"
                                    class="flex flex-1 items-center justify-between font-medium transition-all hover:text-primary text-left text-text-high text-base sm:text-lg"
                                    aria-controls="faq-content-{{ $index }}">
                                    {{ $solution['question'] ?? '' }}
                                    <svg class="h-4 w-4 sm:h-5 sm:w-5 text-muted transition-transform duration-200 flex-shrink-0 ml-4"
                                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </h3>
                            <div x-show="open" x-collapse id="faq-content-{{ $index }}" class="pb-3 sm:pb-4">
                                <div class="text-text-high/90 bg-base-100 p-3 sm:p-4 text-sm sm:text-base leading-relaxed">
                                    {{ $solution['answer'] ?? '' }}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-6 sm:py-8">
                            <p class="text-muted text-sm sm:text-base">No FAQ items available.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
