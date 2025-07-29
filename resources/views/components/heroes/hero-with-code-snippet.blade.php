@props([
    'heading' => '',
    'description' => '',
    'cta_label' => 'Comece Agora',
    'cta_url' => 'https://pudim.com/',
    'badge' => 'Serviços',
    'snippet' => ''
])


<section class="gap-5 flex min-h-1/2 items-center overflow-hidden py-12 sm:py-16 md:py-20 lg:py-24 md:min-h-[50vh]">
    <div class="container mx-auto lg:flex lg:items-center lg:justify-between">
        <div class="mb-8 lg:hidden">
            <h2 class="text-brand-primary text-center text-2xl sm:text-3xl md:text-4xl font-bold">
                {{ $badge }}
            </h2>
        </div>

        <x-headers.headline
            :headline="$heading"
            :description="$subheading"
        >
            <x-slot name="badge">
                @if($badge)
                    <x-layout.shared.chip class="px-4 py-2">
                        {{ $badge }}
                    </x-layout.shared.chip>
                @endif
            </x-slot>

            <x-slot name="ctaButton">
                <x-layout.shared.button
                    :href="$cta_url"
                    variant="primary"
                    class="w-full sm:w-auto px-4 py-3 sm:p-4 font-bold text-sm sm:text-base"
                >
                    {{ $cta_label }}
                </x-layout.shared.button>
            </x-slot>
        </x-headers.headline>
        <div class="mt-8 sm:mt-10 md:mt-12 hidden lg:flex items-center lg:mt-0 lg:w-2/5">
            <div class="animate-fade-in flex flex-col items-center justify-center w-full">
                <div
                    class="flex items-center gap-2 sm:gap-3 justify-between w-full bg-elevation-01dp rounded-t-xl p-3 sm:p-4">
                    <div class="flex items-center gap-2 sm:gap-3">
                        <div class="w-2 h-2 rounded-full bg-helper-error"></div>
                        <div class="w-2 h-2 rounded-full bg-helper-warning"></div>
                        <div class="w-2 h-2 rounded-full bg-helper-success"></div>
                    </div>
                    <div>
                        <h2 class="font-semibold text-text-light text-sm sm:text-base">invest.php</h2>
                    </div>
                    <div class="w-6 h-2"></div>
                </div>
                <div class="w-full">
                    {!! str($snippet)->markdown() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/highlight.js@11.1.1/lib/languages/javascript.min.js"></script>
    <style>
        .snippet-carousel {
            min-height: 300px;
            width: 100%;
            max-width: 600px;
        }

        .snippet-carousel pre {
            margin: 0;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .snippet-carousel code {
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .snippet-indicator {
            transition: all 0.3s ease;
        }

        .snippet-indicator:hover {
            transform: scale(1.5);
        }

        .snippet-nav-button {
            opacity: 0.5;
            transition: opacity 0.3s ease;
        }

        .snippet-nav-button:hover {
            opacity: 1;
        }

        @media (min-width: 1024px) {
            .snippet-carousel {
                min-height: 350px;
                max-width: 650px;
            }

            .snippet-carousel code {
                font-size: 1rem;
                line-height: 1.6;
            }
        }

        @media (min-width: 1280px) {
            .snippet-carousel {
                min-height: 400px;
                max-width: 700px;
            }

            .snippet-carousel code {
                font-size: 1.1rem;
                line-height: 1.7;
            }
        }
    </style>
    <script>


        hljs.highlightAll();
    </script>
@endpush
