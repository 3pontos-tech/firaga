@php
    $styles = match (strtolower($plan['name'])) {
        'gold' => [
            'card' => 'bg-linear-to-br from-yellow-300 to-yellow-500 bg-yellow-400 text-yellow-900',
            'badge' => '',
            'body' => 'text-yellow-900',
            'border' => 'border-b-2 border-yellow-600',
            'icon' => 'text-yellow-900',
            'button' => ' bg-linear-to-br from-yellow-700 to-yellow-600 text-white hover:bg-yellow-600',
        ],
        'platinum' => [
            'card' => 'bg-linear-to-br from-emerald-700 to-emerald-900 text-white',
            'body' => 'text-white',
            'badge' => '',
            'border' => 'border-b-2 border-white',
            'icon' => 'text-white',
            'button' => 'bg-linear-to-br from-emerald-900 to-emerald-700 text-white hover:bg-gray-100',
        ],
        'black' => [
            'card' => 'bg-linear-to-br from-black to-zinc-900 text-white',
            'body' => 'text-white',
            'badge' => '',
            'border' => 'border-b-2 border-neutral-600',
            'icon' => 'text-neutral-300',
            'button' => 'bg-linear-to-br from-zinc-900 to-black text-white border border-neutral-600 hover:bg-neutral-700',
        ],
        default => [
            'card' => 'bg-white text-neutral-900',
            'badge' => '',
            'body' => 'text-neutral-900',
            'border' => 'border-b border-neutral-300',
            'icon' => 'text-neutral-500',
            'button' => 'bg-neutral-100 text-neutral-900 hover:bg-neutral-200',
        ]
    };
@endphp

<div class="rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 flex flex-col relative {{ $styles['card'] }}">
    @if($styles['badge'])
        <div class="absolute -top-4 left-0 right-0 mx-auto w-max px-4 py-1 bg-white text-blue-700 text-sm font-bold rounded-full shadow-md">
            {{ $styles['badge'] }}
        </div>
    @endif

    <div class="{{ $styles['border'] }} pb-4 mb-4">
        <h3 class="text-3xl font-bold mb-2">{{ str($plan['name'])->ucfirst() }}</h3>
        <p class="{{ $styles['body'] }} font-medium">
            {{ $plan['description'] }}
            @if(isset($plan['note']))
                <br><span class="italic text-sm font-medium {{ $styles['body'] }} mt-2 block">{{ $plan['note'] }}</span>
            @endif
        </p>
    </div>

    <ul class="mb-8 space-y-4 grow">
        @foreach($plan['items'] as $item)
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-3 mt-0.5 shrink-0 {{ $styles['icon'] }}" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-medium {{ $styles['body'] }}">{{ $item }}</span>
            </li>
        @endforeach
    </ul>

    <a href="{{ $plan['button']['url'] ?? '#' }}" class="w-full {{ $styles['button'] }} transition-colors duration-200 py-3 px-4 rounded-lg font-bold text-center text-lg shadow-md">
        {{ $plan['button']['text'] }}
    </a>
</div>
