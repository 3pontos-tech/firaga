@props ([
    'variant' => 'default',
    'name',
    'time' => null,
    'avatar' => null,
    'avatarAlt' => '',
    'rating' => 5
])

@php
    $stars = max(0, min(5, (int) $rating));
@endphp

@if ($variant === 'centered')
    <div {{ $attributes->class(['flex flex-col gap-4 rounded-md']) }}>
        @if ($avatar)
            <div class="flex items-center justify-center">
                <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" size="lg" />
            </div>
        @endif

        <x-fr-text class="text-text-high! font-medium! italic"> {{ $slot }} </x-fr-text>

        <div class="flex items-center justify-between gap-4">
            <div class="flex flex-col">
                <x-fr-text size="sm" class="text-text-high! font-semibold!">{{ $name }}</x-fr-text>
                @if ($time)
                    <x-fr-text size="xs" class="text-text-low!">{{ $time }}</x-fr-text>
                @endif
            </div>

            <div class="flex shrink-0 items-center gap-1">
                @for ($i = 0; $i < $stars; $i++)
                    <x-fas-star class="text-yellow-primary size-4 shrink-0" />
                @endfor
            </div>
        </div>
    </div>
@else
    <div {{ $attributes->class(['flex flex-col gap-4']) }}>
        <x-fr-text class="text-text-high! font-medium! italic"> {{ $slot }} </x-fr-text>

        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                @if ($avatar)
                    <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" size="md" />
                @endif
                <div class="flex flex-col">
                    <x-fr-text size="sm" class="text-text-high! font-semibold!">{{ $name }}</x-fr-text>
                    @if ($time)
                        <x-fr-text size="xs" class="text-text-low!">{{ $time }}</x-fr-text>
                    @endif
                </div>
            </div>

            <div class="flex shrink-0 items-center gap-1">
                @for ($i = 0; $i < $stars; $i++)
                    <x-fas-star class="text-yellow-primary size-4 shrink-0" />
                @endfor
            </div>
        </div>
    </div>
@endif
