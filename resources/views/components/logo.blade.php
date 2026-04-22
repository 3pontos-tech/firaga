@props (['size' => 'md'])

@php
    $height = match ($size) {
        'sm' => '16px',
        default => '22px',
    };
@endphp

<a href="{{ route('home') }}" {{ $attributes }}>
    <img src="{{ asset('images/logos/logo.svg') }}" alt="{{ config('app.name') }}" style="height: {{ $height }}" />
</a>
