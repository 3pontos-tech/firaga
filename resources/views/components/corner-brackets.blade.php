@props (['size' => 'h-16 w-18 md:h-24 md:w-26', 'color' => 'border-brand-primary'])

<div
    {{
        $attributes->class(
            'pointer-events-none absolute inset-0',
        )
    }}
    aria-hidden="true"
>
    <span
        class="absolute top-0 left-0 rounded-tl-lg border-t-[6px] border-l-[6px] md:border-t-8 md:border-l-8 {{ $size }} {{ $color }}"
    ></span>

    <span
        class="absolute right-0 bottom-0 rounded-br-lg border-r-[6px] border-b-[6px] md:border-r-8 md:border-b-8 {{ $size }} {{ $color }}"
    ></span>
</div>
