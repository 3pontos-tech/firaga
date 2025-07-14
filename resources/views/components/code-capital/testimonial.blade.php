@props([
    "heading" => "Veja como a Fire|ce deu propósito ao dinheiro de Danilo",
    "description" => "Descubra como Danilo passou de uma relação passiva com o dinheiro para uma estratégia clara e eficaz.",
    "name" => "Danilo Fernandes",
    "role" => "Programador e Cliente Fire|ce",
    "testimonial" => "Antes da Fire|ce, meu dinheiro ficava parado. Hoje, tenho clareza, segurança e um propósito real para cada investimento.",
    "video_url" => "https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy",
])

<section class="from-base-100 to-base-200 bg-gradient-to-br py-16 text-white">
    <div class="container mx-auto px-4">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="relative">
                    <div class="flex aspect-video items-center justify-center overflow-hidden rounded-xl bg-gray-700 shadow-2xl">
                        <iframe
                            class="h-full w-full"
                            src="{{ $video_url }}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="bg-base-100 absolute -right-6 -bottom-6 rounded-xl p-4 text-gray-900 shadow-xl">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600">
                                500+
                            </div>
                            <div class="text-base-content text-sm">
                                Clientes com propósito
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="space-y-4">
                        <div class="inline-flex items-center space-x-2 rounded-full bg-orange-600/20 px-4 py-2 text-orange-300">
                            <span class="text-xl">🎯</span>
                            <span class="font-semibold">Histórias que Inspiram</span>
                        </div>
                        <h2 class="text-3xl leading-tight font-bold lg:text-4xl">
                            {{ $heading }}
                        </h2>
                        <p class="text-xl leading-relaxed text-gray-300">
                            {{ $description }}
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-base-100 border-primary/40 rounded-lg border-1 p-4 text-center backdrop-blur-sm">
                            <div class="text-primary text-3xl font-bold">
                                5+
                            </div>
                            <div class="text-gray-300">Anos mudando vidas</div>
                        </div>
                        <div class="bg-base-100 border-primary/40 rounded-lg border-1 p-4 text-center backdrop-blur-sm">
                            <div class="text-primary text-3xl font-bold">
                                98%
                            </div>
                            <div class="text-gray-300">Recomendam nossa consultoria</div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">Estratégias personalizadas de investimento</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">Consultores certificados e experientes</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">Metodologia clara e comprovada</p>
                        </div>
                    </div>
                    <button class="inline-flex h-11 items-center justify-center gap-2 rounded-md bg-orange-600 px-8 text-sm font-medium text-white hover:bg-orange-700 transition-colors">
                        Assista e inspire-se
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
