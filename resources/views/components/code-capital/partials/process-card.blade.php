@props([
    'icon' => 'goal',
    'number' => 1,
    'badge' => '30 Minutes • Free',
    'title' => 'Personalized Initial Consultation',
    'description' => 'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.',
    'class' => null
])

<div
    class="z-10 flex flex-col  space-y-8 relative p-8 rounded-xl">
    <div class="flex flex-row gap-2 items-center">
        <div
            class="flex h-11 w-11 items-center justify-center rounded-full bg-brand-primary shadow-lg text-text-high text-2xl">
            <span>{{ $number }}</span>
        </div>
        <div class="flex flex-col text-left">
            <h4 class="text-text-high font-medium text-2xl">
                {{ $badge }}
            </h4>
            <p class="text-text-medium font-medium">
                dasdasdas
            </p>
        </div>
    </div>
    <x-code-capital.partials.feature-card :title="$title" :description="$description" :icon="$icon" :class="$class"/>
</div>
