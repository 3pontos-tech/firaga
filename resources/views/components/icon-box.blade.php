@props (['icon'])

<div
    {{
        $attributes->class([
            'bg-brand-primary/12 border-brand-primary/16 size-11 items-center justify-center rounded-xs border p-2.5',
        ])
    }}
>
    <x-dynamic-component :component="$icon" class="text-brand-primary h-full w-auto" />
</div>
