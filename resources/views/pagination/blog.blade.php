@if ($paginator->hasPages())
    <div class="flex items-center justify-between">
        <p class="text-xxs text-text-high font-sans font-semibold">
            Mostrando {{ $paginator->count() }} de {{ $paginator->total() }}
        </p>

        <div class="flex items-center gap-1">
            {{-- First --}}
            @if ($paginator->onFirstPage())
                <span class="text-text-low cursor-not-allowed px-1 text-xs">«</span>
            @else
                <button
                    wire:click.prevent="gotoPage(1)"
                    class="text-brand-primary px-1 text-xs transition-opacity hover:opacity-70"
                >
                    «
                </button>
            @endif

            {{-- Back --}}
            @if ($paginator->onFirstPage())
                <span class="text-text-low cursor-not-allowed px-2 text-xs">Back</span>
            @else
                <button
                    wire:click.prevent="previousPage()"
                    class="text-brand-primary px-2 text-xs transition-opacity hover:opacity-70"
                >
                    Back
                </button>
            @endif

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <button
                    wire:click.prevent="nextPage()"
                    class="text-brand-primary px-2 text-xs font-semibold transition-opacity hover:opacity-70"
                >
                    Next
                </button>
            @else
                <span class="text-text-low cursor-not-allowed px-2 text-xs font-semibold">Next</span>
            @endif

            {{-- Last --}}
            @if ($paginator->hasMorePages())
                <button
                    wire:click.prevent="gotoPage({{ $paginator->lastPage() }})"
                    class="text-brand-primary px-1 text-xs transition-opacity hover:opacity-70"
                >
                    »
                </button>
            @else
                <span class="text-text-low cursor-not-allowed px-1 text-xs">»</span>
            @endif
        </div>
    </div>
@endif
