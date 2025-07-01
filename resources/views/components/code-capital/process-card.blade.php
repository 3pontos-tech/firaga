@props([
    'icon' => 'heroicon-o-user-group',
    'number' => 1,
    'badge' => '30 Minutes • Free',
    'title' => 'Personalized Initial Consultation',
    'description' => 'A one-on-one session to understand your current situation, goals, and explain your possibilities in the international investment market.'
])

<div
    class="flex flex-col items-center text-center space-y-8 relative bg-base-200 p-8 rounded-xl border border-base-300 shadow-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:border-primary/20">
    <div class="relative">
        <div
            class="flex h-24 w-24 items-center justify-center rounded-full bg-gradient-to-br from-primary to-primary/80 shadow-lg transition-all duration-300 hover:from-primary/90 hover:to-primary group">
            <x-filament::icon :icon="$icon"
                              class="h-12 w-12 text-white transition-transform duration-300 group-hover:scale-110"/>
        </div>
        <div
            class="absolute -top-3 -right-3 flex h-10 w-10 items-center justify-center rounded-full bg-secondary border-2 border-base-100 shadow-md transition-all duration-300 hover:bg-secondary/90">
            <span class="text-lg font-bold text-white">{{ $number }}</span>
        </div>
    </div>
    <div class="space-y-4">
        <div class="inline-flex items-center rounded-full border px-3 py-1 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-primary/60 text-primary-content border-primary/20 shadow-sm">
            {{ $badge }}
        </div>
        <h3 class="text-2xl font-bold text-base-content">{{ $title }}</h3>
        <p class="text-base-content/80 leading-relaxed max-w-sm text-base">{{ $description }}</p>
    </div>
</div>
