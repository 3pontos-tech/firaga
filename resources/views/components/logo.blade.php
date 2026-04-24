@props (['size' => 'md', 'clickable' => true])

@php
    $height = match ($size) {
        'sm' => '16px',
        default => '22px',
    };

    $svg = file_get_contents(public_path('images/logos/logo.svg'));
    $wrapperStyle = 'height: ' . $height;
    $wrapperClasses = 'text-brand-primary inline-flex [&>svg]:h-full [&>svg]:w-auto';
@endphp

@if ($clickable)
    <a
        href="{{ route('home') }}"
        style="{{ $wrapperStyle }}"
        {{ $attributes->class($wrapperClasses) }}
        aria-label="{{ config('app.name') }}"
        >{!! $svg !!}</a
    >
@else
    <span
        style="{{ $wrapperStyle }}"
        {{ $attributes->class($wrapperClasses) }}
        aria-label="{{ config('app.name') }}"
        role="img"
        >{!! $svg !!}</span
    >
@endif
