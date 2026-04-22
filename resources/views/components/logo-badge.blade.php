@props (['size' => 'sm'])

<div
    {{
        $attributes->class([
            'flex items-center gap-1 text-brand-primary',
        ])
    }}
>
    <x-logo :size="$size" />
    <x-fr-text size="sm" class="text-inherit!">{{ $slot }}</x-fr-text>
</div>
