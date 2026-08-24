@php
    $current = $paginator->currentPage();
    $last = $paginator->lastPage();

    $windowSize = 4;
    $start = max(1, $current - 1);
    $end = $start + $windowSize - 1;

    if ($end > $last) {
        $end = $last;
        $start = max(1, $last - $windowSize + 1);
    }

    $pages = [];

    if ($start > 1) {
        $pages[] = '...';
    }

    $pages = array_merge($pages, range($start, $end));

    if ($end < $last) {
        $pages[] = '...';
    }

    $arrowBox =
        'flex size-10 items-center justify-center rounded-xs border shadow-[-2px_4px_12px_rgba(24,24,24,0.08)] transition-colors';
    $pageBox =
        'font-display flex size-12 items-center justify-center rounded-xs border text-xs font-bold transition-colors';
    $label = 'font-display text-xs font-bold';
@endphp

@if ($paginator->hasPages())
    <div class="flex flex-col items-center gap-4 md:mt-7 md:flex-row md:items-center md:justify-between">
        <p class="text-text-high hidden font-sans text-xs font-bold md:block">
            Exibindo {{ $paginator->count() }} {{ $paginator->count() === 1 ? 'resultado' : 'resultados' }}
        </p>

        <div class="flex items-center gap-4 md:gap-8">
            {{-- First + Back --}}
            <div @class (['flex items-center gap-4', 'opacity-50' => $paginator->onFirstPage()])>
                @if ($paginator->onFirstPage())
                    <span class="{{ $arrowBox }} border-border-base text-icon-low cursor-not-allowed">
                        <x-heroicon-s-chevron-double-left class="size-5" />
                    </span>
                    <span class="{{ $label }} text-text-high hidden cursor-not-allowed md:block">Back</span>
                @else
                    <button
                        wire:click.prevent="gotoPage(1)"
                        class="{{ $arrowBox }} border-border-base text-icon-high hover:bg-elevation-01dp"
                        aria-label="Primeira página"
                    >
                        <x-heroicon-s-chevron-double-left class="size-5" />
                    </button>
                    <button
                        wire:click.prevent="previousPage()"
                        class="{{ $label }} text-text-high hidden transition-opacity hover:opacity-70 md:block"
                    >
                        Back
                    </button>
                @endif
            </div>

            {{-- Numbered pages --}}
            <div class="flex items-center gap-4">
                @foreach ($pages as $page)
                    @if ($page === '...')
                        <span class="{{ $pageBox }} border-border-base text-text-medium">&hellip;</span>
                    @elseif ($page === $current)
                        <span
                            class="{{ $pageBox }} border-brand-primary bg-brand-primary text-text-light shadow-[-2px_4px_12px_rgba(24,24,24,0.08)]"
                        >
                            {{ $page }}
                        </span>
                    @else
                        <button
                            wire:click.prevent="gotoPage({{ $page }})"
                            class="{{ $pageBox }} border-border-base text-text-high hover:bg-elevation-01dp"
                        >
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            </div>

            {{-- Next + Last --}}
            <div @class (['flex items-center gap-4', 'opacity-50' => !$paginator->hasMorePages()])>
                @if ($paginator->hasMorePages())
                    <button
                        wire:click.prevent="nextPage()"
                        class="{{ $label }} text-text-high hidden transition-opacity hover:opacity-70 md:block"
                    >
                        Next
                    </button>
                    <button
                        wire:click.prevent="gotoPage({{ $last }})"
                        class="{{ $arrowBox }} border-border-base text-icon-high hover:bg-elevation-01dp"
                        aria-label="Última página"
                    >
                        <x-heroicon-s-chevron-double-right class="size-5" />
                    </button>
                @else
                    <span class="{{ $label }} text-text-high hidden cursor-not-allowed md:block">Next</span>
                    <span class="{{ $arrowBox }} border-border-base text-icon-low cursor-not-allowed">
                        <x-heroicon-s-chevron-double-right class="size-5" />
                    </span>
                @endif
            </div>
        </div>
    </div>
@endif
