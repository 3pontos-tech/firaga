@props (['size' => 'md', 'clickable' => true])

@php
    $height = match ($size) {
        'sm' => '16px',
        default => '22px',
    };
@endphp

@if ($clickable)
    <a href="{{ route('home') }}" {{ $attributes }}>
        <img src="{{ asset('images/logos/logo.svg') }}" alt="{{ config('app.name') }}" style="height: {{ $height }}" />
    </a>
@else
    <img
        src="{{ asset('images/logos/logo.svg') }}"
        alt="{{ config('app.name') }}"
        style="height: {{ $height }}"
        {{ $attributes }}
    />
@endif
