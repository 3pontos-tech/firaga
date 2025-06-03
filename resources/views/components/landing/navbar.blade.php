<!-- NAVBAR -->
<nav
    class="bg-black dark:bg-black border-b border-gray-200 dark:border-gray-800 sticky top-0 z-50 shadow-sm transition-shadow">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand / Logo -->
            <div class="flex-shrink-0 flex items-center space-x-2">
                <a href="/" class="flex items-center space-x-2">

                    <span class="text-2xl font-bold text-gray-800 dark:text-white tracking-tight">Fire<span
                            class="text-orange-500">|Ce</span></span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <!-- Theme Toggler Button -->
                <button x-on:click="document.documentElement.classList.toggle('dark')"
                    class="ml-2 p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 shadow hover:bg-gray-200 dark:hover:bg-gray-700 transition"
                    aria-label="Alternar tema escuro" title="Alternar tema escuro">
                    <svg x-show="!document.documentElement.classList.contains('dark')" class="w-5 h-5" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v1m0 16v1m8.66-13.66l-.71.71M4.05 19.07l-.71.71M21 12h-1M4 12H3m16.66 5.66l-.71-.71M4.05 4.93l-.71-.71M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="document.documentElement.classList.contains('dark')" class="w-5 h-5" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                    </svg>
                </button>
                <!-- End Theme Toggler Button -->
            </div>

            <!-- Hamburger for Mobile -->
            <div class="lg:hidden">
                <button @click="mobileOpen = !mobileOpen"
                    class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <span class="sr-only">Open main menu</span>
                    <template x-if="!mobileOpen">
                        <!-- Hamburger icon -->
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="mobileOpen">
                        <!-- X icon -->
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor"
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
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Home
                    </a>
                </li>

                <!-- First-level dropdown: Services -->
                <li class="relative group">
                    <button
                        class="flex items-center text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 px-3 py-2 rounded-md focus:outline-none">
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
                        class="absolute left-0 mt-2 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                Web Development
                            </a>
                        </li>

                        <!-- Second-level dropdown: Consulting -->
                        <li class="relative group">
                            <button
                                class="w-full text-left flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none">
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
                                class="absolute top-0 left-full ml-1 w-48 bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        Strategy Consulting
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        Financial Consulting
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                                Design Services
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="#nossas-solucoes"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Soluções
                    </a>
                </li>
                <li>
                    <a href="#nosso-atendimento"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Atendimento
                    </a>
                </li>
                <li>
                    <a href="#depoimentos"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Depoimentos
                    </a>
                </li>
                <li>
                    <a href="#blog"
                        class="text-gray-700 dark:text-gray-200 hover:text-orange-500 dark:hover:text-orange-400 px-3 py-2 rounded-md transition font-medium">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#agende"
                        class="ml-4 bg-orange-500 dark:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition">
                        Agende sua análise
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu (toggleable) -->
    <div x-show="mobileOpen"
        class="lg:hidden border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-black shadow" x-cloak>
        <ul class="px-4 py-4 space-y-1">
            <li>
                <a href="#"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    Home
                </a>
            </li>

            <!-- Mobile “Services” with nested toggle -->
            <li x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md focus:outline-none">
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
                            class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                            Web Development
                        </a>
                    </li>

                    <!-- Nested under “Consulting” -->
                    <li x-data="{ open2: false }">
                        <button @click="open2 = !open2"
                            class="w-full flex items-center justify-between text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md focus:outline-none">
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
                                    class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                                    Strategy Consulting
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                                    Financial Consulting
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"
                            class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                            Design Services
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 px-3 py-2 rounded-md">
                    Contact
                </a>
            </li>
            <li>
                <a href="#nossas-solucoes"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Soluções
                </a>
            </li>
            <li>
                <a href="#nosso-atendimento"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Atendimento
                </a>
            </li>
            <li>
                <a href="#depoimentos"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
                    Depoimentos
                </a>
            </li>
            <li>
                <a href="#blog"
                    class="block text-gray-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-orange-600 px-3 py-2 rounded-md font-medium transition">
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
</nav>