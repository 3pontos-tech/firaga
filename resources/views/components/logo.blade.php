@props (['size' => 'md', 'clickable' => true])

@php
    $height = match ($size) {
        'sm' => '16px',
        default => '22px',
    };
@endphp

@php
    $svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.36 113.36" fill="currentColor" aria-label="{{ config('app.name') }}" role="img" style="height: {$height}; width: auto;">
    <g>
        <path d="M106.32,12.12l-4.67,22.76c-.01.06-.03.11-.04.17-1.74,5.84-5.92,10.64-11.86,11.86l-19.25,3.95-11.74,2.4c-6.93,1.43-13.32,4.87-18.34,9.89-.05.05-.1.11-.14.16l-30.93,39.42c-1.24,1.58-3.75.29-3.18-1.64h0s5.87-19.9,5.87-19.9l3.13-10.64,7.61-25.79c1.82-6.17,6.9-10.83,13.19-12.11l46.54-9.49c6.6-1.35,12.67-4.61,17.44-9.38l3.3-3.3c1.28-1.28,3.43-.12,3.07,1.65Z"/>
        <path d="M92.82,59.05l-2.72,9.22c-1.31,4.44-5.19,7.63-9.79,8.06l-32.78,3.07c-2.02.19-3.16-2.25-1.73-3.68l9.71-9.71c2.04-2.04,4.63-3.43,7.46-4.01l27.43-5.59c1.55-.32,2.88,1.13,2.43,2.65Z"/>
    </g>
</svg>
SVG;
@endphp

@if ($clickable)
    <a href="{{ route('home') }}" {{ $attributes->class('text-brand-primary inline-flex') }}> {!! $svg !!} </a>
@else
    <span {{ $attributes->class('text-brand-primary inline-flex') }}> {!! $svg !!} </span>
@endif
