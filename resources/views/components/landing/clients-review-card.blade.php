@props(['card', 'index' => 0, 'isActive' => false])

<div
    class="rounded-xl space-y-8 text-white max-w-[424px] {{ $isActive ? 'bg-brand-primary h-fit relative px-8 pt-8 pb-3' : 'bg-outline-dark h-[340px] p-8' }}">
    <div class="flex flex-col gap-8">
        <div class="flex items-center">
            <div class="rounded-full w-16 h-16 bg-outline-light flex items-center justify-center">
            </div>
        </div>
        <p class="font-medium {{ $isActive ? 'text-text-light' : 'text-text-medium' }}">
            {{ $isActive ? $card['content'] : Str::limit($card['content'], 50) }}
        </p>
    </div>
    <div class="h-px mb-4 {{ $isActive ? 'bg-outline-light' : 'bg-outline-dark' }}">
    </div>
    <div class="flex justify-between items-center z-10 w-full">
        <div class="flex flex-col gap-1">
            <div class="font-bold text-text-light text-2xl">{{ $card['name'] }}</div>
            <div class="{{ $isActive ? 'text-text-light' : 'text-text-medium' }}">{{ $card['role'] }}</div>
        </div>
        <div>
            <x-lucide-chevron-right class="w-6 h-6 text-brand-primary {{ $isActive ? 'hidden' : '' }}" />
        </div>
    </div>
    @if($isActive)
    <div class="absolute bottom-[-25px] left-0 w-full h-fit pointer-events-none">
        <svg class="w-full h-auto " viewBox="0 0 424 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 31.9738C0 41.5632 8.37722 48.9988 17.8988 47.8608L140.796 33.1723C188.097 27.519 235.903 27.519 283.204 33.1723L406.101 47.8608C415.623 48.9988 424 41.5632 424 31.9738V16C424 7.16344 416.837 -1.07288e-06 408 -1.07288e-06H16C7.16343 -1.07288e-06 0 7.16344 0 16V31.9738Z"
                fill="#E2410A" />
        </svg>
    </div>
    @endif
</div>
