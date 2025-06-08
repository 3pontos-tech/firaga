@props([
    'name' => 'Todos',
    'icon' => 'fas-user',
    'count' => 0,
])

<div href="#"
     class="w-full flex justify-between text-left px-4 py-3 rounded-lg text-sm transition-all  hover:bg-zinc-800 text-white font-medium">

    <div class="flex justify-around items-center gap-2">
        <x-filament::icon icon="fas-user" class="w-4 h-4 text-fire-500"/>
        <span>{{ $name }}</span>
    </div>
    <div class="flex items-center justify-center bg-zinc-800 text-xs text-white rounded-full px-2 py-1">
        {{ $count }}
    </div>
</div>
