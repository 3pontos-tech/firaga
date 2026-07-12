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

    /** @var array<int, int> */
    public array $excludedIds = [];

    #[Computed]
    public function posts(): LengthAwarePaginator
    {
        return Post::query()
            ->where('status', PostStatus::PUBLISHED)
            ->when($this->excludedIds, fn ($q) => $q->whereNotIn('id', $this->excludedIds))
            ->with(['author', 'categories'])
            ->latest('published_at')
            ->paginate(6);
    }
};
?>

<section class="section md:mt-20!">
    <div class="container flex flex-col gap-8">
        <x-fr-headline align="left-desk">
            <x-slot:title>
                Confira todos os <mark>nossos artigos</mark>
            </x-slot:title>
            <x-slot:description>
                Você aprende o jeito Firece de diagnosticar, planejar e acompanhar com casos reais desde o início
            </x-slot:description>
        </x-fr-headline>

        @if ($this->posts->isNotEmpty())
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                @foreach ($this->posts as $post)
                    <x-blog-card :post="$post" wire:key="post-{{ $post->id }}" />
                @endforeach
            </div>
        @else
            <p class="text-text-medium py-8 text-center">Nenhum artigo encontrado.</p>
        @endif

        {{ $this->posts->links('pagination.blog') }}
    </div>
</section>
