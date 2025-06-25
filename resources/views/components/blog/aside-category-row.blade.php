@props([
    'name' => 'Todos',
    'icon' => 'fas-user',
    'count' => 0,
])

<div href="#"
     class="w-full flex text-primary-content justify-between text-left px-4 py-3 rounded-lg text-sm transition-all  hover:bg-base-200 font-medium">

    <div class="flex justify-around items-center gap-2">
        <x-filament::icon icon="fas-user" class="w-4 h-4 text-primary"/>
        <span>{{ $name }}</span>
    </div>
    <div class="flex items-center justify-center bg-base-200 text-xs  rounded-full px-2 py-1">
        {{ $count }}
    </div>
</div>
