@props ([
    'variant' => 'default',
    'name',
    'role' => null,
    'plan' => null,
    'avatar' => null,
    'avatarAlt' => '',
    'metric' => null
])

@if ($variant === 'centered')
    <div {{ $attributes->class(['flex flex-col gap-4']) }}>
        @if ($avatar)
            <div class="flex items-center justify-center">
                <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" size="lg" />
            </div>
        @endif

        <div class="flex items-center justify-between">
            <x-fas-quote-left class="text-brand-primary size-4" />
            @if ($metric)
                <x-fr-text size="sm" class="text-brand-primary!">{{ $metric }}</x-fr-text>
            @endif
        </div>

        <hr class="border-brand-primary w-full" />

        <x-fr-text class="text-text-high! font-medium! italic"> {{ $slot }} </x-fr-text>

        <div class="flex flex-col items-center justify-center gap-2">
            <x-fr-text class="text-text-high!">-- {{ $name }}</x-fr-text>
            @if ($role || $plan)
                <div class="flex items-center justify-center gap-2">
                    @if ($role)
                        <x-fr-text size="sm">{{ $role }}</x-fr-text>
                    @endif
                    @if ($role && $plan)
                        <div class="bg-text-high size-1 rounded-full"></div>
                    @endif
                    @if ($plan)
                        <x-fr-text size="sm" class="text-brand-primary!">{{ $plan }}</x-fr-text>
                    @endif
                </div>
            @endif
        </div>
    </div>
@else
    <div {{ $attributes->class(['flex flex-col gap-3']) }}>
        <div class="flex items-center justify-between">
            <x-fas-quote-left class="text-brand-primary size-4" />
            @if ($metric)
                <x-fr-text size="sm" class="text-brand-primary!">{{ $metric }}</x-fr-text>
            @endif
        </div>

        <hr class="border-brand-primary w-full" />

        <x-fr-text class="text-text-high! font-medium! italic"> {{ $slot }} </x-fr-text>

        <div class="flex items-center gap-2">
            @if ($avatar)
                <x-avatar :src="$avatar" :alt="$avatarAlt ?: $name" />
            @endif
            <x-fr-text size="sm">{{ $name }}</x-fr-text>
            @if ($role)
                <div class="bg-text-high size-1 rounded-full"></div>
                <x-fr-text size="sm">{{ $role }}</x-fr-text>
            @endif
            @if ($plan)
                <div class="bg-text-high size-1 rounded-full"></div>
                <x-fr-text size="sm" class="text-brand-primary!">{{ $plan }}</x-fr-text>
            @endif
        </div>
    </div>
@endif
