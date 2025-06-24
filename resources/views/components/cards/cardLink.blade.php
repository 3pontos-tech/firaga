@props([
    'title' => '',
    'description' => '',
    'route'=> ''
])

<a href="{{$route}}"
   class="group flex flex-col lg:flex-row lg:items-center justify-between py-10 hover:bg-secondary/10 transition rounded-xl relative overflow-hidden animate-fade-in">
    <span
        class="absolute left-0 top-0 w-2 h-full bg-linear-to-b from-secondary/40 via-accent/20 to-secondary/10 opacity-0 group-hover:opacity-100 transition-all"></span>
    <div class="lg:flex-1 flex items-center space-x-4">
                    <span
                        class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-linear-to-tr from-secondary via-accent to-secondary text-secondary text-2xl shadow animate-icon-float">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"></path>
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"></circle>
                        </svg>
                    </span>
        <div>
            <h3 class="text-2xl lg:text-3xl font-semibold group-hover:text-secondary transition">{{$title}}</h3>
            <p class="mt-2 text-base-content/60 max-w-xl leading-relaxed">
                {{str($description)->wordWrap(8)}}
            </p>
        </div>
    </div>
    <div class="mt-6 lg:mt-0 lg:ml-8 shrink-0">
        <svg class="w-7 h-7 text-secondary group-hover:translate-x-2 transition-transform animate-arrow-glow"
             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
    </div>
</a>
