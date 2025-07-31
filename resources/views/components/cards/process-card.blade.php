@props([
    'icon' => 'goal',
    'number' => 1,
    'title' => 'Personalized Initial Consultation',
    'description' => 'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.',
    'class' => null
])

<div
    class="z-10 flex flex-col space-y-8 relative p-8 rounded-xl">
    <div class="flex flex-row gap-y-0.5 gap-x-4 items-center">
        <div
            class="flex h-11 w-11 items-center justify-center rounded-full bg-brand-primary shadow-lg text-text-high text-2xl">
            <span>{{ $number }}</span>
        </div>
        <div class="flex flex-col text-left">
            <h4 class="text-text-high font-medium text-2xl">
                {{ $title }}
            </h4>
        </div>
    </div>
    <x-cards.feature-card :title="$title" :description="$description" :icon="$icon" :class="$class"/>
</div>
