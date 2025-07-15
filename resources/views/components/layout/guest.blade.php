@php
    use App\Models\CMS\Menu;
@endphp

<!DOCTYPE html>
<html
    lang="en"
    x-data
    x-bind:class="document.documentElement.className"
    x-init="
        let theme = localStorage.getItem('theme')
        // check if its null
        if (theme === null) {
            theme = window.matchMedia('(prefers-color-scheme: dark)').matches
                ? 'dark'
                : 'light'
            localStorage.setItem('theme', theme)
        }

        if (theme === 'dark') {
            document.documentElement.classList.add('dark')
        }
    "
>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{ $metatags ?? "" }}
        <!-- Favicon Icon -->
        <link rel="icon" href="{{ asset("favicon.png") }}" />
        <!-- Site Title -->
        <title>@yield("title", config("app.name"))</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js',
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-KTVLGCHG');
        </script>

        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js',
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-KTVLGCHG');
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet" />
        @stack('styles')
        @livewireStyles
    </head>
    <body class="bg-base-100 antialiased">

    <!-- Gradient Overlay Layer -->
    <div class="fixed inset-0 z-[9999] pointer-events-none bg-gradient-to-b from-primary/3 to-base-100/3 mix-blend-normal"></div>

        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTVLGCHG" class="hidden h-0 w-0"></iframe>
        </noscript>
        @php
            $menus = Menu::all()->keyBy("slug");
        @endphp

        <x-navbar :menu="$menus['main-menu']" />
        <main class="bg-gradient-to-b from-elevation-02dp to-elevation-03dp">
            {{ $slot }}
        </main>
        <x-layout.shared.footer />
        @livewireScripts
        @stack("scripts")
    </body>
</html>
