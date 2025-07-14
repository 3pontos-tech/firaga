@php

    $cards = [
        [
            'icon' => 'heroicon-o-user-group',
            'number' => 1,
            'badge' => '30 Minutes • Free',
            'title' => 'Personalized Initial Consultation',
            'description' => 'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.',
            'class' => 'justify-start',
        ],
        [
            'icon' => 'heroicon-o-document-chart-bar',
            'number' => 2,
            'badge' => '1-2 Weeks • Custom Built',
            'title' => 'Tailored Investment Plan',
            'description' => 'We build a strategy aligned with your profile, focused on performance, protection, and real opportunities abroad.',
            'class' => 'justify-center',
        ],
        [
            'icon' => 'heroicon-o-banknotes',
            'number' => 3,
            'badge' => 'Ongoing • 24/7 Support',
            'title' => 'Ongoing International Support',
            'description' => 'Full support before, during, and after investing, with monthly reports and guidance on reinvestments and portfolio movements.',
            'class' => 'justify-end',
        ],
    ];
@endphp

<section class="w-full py-12 md:py-24 lg:py-32 bg-base-100">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-6 text-center">
            <div class="space-y-4 max-w-5xl">
                <div
                    class="inline-flex items-center rounded-full border border-primary/20 px-3 py-1 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-primary/10 text-primary shadow-sm"
                    data-v0-t="badge">Our Process
                </div>
                <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-base-content">
                    Your Journey to International Investment Success</h2>
                <p class="text-base-content/80 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed mx-auto">We
                    guide you through every step of your international investment journey with a proven 3-step process
                    designed specifically for tech professionals.</p>
            </div>
        </div>
        <div class="mx-auto py-16">
            <div class="">
                <!-- Timeline trail SVG positioned behind the cards -->


                @foreach($cards as $index => $card)
                    <div class="relative">
                        <div
                            id="processCard"
                            class="relative z-10 flex-1 flex items-center justify-center px-4 {{ $card['class'] }} mb-16">

                            <x-code-capital.partials.process-card
                                :icon="$card['icon']"
                                :number="$card['number']"
                                :badge="$card['badge']"
                                :title="$card['title']"
                                :description="$card['description']"
                                :class="$index == 1 ? 'bg-gradient-to-r from-primary/5 to-transparent' : null"
                            />
                        </div>
                    </div>
                @endforeach
            </div>

        </div>


    </div>
</section>
