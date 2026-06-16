@php
    use Filament\Facades\Filament;
    use Guava\FilamentKnowledgeBase\Facades\KnowledgeBase;

    $plugin = KnowledgeBase::plugin();
    $companion = KnowledgeBase::companion();

    $hasModalPreviews = $companion->hasModalPreviews();
    $hasSlideOverPreviews = $companion->hasSlideOverPreviews();
    $hasModalTitleBreadcrumbs = $companion->hasModalTitleBreadcrumbs();
    $target = $companion->shouldOpenKnowledgeBasePanelInNewTab() ? '_blank' : '_self';
    $articleClass = $plugin->getArticleClass();
    $hidePanelLinks = $companion->shouldDisableKnowledgeBasePanelButton();
    $documentables = $this->getDocumentation();
@endphp

<div
    @class(['hidden' => empty($documentation)])
    x-data="{ open: false }"
    x-on:keydown.escape.window="open = false"
    x-on:click.outside="open = false"
>
    @if (! empty($documentation))
        <div class="relative px-4 pb-4">
            {{-- Trigger Button --}}
            <button
                x-on:click="open = !open"
                type="button"
                class="
                    flex w-full items-center gap-x-3 rounded-lg px-3 py-2.5
                    text-sm font-medium
                    text-gray-700 dark:text-gray-200
                    bg-gray-50 dark:bg-white/5
                    ring-1 ring-gray-950/10 dark:ring-white/20
                    hover:bg-gray-100 dark:hover:bg-white/10
                    transition duration-150 ease-in-out
                "
            >
                <x-filament::icon
                    icon="heroicon-o-question-mark-circle"
                    class="h-5 w-5 shrink-0 text-primary-500 dark:text-primary-400"
                />

                <span
                    x-show="$store.sidebar.isOpen"
                    x-transition:enter="fi-transition-enter"
                    x-transition:enter-start="fi-transition-enter-start"
                    x-transition:enter-end="fi-transition-enter-end"
                    class="flex-1 text-start"
                >
                    {{ __('filament-knowledge-base::translations.help') }}
                </span>

                <x-filament::icon
                    icon="heroicon-m-chevron-up"
                    x-show="$store.sidebar.isOpen"
                    x-bind:class="open ? '' : 'rotate-180'"
                    class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500 transition-transform duration-200"
                />
            </button>

            {{-- Floating Popover --}}
            <div
                x-show="open"
                x-cloak
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-2"
                class="
                    absolute bottom-full left-4 right-4 mb-2
                    rounded-xl
                    bg-white dark:bg-gray-900
                    ring-1 ring-gray-950/5 dark:ring-white/10
                    shadow-lg shadow-gray-950/5 dark:shadow-none
                    max-h-80 overflow-y-auto
                    z-50
                "
            >
                {{-- Header --}}
                <div class="sticky top-0 bg-white dark:bg-gray-900 px-4 py-3 border-b border-gray-100 dark:border-white/10 rounded-t-xl">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                        {{ __('filament-knowledge-base::translations.help') }}
                    </p>
                </div>

                {{-- Doc Items --}}
                <div class="p-2 space-y-0.5">
                    @foreach ($documentables as $documentable)
                        <button
                            type="button"
                            wire:key="help-item-{{ $documentable->getId() }}"
                            @if ($hasModalPreviews)
                                x-on:click="$dispatch('open-modal', { id: '{{ $documentable->getId() }}' }); open = false"
                            @else
                                onclick="window.open('{{ $documentable->getUrl() }}', '{{ $target }}')"
                            @endif
                            class="
                                flex w-full items-center gap-x-3 rounded-lg px-3 py-2
                                text-sm text-gray-600 dark:text-gray-300
                                hover:bg-primary-50 dark:hover:bg-primary-500/10
                                hover:text-primary-600 dark:hover:text-primary-400
                                transition duration-150 ease-in-out
                                group
                            "
                        >
                            @if ($documentable->getIcon())
                                <x-filament::icon
                                    :icon="$documentable->getIcon()"
                                    class="h-4 w-4 shrink-0 text-gray-400 dark:text-gray-500 group-hover:text-primary-500 dark:group-hover:text-primary-400 transition duration-150"
                                />
                            @endif

                            <span class="truncate">{{ $documentable->getTitle() }}</span>
                        </button>
                    @endforeach
                </div>

                {{-- Footer --}}
                @if (! $hidePanelLinks)
                    <div class="border-t border-gray-100 dark:border-white/10 p-2">
                        <a
                            href="{{ Filament::getPanel('knowledge-base')->getUrl() }}"
                            target="{{ $target }}"
                            class="
                                flex w-full items-center gap-x-3 rounded-lg px-3 py-2
                                text-sm text-gray-400 dark:text-gray-500
                                hover:bg-gray-50 dark:hover:bg-white/5
                                hover:text-primary-600 dark:hover:text-primary-400
                                transition duration-150 ease-in-out
                            "
                        >
                            <x-filament::icon
                                icon="heroicon-o-arrow-top-right-on-square"
                                class="h-4 w-4 shrink-0"
                            />
                            <span>{{ __('filament-knowledge-base::translations.open-documentation') }}</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif

    <x-filament-actions::modals />

    @push('scripts')
        <div class="gu-kb-modals h-0 overflow-hidden">
            @if ($hasModalPreviews)
                @foreach ($documentables as $documentable)
                    <x-filament::modal
                        :id="$documentable->getId()"
                        :close-by-clicking-away="true"
                        :close-button="true"
                        width="3xl"
                        :slide-over="$hasSlideOverPreviews"
                        class="[&_.fi-modal-content]:px-8 [&_.fi-modal-content]:py-4 [&_.fi-modal-content]:gap-y-0"
                        :footer-actions-alignment="\Filament\Support\Enums\Alignment::End"
                        :sticky-footer="true"
                        :sticky-header="true"
                    >
                        <x-slot name="heading">
                            <div class="flex items-center gap-x-3">
                                @if ($documentable->getIcon())
                                    <x-filament::icon
                                        :icon="$documentable->getIcon()"
                                        class="h-5 w-5 text-primary-500 dark:text-primary-400"
                                    />
                                @endif
                                <span>
                                    @if ($hasModalTitleBreadcrumbs && ! empty($documentable->getBreadcrumbs()))
                                        {{ KnowledgeBase::breadcrumbs($documentable) }}
                                    @else
                                        {{ $documentable->getTitle() }}
                                    @endif
                                </span>
                            </div>
                        </x-slot>

                        <x-filament-knowledge-base::content @class([
                            'gu-kb-article-modal',
                            $articleClass => ! empty($articleClass),
                        ])>
                            {!! $documentable->getSimpleHtml() !!}
                        </x-filament-knowledge-base::content>

                        <x-slot name="footerActions">
                            @if (! $hidePanelLinks)
                                <x-filament::button
                                    tag="a"
                                    :href="$documentable->getUrl()"
                                    :target="$target"
                                    icon="heroicon-o-arrow-top-right-on-square"
                                    size="sm"
                                >
                                    {{ __('filament-knowledge-base::translations.open-documentation') }}
                                </x-filament::button>
                            @endif
                            <x-filament::button
                                color="gray"
                                size="sm"
                                x-on:click.prevent="$dispatch('close-modal', { id: '{{ $documentable->getId() }}' })"
                            >
                                {{ __('filament-knowledge-base::translations.close') }}
                            </x-filament::button>
                        </x-slot>
                    </x-filament::modal>
                @endforeach
            @endif
        </div>
    @endpush
</div>
