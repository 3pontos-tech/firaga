@props ([
    'phone' => '5511958397432'
])

@php
    $intro = 'Olá! Fiz o quiz no site da Fire|ce e meu perfil é:';
@endphp

<section {{ $attributes->class('section') }} id="quiz">
    <div class="container flex flex-col gap-8 md:flex-row md:items-center md:gap-8" data-reveal-stagger="120">
        <div class="flex w-full flex-col gap-8 md:basis-[51.3%]">
            <x-fr-headline align="left-desk" data-reveal="up">
                <x-slot:title>
                    Descubra o plano ideal para você em 30 segundos
                </x-slot:title>
                <x-slot:description>
                    Responda abaixo e um consultor entra em contato no horário que você escolher
                </x-slot:description>
            </x-fr-headline>

            <div
                x-data="leadQuiz({
                    steps: @js(\App\View\LeadQuiz::steps()),
                    context: 'inline',
                    phone: @js($phone),
                    intro: @js($intro),
                    endpoint: @js(route('leads.store', absolute: false)),
                })"
                data-reveal="up"
                class="border-border-base bg-elevation-surface w-full rounded-md border p-6 text-left"
            >
                <x-lead-quiz.chat />
            </div>
        </div>

        {{--
            841x590 é o formato da moldura no Figma. O recorte orgânico já vem no canal
            alpha do asset, então sobrepor o x-organic-cutout duplicaria a curva — e como
            o SVG usa preserveAspectRatio="none", ele deformava junto com a coluna.
        --}}
        <div class="hidden w-full md:block md:basis-[46.9%]" data-reveal="scale">
            <img
                src="{{ asset('images/home_imagem_3.webp') }}"
                alt="Mulher sorrindo enquanto usa o celular"
                class="aspect-841/590 w-full rounded-lg object-cover"
            />
        </div>
    </div>
</section>
