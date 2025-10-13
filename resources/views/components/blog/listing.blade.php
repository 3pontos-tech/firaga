@props(['headline'])

<section class="bg-elevation-surface">
    <div class="container mx-auto">
        <div class="flex gap-6 lg:gap-12 mx-4">
            <div class="flex-1 lg:flex-2">
                <section class="py-20">
                    <x-headline :component="$headline" class="pb-4" />
                    <div class="space-y-6">
                        @foreach ($posts as $post)
                            <x-blog.row-item :post="$post"/>
                        @endforeach
                    </div>
                    {{ $posts->links('components.layout.shared.paginator') }}
                </section>
            </div>
        </div>
    </div>
</section>
