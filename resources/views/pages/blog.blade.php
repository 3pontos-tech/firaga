<x-layout.landing>
    {{-- Hero --}}
    <section class="section-first flex flex-col items-center gap-12 md:mt-20!">
        <div class="container flex flex-col items-center gap-8 md:gap-20">
            <x-fr-headline size="3xl" data-reveal="up">
                <x-slot:title class="lg:text-7xl!">
                    Conteúdo que <mark>transforma</mark>
                </x-slot:title>
                <x-slot:description class="max-w-[784px]">
                    Acesse os conteúdos que nossos especialistas prepararam para você se organizar financeiramente,
                    consolidar seu patrimônio ou aumentar seus rendimentos.
                </x-slot:description>
            </x-fr-headline>

            {{-- Featured articles --}}
            @if ($featured->isNotEmpty())
                <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2" data-reveal-stagger="140">
                    @foreach ($featured as $post)
                        <x-blog-card :post="$post" featured data-reveal="up" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Article list --}}
    <livewire:blog-posts :excluded-ids="$excludedIds" />

    {{-- Newsletter --}}
    <x-newsletter-banner />
</x-layout.landing>
