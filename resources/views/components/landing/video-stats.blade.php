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
        ],
    ];

@endphp

<section class="py-12 md:py-16 lg:py-32 xl:py-40">
    <div class="container max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-8 md:mb-16 flex flex-col items-center gap-y-6">
            <x-layout.shared.chip>Estatísticas</x-layout.shared.chip>
            <x-landing.section-header heading="Nossa história"
                description="Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo." />
        </div>
    </div>
    <div class="relative max-w-[1485px] h-[780px] mx-auto">
        <video id="firece-video" class="w-full h-full object-cover rounded-4xl" muted loop playsinline>
            <source src="{{ asset('video/firece_video.webm') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button
            id="play-button"
            class="absolute inset-0 flex items-center justify-center hover:scale-105 transition-transform duration-200"
            onclick="playVideo()"
        >
            <svg width="147" height="148" viewBox="0 0 147 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="73.4995" cy="73.9995" r="73.062" fill="#E2410A"/>
                <path d="M99.1719 68.8024C103.172 71.1118 103.172 76.8853 99.1719 79.1947L65.1663 98.8278C61.1663 101.137 56.1663 98.2505 56.1663 93.6317L56.1663 54.3654C56.1663 49.7466 61.1663 46.8598 65.1663 49.1692L99.1719 68.8024Z" fill="#FDFDFD"/>
            </svg>
        </button>

         <div class="flex flex-col items-center gap-y-4 mt-16">
            <p class="font-bold text-text-medium text-xl">Não encontrou o que procura?</p>
            <a href="" class="font-bold text-brand-primary flex items-center gap-x-2 text-xl py-3 px-8">Fale
                conosco para uma sugestão personalizada <x-lucide-chevron-right class="w-4 h-4" /></a>
        </div>

    </div>

    <script>
        function playVideo() {
            const video = document.getElementById('firece-video');
            const playButton = document.getElementById('play-button');

            video.play();
            playButton.style.display = 'none';

            video.addEventListener('pause', function() {
                playButton.style.display = 'flex';
            });

            video.addEventListener('ended', function() {
                playButton.style.display = 'flex';
            });
        }
    </script>
</section>
