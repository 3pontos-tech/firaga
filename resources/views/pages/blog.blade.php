<x-layout.landing>
    {{-- Hero --}}
    <section class="section-first flex flex-col items-center gap-12">
        <div class="container flex flex-col items-center gap-8">
            <x-fr-headline size="3xl" data-reveal="up">
                <x-slot:title>
                    Conteúdo que <mark>transforma</mark>
                </x-slot:title>
                <x-slot:description class="max-w-2xl">
                    Acesse os conteúdos que nossos especialistas prepararam para você organizar suas finanças,
                    potencializar seus investimentos e aumentar seus rendimentos.
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
    <x-newsletter-banner class="md:mt-20!" />
</x-layout.landing>
