@props([
    'title' => '',
    'description' => '',
    'route'=> ''
])

<a href="{{$route}}" class="group flex flex-col lg:flex-row lg:items-center justify-between py-10 hover:bg-orange-500/10 transition rounded-xl relative overflow-hidden animate-fade-in">
    <span class="absolute left-0 top-0 w-2 h-full bg-gradient-to-b from-orange-500/40 via-pink-500/20 to-yellow-400/10 opacity-0 group-hover:opacity-100 transition-all"></span>
    <div class="lg:flex-1 flex items-center space-x-4">
                    <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-yellow-400 text-orange-500 text-2xl shadow animate-icon-float">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"></path>
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"></circle>
                        </svg>
                    </span>
        <div>
            <h3 class="text-2xl lg:text-3xl font-semibold group-hover:text-orange-500 transition">{{$title}}</h3>
            <p class="mt-2 text-gray-400 max-w-xl leading-relaxed">
                {{str($description)->wordWrap(8)}}
            </p>
        </div>
    </div>
    <div class="mt-6 lg:mt-0 lg:ml-8 flex-shrink-0">
        <svg class="w-7 h-7 text-orange-500 group-hover:translate-x-2 transition-transform animate-arrow-glow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
    </div>
</a>
