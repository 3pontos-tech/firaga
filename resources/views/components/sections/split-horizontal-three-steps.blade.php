@props([
    'headline',
    'cards' => [],

])
@php
    $maxGridColumns = match($cards->columns) {
        1 => 'lg:grid-cols-1',
        2 => 'lg:grid-cols-2',
        default => 'lg:grid-cols-3',
    };
@endphp

<section class="container mx-auto text-text-dark dark:text-text-light overflow-hidden ">
    <div class="mx-auto flex flex-col container gap-y-12">
        <div class="flex flex-col items-center gap-y-6">
            <x-headline :component="$headline" />
        </div>
        <div class="grid  {{ $maxGridColumns }} gap-8">
            @foreach($cards as $card)
                <x-card :card="$card" variant="callout" emphasis="primary" align="left" :interactive="true" />
            @endforeach
        </div>
    </div>
</section>

