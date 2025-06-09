@props([
    'quote' => '',
    'author' => '',
    'role' => '',
    'image' => '',
    'highlighted' => false,
])

<div class="{{ $highlighted
    ? 'w-full max-w-3xl mx-auto shadow-xl hover:shadow-2xl hover:shadow-brand/30 hover:scale-[1.02] z-10 relative transition-all duration-500 flex-shrink-0'
    : 'w-full max-w-sm md:w-1/4 lg:w-1/5 scale-90 opacity-80 blur-[1px] md:blur-0 md:opacity-80 md:scale-90 transition-all duration-300 flex-shrink-0 md:mt-8' }}">

    <!-- Decorative elements -->
    @if ($highlighted)
    <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-brand/20 to-accent-text/20 rounded-full blur-xl opacity-70 animate-pulse-slow"></div>
    <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-tr from-brand-hover/20 to-brand/20 rounded-full blur-lg opacity-60 animate-float-slow"></div>
    @endif

    <blockquote class="{{ $highlighted
        ? 'relative bg-surface/90 backdrop-blur-xl rounded-3xl shadow-xl border border-brand/30 hover:border-brand/50 px-10 py-12 mb-10 overflow-hidden animate-fade-in transition-all duration-300'
        : 'relative bg-surface/80 backdrop-blur-xl rounded-2xl shadow-lg border border-brand/20 px-6 py-8 mb-6 overflow-hidden animate-fade-in' }}">

        <!-- Decorative pattern -->
        @if ($highlighted)
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.2\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'1\'/%3E%3C/g%3E%3C/svg%3E'); background-size: 20px 20px;"></div>
        </div>
        @endif

        <!-- Quote mark -->
        <svg class="{{ $highlighted
            ? 'absolute -top-8 -left-6 w-24 h-24 text-brand/20 animate-bounce-slow'
            : 'absolute -top-4 -left-4 w-10 h-10 text-brand/20' }}"
            fill="none" viewBox="0 0 48 48"><text x="0" y="40" font-size="48" font-family="serif">"</text></svg>

        <!-- Quote text with enhanced styling -->
        <div class="relative z-10">
            @if ($highlighted)
            <div class="w-1/4 h-1 bg-gradient-to-r from-brand/40 to-transparent rounded-full mb-6"></div>
            @endif

            <p class="{{ $highlighted
                ? 'italic text-body text-2xl leading-relaxed font-light tracking-wide'
                : 'italic text-body text-base leading-relaxed' }}">
                {{ $quote }}
            </p>

            @if ($highlighted)
            <div class="w-1/3 h-1 bg-gradient-to-r from-transparent to-brand/40 rounded-full mt-6 ml-auto"></div>
            @endif
        </div>
    </blockquote>

    <div class="{{ $highlighted ? 'flex flex-col md:flex-row items-center justify-between px-4 py-2' : 'flex flex-col items-start space-y-1 px-2' }}">
        <!-- Stars rating -->
        <div class="flex items-center mb-1 {{ $highlighted ? 'order-2 md:order-1' : '' }}">
            <!-- Animated Stars -->
            <div class="flex space-x-2 mb-6 {{ $highlighted ? 'animate-pulse-slow' : 'animate-pulse' }}">
                <span class="text-brand-hover {{ $highlighted ? 'text-3xl' : 'text-2xl' }} drop-shadow animate-float">★</span>
                <span class="text-brand-hover {{ $highlighted ? 'text-3xl' : 'text-2xl' }} drop-shadow animate-float delay-100">★</span>
                <span class="text-brand-hover {{ $highlighted ? 'text-3xl' : 'text-2xl' }} drop-shadow animate-float delay-200">★</span>
                <span class="text-brand-hover {{ $highlighted ? 'text-3xl' : 'text-2xl' }} drop-shadow animate-float delay-300">★</span>
                <span class="text-brand-hover {{ $highlighted ? 'text-3xl' : 'text-2xl' }} drop-shadow animate-float delay-400">★</span>
            </div>
        </div>

        <!-- Author info -->
        <div class="flex items-center {{ $highlighted ? 'space-x-8 order-1 md:order-2 mb-6 md:mb-0' : 'space-x-4' }}">
            @if ($highlighted)
                <div class="relative">
                    <!-- Glowing effect behind avatar -->
                    <span class="absolute inset-0 rounded-full bg-gradient-to-tr from-brand via-accent-text to-brand-hover blur-md opacity-70 animate-glow"></span>

                    <!-- Decorative ring -->
                    <div class="absolute -inset-2 rounded-full border-2 border-dashed border-brand/30 animate-spin-slow"></div>

                    <!-- Avatar image -->
                    <img
                        src="{{ $image }}"
                        alt="{{ $author }}"
                        class="w-20 h-20 rounded-full object-cover border-4 border-brand shadow-lg relative z-10 hover:scale-110 transition-all duration-300"
                        loading="lazy"
                    />
                </div>
            @else
                <img src="{{ $image }}" alt="{{ $author }}" class="w-10 h-10 rounded-full border-2 border-brand object-cover hover:scale-110 transition-all duration-300" loading="lazy" />
            @endif

            <!-- Author details with enhanced styling -->
            <div class="{{ $highlighted ? 'text-center md:text-left' : '' }}">
                <div class="text-heading font-bold {{ $highlighted ? 'text-2xl mb-1' : 'text-sm' }}">{{ $author }}</div>
                <div class="{{ $highlighted ? 'text-brand text-base font-medium px-4 py-1 bg-brand/10 rounded-full inline-block' : 'text-brand text-xs font-medium' }}">
                    {{ $role }}
                </div>
            </div>
        </div>
    </div>
</div>
