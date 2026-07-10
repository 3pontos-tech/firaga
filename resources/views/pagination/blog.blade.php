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

    $boxBase = 'flex size-9 items-center justify-center rounded-xs border text-xs transition-colors';
@endphp

@if ($paginator->hasPages())
    <div class="flex flex-col items-center gap-4 md:flex-row md:items-center md:justify-between">
        <p class="text-xxs text-text-high hidden font-sans font-semibold md:block">
            Exibindo {{ $paginator->count() }} {{ $paginator->count() === 1 ? 'resultado' : 'resultados' }}
        </p>

        <div class="flex items-center gap-1.5">
            {{-- First --}}
            @if ($paginator->onFirstPage())
                <span class="{{ $boxBase }} border-border-base text-text-low cursor-not-allowed">&laquo;</span>
            @else
                <button
                    wire:click.prevent="gotoPage(1)"
                    class="{{ $boxBase }} border-border-base text-text-high hover:bg-elevation-01dp"
                >
                    &laquo;
                </button>
            @endif

            {{-- Back --}}
            @if ($paginator->onFirstPage())
                <span class="text-text-low hidden cursor-not-allowed px-2 text-xs md:block">Back</span>
            @else
                <button
                    wire:click.prevent="previousPage()"
                    class="text-text-high hidden px-2 text-xs transition-opacity hover:opacity-70 md:block"
                >
                    Back
                </button>
            @endif

            {{-- Numbered pages --}}
            @foreach ($pages as $page)
                @if ($page === '...')
                    <span class="{{ $boxBase }} border-border-base text-text-medium">&hellip;</span>
                @elseif ($page === $current)
                    <span class="{{ $boxBase }} border-brand-primary bg-brand-primary text-text-light font-semibold">
                        {{ $page }}
                    </span>
                @else
                    <button
                        wire:click.prevent="gotoPage({{ $page }})"
                        class="{{ $boxBase }} border-border-base text-text-high hover:bg-elevation-01dp"
                    >
                        {{ $page }}
                    </button>
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <button
                    wire:click.prevent="nextPage()"
                    class="text-text-high hidden px-2 text-xs font-semibold transition-opacity hover:opacity-70 md:block"
                >
                    Next
                </button>
            @else
                <span class="text-text-low hidden cursor-not-allowed px-2 text-xs font-semibold md:block">Next</span>
            @endif

            {{-- Last --}}
            @if ($paginator->hasMorePages())
                <button
                    wire:click.prevent="gotoPage({{ $last }})"
                    class="{{ $boxBase }} border-border-base text-text-high hover:bg-elevation-01dp"
                >
                    &raquo;
                </button>
            @else
                <span class="{{ $boxBase }} border-border-base text-text-low cursor-not-allowed">&raquo;</span>
            @endif
        </div>
    </div>
@endif
