@props([
    'icon' => 'heroicon-o-user-group',
    'number' => 1,
    'badge' => '30 Minutes • Free',
    'title' => 'Personalized Initial Consultation',
    'description' => 'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.',
    'class' => null
])

<div
    class="relative z-10 bg-base-100 flex flex-col  space-y-8 relative p-8 rounded-xl">
    <div class="flex flex-row gap-2 items-center">
        <div
            class="flex h-8 w-8 items-center justify-center rounded-full bg-secondary shadow-lg text-secondary-content group">
            <span>{{ $number }}</span>
        </div>
        <div class="flex flex-col text-left">
            <h4 class="text-base-content">
                {{ $badge }}
            </h4>
            <p class="text-base-content/90">
                dasdasdas
            </p>
        </div>
    </div>
    <x-code-capital.partials.feature-card :title="$title" :description="$description" :icon="$icon" :class="$class"/>
</div>
