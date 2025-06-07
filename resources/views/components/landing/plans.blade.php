<div class="bg-gray-900 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-3 text-white">Investimento Diversos Pacotes na medida</h2>
        <p class="text-gray-300 text-center mb-12 max-w-3xl mx-auto">Escolha o plano ideal para o seu momento financeiro</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            @foreach($plansData as $index => $plan)
                <div class="rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 flex flex-col relative
                    @if($plan['name'] === 'Gold') bg-yellow-600 text-white
                    @elseif($plan['name'] === 'Platinum') bg-blue-700 text-white md:scale-105 md:-mt-4 md:mb-4 z-10
                    @elseif($plan['name'] === 'Black') bg-gray-800 text-white
                    @endif">

                    @if($plan['name'] === 'Platinum')
                        <div class="absolute -top-4 left-0 right-0 mx-auto w-max px-4 py-1 bg-white text-blue-700 text-sm font-bold rounded-full shadow-md">
                            Mais Popular
                        </div>
                    @endif

                    <div class="@if($plan['name'] === 'Gold') border-b-2 border-yellow-400
                              @elseif($plan['name'] === 'Platinum') border-b-2 border-blue-400
                              @elseif($plan['name'] === 'Black') border-b-2 border-gray-400
                              @endif pb-4 mb-4">
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
                                <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0
                                    @if($plan['name'] === 'Gold') text-yellow-300
                                    @elseif($plan['name'] === 'Platinum') text-blue-300
                                    @elseif($plan['name'] === 'Black') text-gray-300
                                    @endif"
                                     fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium text-white">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="#" class="w-full
                        @if($plan['name'] === 'Gold') bg-yellow-500 hover:bg-yellow-400
                        @elseif($plan['name'] === 'Platinum') bg-blue-500 hover:bg-blue-400
                        @elseif($plan['name'] === 'Black') bg-black hover:bg-gray-900 border border-gray-600
                        @endif
                        transition-colors duration-200 text-white py-3 px-4 rounded-lg font-bold text-center text-lg shadow-md">
                        {{ $plan['button']['text'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
