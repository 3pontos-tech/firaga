<div class="bg-base-200 rounded-xl p-6 hidden md:block">
    <div class="flex  gap-3 mb-6">
        <x-heroicon-s-users class="h-5 w-5 my-1 textneutral"/>
        <h3 class="text-lg textneutral font-bold">Categorias</h3>
    </div>
    <div class="space-y-2">
        @foreach(range(1,5) as $category)
            <x-blog.aside-category-row
                name="Categoria {{ $category }}"
                icon="fas-user"
            />
        @endforeach
    </div>
</div>
