<div class="bg-zinc-900 rounded-xl p-6 hidden md:block"
     style="opacity: 1; will-change: opacity, transform; transform: none;">
    <div class="flex  gap-3 mb-6">
        <x-heroicon-s-users class="h-5 w-5 my-1 text-fire-500"/>
        <h3 class="text-lg font-bold">Nossos Especialistas</h3>
    </div>
    <div class="space-y-4">
        @foreach(range(1,3) as $author)
            <x-blog.aside-author-row
                name="Daniel Reis"
                role="Developer"
                avatarUrl="https://github.com/danielhe4rt.png"
                slug="danielhe4rt"
            />
        @endforeach
    </div>
    <a href="{{ '// TODO: route here' }}"
       class="block mt-4 text-center text-sm text-fire-500 hover:text-fire-400 transition-colors">
        Ver todos os autores →
    </a>
</div>
