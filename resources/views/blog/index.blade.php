<x-layout.guest>
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-orange-50 dark:from-black dark:via-gray-900 dark:to-black min-h-screen transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Blog Posts -->
                <div class="w-full lg:w-4/5 space-y-12">
                    @foreach($posts as $post)
                        <div class="group relative bg-white/90 dark:bg-gray-900/90 rounded-3xl shadow-2xl p-10 flex flex-col md:flex-row gap-10 border border-orange-100 dark:border-gray-800 hover:scale-[1.018] hover:shadow-orange-200 dark:hover:shadow-orange-500/20 transition-all duration-300 overflow-hidden backdrop-blur-xl">
                            <!-- Animated Gradient Accent -->
                            <div class="absolute -top-10 -left-10 w-40 h-40 bg-gradient-to-tr from-orange-400 via-pink-400 to-yellow-300 opacity-20 blur-3xl rounded-full pointer-events-none group-hover:opacity-30 transition-all"></div>
                            @if ($post->thumbnail)
                                <div class="flex-shrink-0 w-full md:w-72 aspect-video rounded-2xl overflow-hidden bg-gray-100 dark:bg-gray-800 flex items-center justify-center shadow-lg border border-gray-200 dark:border-gray-800 relative">
                                    <a href="{{ $post->url()  }}" class="block group/image">
                                        <x-curator-glider
                                            class="object-cover w-full h-full transition-transform duration-300 group-hover/image:scale-110"
                                            :media="$post->thumbnail_id"
                                        />
                                        <span class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover/image:opacity-100 transition-all rounded-2xl"></span>
                                    </a>
                                </div>
                            @endif
                            <div class="flex-1 flex flex-col justify-between">
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400 mb-1">
                                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-9 4h6m-7 8h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span>{{ $post->created_at->translatedFormat('j F Y') }}</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2 mb-2">
                                        @foreach($post->categories as $category)
                                            <a href="#" class="inline-block bg-orange-100 dark:bg-orange-900 text-orange-600 dark:text-orange-300 text-xs font-semibold px-3 py-1 rounded-full shadow hover:bg-orange-200 dark:hover:bg-orange-800 transition-all focus:outline-none focus:ring-2 focus:ring-orange-400">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white leading-tight mb-2 tracking-tight group-hover:text-orange-500 dark:group-hover:text-orange-400 transition">
                                        <a href="{{ $post->url()  }}" class="focus:outline-none focus:ring-2 focus:ring-orange-400">{{ $post->title }}</a>
                                    </h2>
                                </div>
                                <div class="text-lg text-gray-700 dark:text-gray-300 mt-2 mb-4 leading-relaxed line-clamp-3">
                                    <p>{{ $post->excerpt() }}</p>
                                </div>
                                <div>
                                    <a href="{{ $post->url() }}" class="inline-flex items-center gap-1 text-orange-500 dark:text-orange-400 font-bold hover:underline group/readmore focus:outline-none focus:ring-2 focus:ring-orange-400">
                                        {{ __('Read more') }}
                                        <svg class="w-4 h-4 ml-1 group-hover/readmore:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-12 flex justify-center">
                        {{ $posts->links('pagination::tailwind') }}
                    </div>
                </div>
                <!-- Sidebar -->
                <aside class="w-full lg:w-1/5">
                    <div class="bg-white/90 dark:bg-gray-900/90 rounded-3xl shadow-2xl p-8 border border-orange-100 dark:border-gray-800 relative overflow-hidden backdrop-blur-xl">
                        <div class="absolute -top-8 -right-8 w-28 h-28 bg-gradient-to-tr from-orange-400 via-pink-400 to-yellow-300 opacity-20 blur-3xl rounded-full pointer-events-none"></div>
                        <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-8 tracking-tight flex items-center gap-2">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"/></svg>
                            {{__('Categories')}}
                        </h3>
                        <ul class="space-y-4">
                            @foreach($categories as $category)
                                <li>
                                    <a href="#" class="flex items-center gap-2 text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 font-semibold transition-all group focus:outline-none focus:ring-2 focus:ring-orange-400">
                                        <span class="w-2 h-2 rounded-full bg-orange-400 group-hover:bg-orange-500 dark:bg-orange-500 dark:group-hover:bg-orange-400 transition"></span>
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</x-layout.guest>
