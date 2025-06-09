@php
    $styles = match ($plan['name']) {
        'Gold' => [
            'card' => 'bg-yellow-600 text-white',
            'badge' => '',
            'border' => 'border-b-2 border-yellow-400',
            'icon' => 'text-yellow-300',
            'button' => 'bg-yellow-500 hover:bg-yellow-400',
        ],
        'Platinum' => [
            'card' => 'bg-blue-700 text-white md:scale-105 md:-mt-4 md:mb-4 z-10',
            'badge' => 'Mais Popular',
            'border' => 'border-b-2 border-blue-400',
            'icon' => 'text-blue-300',
            'button' => 'bg-blue-500 hover:bg-blue-400',
        ],
        'Black' => [
            'card' => 'bg-gray-800 text-white',
            'badge' => '',
            'border' => 'border-b-2 border-gray-400',
            'icon' => 'text-gray-300',
            'button' => 'bg-black hover:bg-gray-900 border border-gray-600',
        ],
        default => [
            'card' => 'bg-white text-black',
            'badge' => '',
            'border' => 'border-b border-gray-300',
            'icon' => 'text-gray-500',
            'button' => 'bg-gray-100 hover:bg-gray-200',
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
        <h3 class="text-3xl font-bold mb-2">{{ $plan['name'] }}</h3>
        <p class="text-white/90 font-medium">
            {{ $plan['description'] }}
            @if(isset($plan['note']))
                <br><span class="italic text-sm font-medium text-white/75 mt-2 block">{{ $plan['note'] }}</span>
            @endif
        </p>
    </div>

    <ul class="mb-8 space-y-4 flex-grow">
        @foreach($plan['items'] as $item)
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0 {{ $styles['icon'] }}" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="font-medium text-white">{{ $item }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#" class="w-full {{ $styles['button'] }} transition-colors duration-200 text-white py-3 px-4 rounded-lg font-bold text-center text-lg shadow-md">
        {{ $plan['button']['text'] }}
    </a>
</div>
