<!-- NAVBAR -->
<nav
    class="relative bg-white/80 dark:bg-black/60 backdrop-blur-xl  border-gray-100 dark:border-gray-800 sticky top-0 z-50 shadow-lg transition-shadow overflow-visible animate-fade-in-navbar">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex items-center justify-between h-16">
            <!-- Brand / Logo -->
            <div class="flex-shrink-0 flex items-center space-x-2">
                <a href="/" class="flex items-center space-x-2 group">
                    <span class="relative">
                        <span class="absolute -inset-1 rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-yellow-400 blur-md opacity-30 animate-glow"></span>
                        <span class="text-2xl font-bold text-gray-900 dark:text-white tracking-tight relative z-10 drop-shadow-sm">Fire<span class="text-orange-500">|Ce</span></span>
                    </span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <!-- Theme Toggler Button with Glow -->
                <button x-on:click="document.documentElement.classList.toggle('dark')"
                    class="ml-2 p-2 rounded-full bg-white/80 dark:bg-gray-800 text-gray-800 dark:text-gray-200 shadow hover:bg-orange-100 dark:hover:bg-gray-700 transition relative group focus:outline-none focus:ring-2 focus:ring-orange-400 border border-gray-200 dark:border-gray-700">
                    <span class="absolute inset-0 rounded-full bg-gradient-to-tr from-orange-500 via-pink-500 to-yellow-400 blur-md opacity-0 group-hover:opacity-30 animate-glow"></span>
                    <svg x-show="!document.documentElement.classList.contains('dark')" class="w-5 h-5 relative z-10" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v1m0 16v1m8.66-13.66l-.71.71M4.05 19.07l-.71.71M21 12h-1M4 12H3m16.66 5.66l-.71-.71M4.05 4.93l-.71-.71M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="document.documentElement.classList.contains('dark')" class="w-5 h-5 relative z-10" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                    </svg>
                </button>
            </div>

            <!-- Hamburger for Mobile -->
            <div class="lg:hidden">
                <button @click="mobileOpen = !mobileOpen"
                    class="p-2 rounded-md hover:bg-orange-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 relative group border border-gray-200 dark:border-gray-700 bg-white/80 dark:bg-gray-900">
                    <span class="sr-only">Open main menu</span>
                    <template x-if="!mobileOpen">
                        <!-- Hamburger icon -->
                        <svg class="h-6 w-6 text-gray-900 dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="mobileOpen">
                        <!-- X icon -->
                        <svg class="h-6 w-6 text-gray-900 dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex lg:items-center lg:space-x-8">
                <li>
                    <a href="#"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Home</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>

                <!-- First-level dropdown: Services -->
                <li class="relative group" x-data="{open: false}" @mouseenter="open = true" @mouseleave="open = false">
                    <button type="button"
                        class="flex items-center text-gray-900 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 px-3 py-2 rounded-md focus:outline-none"
                        @click="open = !open"
                        :aria-expanded="open ? 'true' : 'false'"
                        aria-haspopup="true">
                        Services
                        <svg class="ml-1 h-4 w-4 text-gray-500 group-hover:text-indigo-600 transition"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown panel: level 1 -->
                    <ul
                        class="absolute left-0 mt-2 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg transition-opacity duration-200"
                        x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="open = false">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                Web Development
                            </a>
                        </li>

                        <!-- Second-level dropdown: Consulting -->
                        <li class="relative group" x-data="{open2: false}" @mouseenter="open2 = true" @mouseleave="open2 = false">
                            <button type="button"
                                class="w-full text-left flex items-center px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none"
                                @click="open2 = !open2"
                                :aria-expanded="open2 ? 'true' : 'false'"
                                aria-haspopup="true">
                                Consulting
                                <svg class="ml-1 h-4 w-4 text-gray-400 group-hover:text-gray-600 transition"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown panel: level 2 -->
                            <ul
                                class="absolute top-0 left-full ml-1 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg transition-opacity duration-200"
                                x-show="open2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="open2 = false">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        Strategy Consulting
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        Financial Consulting
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                Design Services
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Sobre</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Contato</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#nossas-solucoes"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Soluções</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#nosso-atendimento"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Atendimento</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#depoimentos"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Depoimentos</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#blog"
                        class="relative text-gray-900 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium group">
                        <span class="inline-block relative z-10">Blog</span>
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-gradient-to-r from-orange-500 via-pink-500 to-yellow-400 scale-x-0 group-hover:scale-x-100 transition-transform origin-left rounded-full"></span>
                    </a>
                </li>
                <li>
                    <a href="#agende"
                        class="ml-4 relative bg-orange-500 dark:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition group overflow-hidden">
                        <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-yellow-400 opacity-0 group-hover:opacity-30 transition-all blur-lg animate-glow-pulse"></span>
                        <span class="relative z-10 group-hover:scale-105 transition-transform">Agende sua análise</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu (toggleable) -->
    <div x-show="mobileOpen"
        class="lg:hidden border-t border-gray-100 dark:border-gray-800 bg-white/95 dark:bg-black shadow" x-cloak>
        <ul class="px-4 py-4 space-y-1">
            <li>
                <a href="#"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    Home
                </a>
            </li>

            <!-- Mobile “Services” with nested toggle -->
            <li x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md focus:outline-none">
                    <span>Services</span>
                    <svg :class="open ? 'transform rotate-180' : ''" class="h-5 w-5 text-gray-500 transition-transform"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul x-show="open" class="mt-1 pl-4 space-y-1">
                    <li>
                        <a href="#"
                            class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                            Web Development
                        </a>
                    </li>

                    <!-- Nested under “Consulting” -->
                    <li x-data="{ open2: false }">
                        <button @click="open2 = !open2"
                            class="w-full flex items-center justify-between text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md focus:outline-none">
                            <span>Consulting</span>
                            <svg :class="open2 ? 'transform rotate-180' : ''"
                                class="h-5 w-5 text-gray-500 transition-transform" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06-.02L10 10.584l3.71-3.396a.75.75 0 011.04 1.084l-4.25 3.89a.75.75 0 01-1.04 0l-4.25-3.89a.75.75 0 01-.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <ul x-show="open2" class="mt-1 pl-4 space-y-1">
                            <li>
                                <a href="#"
                                    class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                                    Strategy Consulting
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                                    Financial Consulting
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"
                            class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                            Design Services
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    Contact
                </a>
            </li>
            <li>
                <a href="#nossas-solucoes"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Soluções
                </a>
            </li>
            <li>
                <a href="#nosso-atendimento"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Atendimento
                </a>
            </li>
            <li>
                <a href="#depoimentos"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Depoimentos
                </a>
            </li>
            <li>
                <a href="#blog"
                    class="block text-gray-900 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Blog
                </a>
            </li>
            <li>
                <a href="#agende"
                    class="block bg-orange-500 dark:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition mt-2">
                    Agende sua análise
                </a>
            </li>
        </ul>
    </div>

    <!-- Custom Animations -->
    <style>
        .animate-glow { animation: glow 2s ease-in-out infinite alternate; }
        @keyframes glow {
            0% { opacity: 0.5; filter: blur(8px); }
            100% { opacity: 1; filter: blur(16px); }
        }
        .animate-glow-pulse { animation: glowPulse 1.5s infinite alternate; }
        @keyframes glowPulse {
            0% { opacity: 0.1; }
            100% { opacity: 0.4; }
        }
        .animate-fade-in-navbar { animation: fadeInNavbar 1.2s cubic-bezier(.4,0,.2,1) both; }
        @keyframes fadeInNavbar {
            from { opacity: 0; transform: translateY(-24px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</nav>