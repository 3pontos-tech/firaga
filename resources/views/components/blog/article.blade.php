@php
    use App\View\TemplateRenderer;
    $builder = TemplateRenderer::make();
@endphp

@props([
    'post' => null,
])

<article class="pb-8 md:pb-0">
    <section id="heading" class="bg-base-200 px-4 md:px-8">
        <div class="max-w-4xl mx-auto pt-10">
            <a href="{{ route('blog.index') }}"
               class="inline-flex items-center gap-2 text-primary hover:text-primary-hover mb-8">
                <x-heroicon-c-arrow-left class="h-4 w-4"/>
                Voltar ao Blog
            </a>
            <div class="relative mb-12 md:max-h-[300px] max-h-[150px] rounded-xl overflow-hidden">
                <img
                    alt="{{ $post->title }}" loading="lazy" decoding="async"
                    class="object-cover"
                    src="{{ $post->thumbnail->getSignedUrl() }}">
            </div>
            <div class="flex gap-2 mb-2">
                @foreach($post->categories as $category)
                    <span class="bg-neutral text-primary-content px-4 py-2 rounded-full text-sm font-semibold">
                        {{ $category->name ?? 'Code' }}
                    </span>
                @endforeach
            </div>
            <h1 class="text-3xl text-base-content font-bold mb-6 md:text-4xl lg:text-5xl">
                {{ $post->title }}
            </h1>
            <div
                class="flex flex-wrap justify-between  items-center gap-6 text-base-content mb-8 pb-8 ">
                <div class="flex gap-6">
                    <div class="flex items-center gap-2">
                        <x-heroicon-c-calendar class="h-4 w-4"/>
                        {{ $post->published_at->format('d/m/Y') }}
                    </div>
                    <div class="flex items-center gap-2">
                        <x-heroicon-c-clock class="h-3 w-3"/>
                        {{ $post->read_time_in_minutes }} minutos de leitura
                    </div>
                </div>
                <div class="flex items-center gap-2 mr-4">
                    <div class="flex items-center">
                        <img alt="{{ $post->author->name ?? '' }}" loading="lazy"
                             decoding="async" data-nimg="1"
                             class="rounded-full w-8 h-8"
                             src="{{ $post->author->thumbnail->getSignedUrl() }}">
                    </div>
                    <span class="">Por {{ $post->author->name }}</span>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="max-w-4xl mx-auto px-4 md:px-8">
        <article class="prose lg:prose-xl max-w-none dark:prose-invert">
            @foreach($post->content as $componentPayload)
                {!! $builder->render($componentPayload['type'], $componentPayload['data']) !!}
            @endforeach
        </article>
    </section>
    <section id="author" class=" px-4 md:px-8 mt-12 pb-10">
        <div class="max-w-4xl mx-auto mt-12 p-6 bg-base-200 rounded-xl flex items-center gap-6">
            <img
                alt="{{ $post->author->name ?? '' }}"
                loading="lazy"
                decoding="async"
                class="rounded-full w-16 h-16 border-2 borderneutral"
                src="{{ $post->author->thumbnail->getSignedUrl() }}"
            >
            <div class="flex flex-col">
                <h2 class="text-lg font-bold text-base-content">Autor</h2>
                <div class="flex flex-col">
                    <p class="text-primary-content font-semibold">
                        {{ $post->author->name }}
                    </p>
                    <p class="text-muted">
                        Consultor Financeiro
                    </p>
                </div>
                <p class="text-sm text-zinc-400 mt-1">{{ $post->author->description }}</p>
            </div>
        </div>
    </section>
</article>
