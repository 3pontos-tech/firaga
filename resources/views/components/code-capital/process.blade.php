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

<section class="w-full">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <div class="space-y-4 max-w-5xl flex flex-col items-center justify-center">
                <x-layout.shared.chip>Por que escolher a Code Capital?</x-layout.shared.chip>
                <x-layout.shared.section-header heading="Your Journey to International Investment Success"
                    description="We guide you through every step of your international investment journey with a proven 3-step process designed specifically for tech professionals." />
            </div>
        </div>

        <div class="hidden lg:block mx-auto py-16 relative">
            <img src="{{ asset('images/dashed-line-1.svg') }}" alt="Process Background" class="absolute top-[314px] left-[80px]">
            <img src="{{ asset('images/dashed-line-2.svg') }}" alt="Process Background" class="absolute top-[769px] left-[780px]">
            <div class="grid grid-cols-16 gap-4">
                <div class="col-span-7">
                    <x-code-capital.partials.process-card :icon="$cards[0]['icon']" :number="$cards[0]['number']" :badge="$cards[0]['badge']"
                        :title="$cards[0]['title']" :description="$cards[0]['description']" :class="$cards[0]['class']" />
                </div>
                <div class="col-start-6 col-span-7">
                    <x-code-capital.partials.process-card :icon="$cards[1]['icon']" :number="$cards[1]['number']" :badge="$cards[1]['badge']"
                        :title="$cards[1]['title']" :description="$cards[1]['description']" :class="$cards[1]['class']" />
                </div>
                <div class="col-start-10 col-span-7">
                    <x-code-capital.partials.process-card :icon="$cards[2]['icon']" :number="$cards[2]['number']" :badge="$cards[2]['badge']"
                        :title="$cards[2]['title']" :description="$cards[2]['description']" :class="$cards[2]['class']" />
                </div>
            </div>
        </div>

        <div class="lg:hidden py-8 sm:py-12 md:py-16">
            <div class="flex flex-col space-y-8 sm:space-y-12">
                @foreach ($cards as $card)
                    <x-code-capital.partials.process-card :icon="$card['icon']" :number="$card['number']" :badge="$card['badge']"
                        :title="$card['title']" :description="$card['description']" class="justify-center" />
                @endforeach
            </div>
        </div>

        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <p class="text-text-medium max-w-3xl mx-auto text-sm sm:text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu augue erat. Duis velit eros, suscipit at nisi vitae, faucibus hendrerit turpis.
            </p>
            <x-layout.shared.button class="px-6 sm:px-8 py-3 sm:py-4 font-semibold w-full sm:w-auto">
                CTA Button
            </x-layout.shared.button>
        </div>
    </div>
</section>
