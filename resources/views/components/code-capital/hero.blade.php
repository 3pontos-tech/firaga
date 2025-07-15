@props([
    "heroData" => [],
])

@php
    $snippets = str(file_get_contents(resource_path("markdown/code-capital/snippets.md")))
        ->explode("-----")
        ->map(function ($snippet) {
            return str($snippet)->markdown();
        });
    $snippetsJson = json_encode($snippets);
@endphp

    <!-- Hero Section -->
<section
    class="bg-elevation-03dp relative gap-5 flex min-h-1/2 items-center overflow-hidden  py-20 md:min-h-[50vh]">
    <!-- Animated Gradient Background -->

    <div class="relative z-10 container mx-auto px-6 lg:flex  lg:items-center lg:justify-between">
        <!-- Right: Circular Logo (Mobile Only) -->
        <div class="mb-8 lg:hidden">
            <h2 class="text-primary text-center animate-pulse text-4xl font-bold">&lt;code-capital/&gt;</h2>
        </div>
        <!-- Left: Headline + Copy + CTA -->
        <x-headers.headline
            :headline="$heroData['heading']"
            :description="$heroData['subheading']"
            :button-text="$heroData['button_text']"
            :button-url="$heroData['button_url']"
            :badge="$heroData['badge']"
        />

        <div class="mt-12  hidden h-24 items-center justify-center md:flex lg:mt-0 lg:flex lg:w-1/2">
            <div
                x-data="snippetCarousel({{ $snippetsJson }})"
                class="animate-fade-in flex flex-col items-center justify-center rounded-full transition-all delay-300 duration-300 relative snippet-carousel"
            >
                <div class="flex items-center justify-center w-full">
                    <div
                        x-html="snippets[currentIndex]"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        :class="{ 'opacity-0': isChanging, 'opacity-100': !isChanging }"
                        class="transition-all duration-900 ease-in-out mx-8 w-full"
                    ></div>
                </div>
            </div>
        </div>
    </div>
</section>

@push("styles")
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

        @media (max-width: 768px) {
            .snippet-carousel {
                min-height: 200px;
            }
        }
    </style>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("snippetCarousel", function (snippets) {
                return {
                    snippets: snippets,
                    currentIndex: 0,
                    isChanging: false,
                    timer: null,
                    init() {
                        this.startRotation();
                        this.$nextTick(() => {
                            hljs.highlightAll();
                        });
                    },
                    startRotation() {
                        this.timer = setInterval(() => {
                            this.nextSnippet();
                        }, 100000);
                    },
                    resetTimer() {
                        clearInterval(this.timer);
                        this.startRotation();
                    },
                    nextSnippet() {
                        if (this.isChanging) return;
                        this.isChanging = true;
                        setTimeout(() => {
                            this.currentIndex = (this.currentIndex + 1) % this.snippets.length;
                            setTimeout(() => {
                                this.isChanging = false;
                                hljs.highlightAll();
                            }, 100);
                        }, 500);
                        this.resetTimer();
                    },
                    prevSnippet() {
                        if (this.isChanging) return;
                        this.isChanging = true;
                        setTimeout(() => {
                            this.currentIndex = (this.currentIndex - 1 + this.snippets.length) % this.snippets.length;
                            setTimeout(() => {
                                this.isChanging = false;
                                hljs.highlightAll();
                            }, 100);
                        }, 500);
                        this.resetTimer();
                    }
                };
            });
        });

        hljs.highlightAll();
    </script>
@endpush
