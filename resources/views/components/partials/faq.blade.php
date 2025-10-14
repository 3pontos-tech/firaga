@php use App\Enums\CustomComponent; @endphp
@props([
     'description',
     'solutions' => collect(),
])
<div class="container mx-auto py-6 sm:py-8 md:py-10 lg:py-14 xl:py-16">
    <div class="px-4 md:px-6">
        <div class="flex flex-col bg-elevation-01dp border border-outline-light dark:border-outline-dark rounded-xl transition lg:grid grid-cols-7 gap-8
            lg:gap-12 items-stretch">
            <div class="relative w-full h-full col-span-2">
                <img alt="Customer support representative helping customers" loading="lazy" decoding="async"
                     class="rounded-lg object-cover w-full h-full" style="color: transparent;"
                     src="{{ $renderable?->getFirstMediaUrl(CustomComponent::Faq->value) ?? asset('images/stock/hero-stock.png') }}">
            </div>
            <div class="w-full p-8 lg:p-16 lg:px-4 lg:pr-12 lg:col-span-5">
                <div class="flex flex-col gap-y-4 sm:gap-y-6 md:gap-y-8">
                    <h2 class="text-xl sm:text-3xl md:text-4xl font-bold text-text-high">
                        Perguntas Frequentes
                    </h2>
                    @if(!empty($description))
                        <h3 class="text-text-medium">
                            {{ $description }}
                        </h3>
                    @endif
                </div>
                <div class="w-full space-y-4 sm:space-y-6 md:space-y-8 mt-6 sm:mt-8">
                    @forelse($solutions as $index => $solution)
                        <div
                            x-data="{ open: false }"
                            :class="{'outline outline-outline-dark bg-elevation-02dp': open,}"
                            class="group transition-all duration-300 ease-in-out hover:outline hover:outline-outline-dark
                                hover:bg-elevation-02dp rounded-lg p-3 sm:p-4"
                        >
                            <h3 class="flex">
                                <button type="button" @click="open = !open" :aria-expanded="open"
                                        :class="{'text-text-high': open, 'text-text-medium': !open,}"
                                        class="flex flex-1 items-center justify-between group-hover:text-text-high
                                        font-medium transition-all text-left text-base sm:text-lg"
                                        aria-controls="faq-content-{{ $index }}">
                                    {{ $solution['question'] ?? '' }}
                                    <svg
                                        class="h-4 w-4 sm:h-5 sm:w-5 text-muted transition-transform duration-200 flex-shrink-0 ml-4"
                                        :class="{ 'rotate-180': open }" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </h3>
                            <div x-show="open" x-collapse id="faq-content-{{ $index }}" class="pb-3 sm:pb-4">
                                <div
                                    class="text-text-high/70 bg-base-100 p-3 sm:p-4 text-sm sm:text-base leading-relaxed">
                                    {{ $solution['answer'] ?? '' }}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-6 sm:py-8">
                            <p class="text-muted text-sm sm:text-base">Nenhum item cadastrado.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
