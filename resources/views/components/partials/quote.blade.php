<div class="container max-w-5xl text-primary-content mx-auto px-6 py-12">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
            <h4 class="text-2xl text-base-content font-semibold mb-4">
                {{ $headline }}
            </h4>
            <p class="text-lg mb-6 text-muted">
                {{ $description }}
            </p>
        </div>

        <div class="relative w-1/3 bg-primary/5  border-primary p-6 rounded-lg shadow-lg">
            <!-- Quote Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-primary absolute -top-4 -left-4 rounded-full p-2 shadow" fill="none" viewBox="0 0 32 32">
                <path fill="currentColor" class="text-primary"
                      d="M7 14c0-4 3-7 7-7v3c-2 0-4 2-4 4h4v7H7v-7zm11 0c0-4 3-7 7-7v3c-2 0-4 2-4 4h4v7h-7v-7z"/>
            </svg>

            <!-- Quote Content -->
            <p class="text-lg font-semibold text-foreground leading-relaxed pl-2">
                "{{ $quote }}"
            </p>

        </div>

    </div>

</div>
