@props (['featured' => false])

<li class="flex items-center gap-3">
    @if ($featured)
        <x-heroicon-c-star class="text-yellow-primary size-5" />
    @else
        <x-heroicon-c-check class="size-5 text-green-600" />
    @endif
    <x-fr-text>{{ $slot }}</x-fr-text>
</li>
