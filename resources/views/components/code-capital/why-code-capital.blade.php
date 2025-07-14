<section class="py-12 md:py-24 lg:py-32 bg-gradient-to-b from-base-100/50 via-base-200/50 to-base-100/50">
    <div class="container p-4 md:p-6 rounded-xl  mx-auto">
        <div class="flex flex-col md:flex-row gap-6 gap-2 lg:gap-12">
            <div class="flex md:w-2/3 flex-col justify-center space-y-4">
                <!-- Headline and Description -->
                <div class="space-y-2">
                    <div
                        class="border-primary inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
                        Por que escolher a Code Capital?
                    </div>
                    <h2 class="text-3xl font-bold tracking-tighter text-base-content sm:text-5xl">
                        Construido por Profissionais de Tecnologia e Finanças
                    </h2>
                    <p class="max-w-[600px] text-base-content md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Nosso time de consultores financeiros é formado por especialistas que estão em contato diário
                        com todos os tipos de áreas de técnologia.
                    </p>
                </div>
                <!-- Features -->
                <div>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex flex-row  gap-6 flex-wrap">
                            @foreach(range(1,4) as $ignored)
                                <x-code-capital.partials.feature-card class="md:w-5/12"/>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <a href="{{ "" }}"
                       class="inline-flex w-full items-center justify-center px-6 py-3 bg-primary text-primary-content font-semibold rounded-lg hover:bg-primary/90 transition-colors duration-300">
                        Agende uma Consultoria Gratuita
                    </a>
                </div>
            </div>
            <div class="flex hidden md:block items-center justify-center">
                <div>
                    <div class="relative">
                        <img alt="Team of advisors" loading="lazy"
                             decoding="async" data-nimg="1"
                             class="rounded-lg shadow-lg relative -z-10"
                             src="{{ asset('images/stock/code-capital.png') }}">
                        <div
                            class="absolute inset-0 rounded-lg bg-gradient-to-b from-primary/10 to-primary/10  pointer-events-none"></div>
                    </div>

                </div>
            </div>
        </div>

</section>
