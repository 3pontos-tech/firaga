<?php

use App\Enums\PostStatus;
use App\Models\CMS\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public ?int $featuredId = null;

    #[Computed]
    public function posts(): LengthAwarePaginator
    {
        return Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->when($this->featuredId, fn ($q) => $q->where('id', '!=', $this->featuredId))
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->paginate(5);
    }
};
?>

<section class="section">
    <div class="container flex flex-col gap-6">
        <x-fr-headline align="left">
            <x-slot:title>
                Confira nossos artigos
            </x-slot:title>
            <x-slot:description>
                Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o início
            </x-slot:description>
        </x-fr-headline>

        <div class="divide-border-base border-border-base divide-y border-y">
            @forelse ($this->posts as $post)
                @php $postAuthor = $post->author; @endphp
                <article class="flex items-center gap-4 py-6">
                    <img
                        src="{{ $post->getFirstMediaUrl('cover') ?: asset('images/guys-looking-at-notebook-but-gray.webp') }}"
                        alt="{{ $post->thumbnail_alt ?: $post->title }}"
                        class="size-18 shrink-0 rounded-sm object-cover"
                    />

                    <div class="flex min-w-0 flex-1 flex-col justify-center gap-2">
                        <x-fr-heading :level="3" size="xs">{{ $post->title }}</x-fr-heading>

                        <div class="flex flex-wrap items-center gap-2 truncate">
                            @if ($postAuthor->getFirstMediaUrl('avatar'))
                                <x-avatar :src="$postAuthor->getFirstMediaUrl('avatar')" :alt="$postAuthor->name" />
                            @endif
                            <x-fr-text
                                class="text-text-high! font-semibold!"
                                size="xs"
                                >{{ $postAuthor->name }}</x-fr-text
                            >
                            @if ($postAuthor->role)
                                <div class="bg-border-base size-1 rounded-full"></div>
                                <x-fr-text
                                    class="text-text-high! font-semibold!"
                                    size="xs"
                                    >{{ $postAuthor->role }}</x-fr-text
                                >
                            @endif
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-text-medium py-8 text-center">Nenhum artigo encontrado.</p>
            @endforelse
        </div>

        {{ $this->posts->links('pagination.blog') }}
    </div>
</section>
