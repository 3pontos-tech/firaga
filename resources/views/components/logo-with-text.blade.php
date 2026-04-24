@props (['size' => 'md', 'clickable' => true])

@php
    $width = match ($size) {
        'sm' => '80px',
        'xl' => '180px',
        default => '120px',
    };

    $svg = file_get_contents(public_path('images/logos/logo-with-text.svg'));
    $wrapperStyle = 'width: ' . $width;
    $wrapperClasses = 'text-brand-primary inline-flex [&>svg]:w-full [&>svg]:h-auto';
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
