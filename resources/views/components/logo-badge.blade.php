@props (['size' => 'sm'])

<div
    {{
        $attributes->class([
            'text-brand-primary flex items-center gap-1',
        ])
    }}
>
    <x-logo :size="$size" :clickable="false" class="text-inherit!" />
    <x-fr-text size="sm" class="font-semibold! text-inherit!">{{ $slot }}</x-fr-text>
</div>
