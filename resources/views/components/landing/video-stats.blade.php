@php
    $stats = [
        [
            'icon' => 'heroicon-o-users',
            'value' => '1000+',
            'label' => 'Clientes Atendidos',
        ],
        [
            'icon' => 'heroicon-o-calendar',
            'value' => '70m',
            'label' => 'Sob Administração',
        ],
        [
            'icon' => 'heroicon-o-arrow-trending-up',
            'value' => '9',
            'label' => 'Anos de Experiência',
        ],
        [
            'icon' => 'heroicon-o-banknotes',
            'value' => '300%',
            'label' => 'Crescimento Anual',
        ]
    ];

@endphp

<section
        class=" py-12 md:py-16 lg:py-32 xl:py-40 bg-gradient-to-br from-base-100 via-base-200 to-base-100">

    <div class="container max-w-6xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-8 md:mb-16">
            <h2 class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tight text-base-content mb-4 md:mb-6 px-2">
                Mudamos vidas através da
                <span class="block bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                    Educação Financeira
                </span>
            </h2>
            <p class="text-base md:text-xl text-base-content/90 max-w-3xl mx-auto leading-relaxed px-4">
                Veja como transformamos futuros financeiros e descubra por que milhares de clientes confiam em nós para
                suas decisões financeiras mais importantes.
            </p>
        </div>
        <div class="relative max-w-5xl mx-auto group">
            <div class="absolute -inset-2 md:-inset-4 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-xl md:rounded-2xl blur-lg md:blur-xl group-hover:blur-xl md:group-hover:blur-2xl transition-all duration-500"></div>
            <div class="relative">
                <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                    <source src="{{ asset('video/firece_video.webm') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="bg-base-100 rounded-b-xl md:rounded-b-2xl shadow-xl md:shadow-2xl border-t border-base-200 md:border-t-2 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-base-100 via-transparent to-base-100"></div>
                    <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-base-300 md:divide-y-0 divide-y md:divide-y-0 relative z-10">
                        @foreach($stats as $stat)
                            <x-landing.statistics-item :has-icon="false" :stat="$stat"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-12 md:mt-20">
        <div class="lg:max-w-4xl max-w-md mx-auto px-4">
            <p class="text-base md:text-xl text-base-content/80 mb-6 md:mb-8 leading-relaxed">
                Join thousands of
                satisfied clients who trust us with their financial future and experience the difference of working
                with industry leaders.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center items-center">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary hover:bg-primary/90 h-11 rounded-md w-full sm:w-auto bg-gradient-to-r from-primary/95 to-secondary/95 hover:primary hover:to-secondary text-primary-content px-6 md:px-8 py-3 md:py-4 text-base md:text-lg font-semibold shadow-lg md:shadow-xl hover:shadow-xl md:hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    Start Your Success Story
                </button>
            </div>
        </div>
    </div>
</section>
