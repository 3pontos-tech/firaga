@php


@endphp
<x-layout.guest>

    <x-landing.hero :hero-data="$heroData" />
    <x-landing.our-work :card-data="$cardData" />
    <x-landing.our-solutions :solutions-data="$solutionsData" />
    <x-landing.testimonial />
    <x-landing.cta />
    <x-landing.footer />
</x-layout.guest>
