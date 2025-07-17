@props([
    "heading" => "Conheça como a Fire|ce transformou a vida de Rick Astley",
    "description" => "Assista ao depoimento de um cliente satisfeito que mudou sua vida financeira com a nossa ajuda.",
    "name" => "João Silva",
    "role" => "Cliente Satisfeito",
    "testimonial" => "A Fire|ce transformou minha vida financeira. Graças à equipe, consegui quitar minhas dívidas e investir para o futuro.",
    "video_url" => "https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy",
])

<section class="from-base-100 to-base-200 bg-gradient-to-br py-16 text-white">
    <div class="container mx-auto px-4">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="relative">
                    <div
                        class="flex aspect-video items-center justify-center overflow-hidden rounded-xl bg-gray-700 shadow-2xl"
                    >
                        <iframe
                            class="h-full w-full"
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=O6_xTlMmOrEmpqyy"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div
                        class="bg-base-100 absolute -right-6 -bottom-6 rounded-xl p-4 text-gray-900 shadow-xl"
                    >
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600">
                                500+
                            </div>
                            <div class="text-base-content text-sm">
                                Clientes atendidos
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="space-y-4">
                        <div
                            class="inline-flex items-center space-x-2 rounded-full bg-orange-600/20 px-4 py-2 text-orange-300"
                        >
                            <span class="text-xl">🎯</span>
                            <span class="font-semibold">Nossa História</span>
                        </div>
                        <h2
                            class="text-3xl leading-tight font-bold lg:text-4xl"
                        >
                            {{ $heading }}
                        </h2>
                        <p class="text-xl leading-relaxed text-gray-300">
                            {{ $description }}
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-base-100 border-primary/40 rounded-lg border-1 p-4 text-center backdrop-blur-sm"
                        >
                            <div class="text-primary text-3xl font-bold">
                                5+
                            </div>
                            <div class="text-gray-300">Anos de experiência</div>
                        </div>
                        <div
                            class="bg-base-100 border-primary/40 rounded-lg border-1 p-4 text-center backdrop-blur-sm"
                        >
                            <div class="text-primary text-3xl font-bold">
                                98%
                            </div>
                            <div class="text-gray-300">
                                Satisfação dos clientes
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400"
                            >
                                <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                ></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">
                                Especialistas certificados em planejamento
                                financeiro
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400"
                            >
                                <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                ></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">
                                Metodologia própria testada e aprovada
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check-big mt-1 h-6 w-6 flex-shrink-0 text-orange-400"
                            >
                                <path
                                    d="M21.801 10A10 10 0 1 1 17 3.335"
                                ></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <p class="text-gray-300">
                                Foco em resultados reais e sustentáveis
                            </p>
                        </div>
                    </div>
                    <button
                        class="ring-offset-background focus-visible:ring-ring [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 inline-flex h-11 items-center justify-center gap-2 rounded-md bg-orange-600 px-8 text-sm font-medium whitespace-nowrap text-white transition-colors hover:bg-orange-700 focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:outline-none disabled:pointer-events-none disabled:opacity-50"
                    >
                        Assista ao vídeo completo
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
