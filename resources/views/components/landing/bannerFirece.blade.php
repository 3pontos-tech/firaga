<section class="p-5">
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .banner-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .banner-track {
            display: flex;
            width: max-content;
            animation: marquee 15s linear infinite;
        }

        .banner-item {
            flex-shrink: 0;
            padding: 0 20px;
        }
    </style>

    <div class="text-heading overflow-hidden text-center banner-container">
        <div class="banner-track">
            <!-- Duplicamos os itens para criar o efeito de loop infinito -->
            <div class="banner-item">
                <h2 class="text-8xl md:text-8xl lg:text-10xl tracking-wide py-10">
                    <img src="{{ asset('images/banner.svg') }}" alt="Fire|ce *" class="inline-block h-16 md:h-20 lg:h-24">
                </h2>
            </div>
            <div class="banner-item">
                <h2 class="text-8xl md:text-8xl lg:text-10xl tracking-wide py-10">
                    <img src="{{ asset('images/banner.svg') }}" alt="Fire|ce *" class="inline-block h-16 md:h-20 lg:h-24">
                </h2>
            </div>
            <div class="banner-item">
                <h2 class="text-8xl md:text-8xl lg:text-10xl tracking-wide py-10">
                    <img src="{{ asset('images/banner.svg') }}" alt="Fire|ce *" class="inline-block h-16 md:h-20 lg:h-24">
                </h2>
            </div>
            <div class="banner-item">
                <h2 class="text-8xl md:text-8xl lg:text-10xl tracking-wide py-10">
                    <img src="{{ asset('images/banner.svg') }}" alt="Fire|ce *" class="inline-block h-16 md:h-20 lg:h-24">
                </h2>
            </div>
        </div>
    </div>
</section>
