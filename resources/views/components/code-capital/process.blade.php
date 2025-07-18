@php
    $cards = [
        [
            'icon' => 'goal',
            'number' => 1,
            'badge' => 'Primeiro passo',
            'title' => 'Personalized Initial Consultation',
            'description' =>
                'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.',
            'class' => 'justify-start',
        ],
        [
            'icon' => 'goal',
            'number' => 2,
            'badge' => 'Segundo passo',
            'title' => 'Tailored Investment Plan',
            'description' =>
                'We build a strategy aligned with your profile, focused on performance, protection, and real opportunities abroad.',
            'class' => 'justify-center',
        ],
        [
            'icon' => 'goal',
            'number' => 3,
            'badge' => 'Passo final',
            'title' => 'Ongoing International Support',
            'description' =>
                'Full support before, during, and after investing, with monthly reports and guidance on reinvestments and portfolio movements.',
            'class' => 'justify-end',
        ],
    ];
@endphp

<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <div class="space-y-4 max-w-5xl flex flex-col items-center justify-center">
                <x-layout.shared.chip>Our Process</x-layout.shared.chip>
                <x-layout.shared.section-header heading="Your Journey to International Investment Success"
                    description="We guide you through every step of your international investment journey with a proven 3-step process designed specifically for tech professionals." />
            </div>
        </div>
        <div class="mx-auto py-16">
            <div class="">

                @foreach ($cards as $index => $card)
                    <div class="relative">
                        <div id="processCard"
                            class="relative z-10 flex-1 flex items-center justify-center px-4 {{ $card['class'] }} mb-16">

                            <x-code-capital.partials.process-card :icon="$card['icon']" :number="$card['number']" :badge="$card['badge']"
                                :title="$card['title']" :description="$card['description']" :class="$index == 1 ? 'bg-gradient-to-r from-primary/5 to-transparent' : null" />
                        </div>
                    </div>
                @endforeach
            </div>

        </div>


    </div>
</section>
