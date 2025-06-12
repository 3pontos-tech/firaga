@php use App\Models\CMS\Menu; @endphp
    <!DOCTYPE html>
<html lang="en" x-data x-bind:class="document.documentElement.className"
      x-init="if(localStorage.getItem('theme')==='dark'){document.documentElement.classList.add('dark')}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ $metatags ?? '' }}
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Site Title -->
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTVLGCHG');</script>

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTVLGCHG');
    </script>

</head>
<body class="bg-bg">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTVLGCHG" class="hidden h-0 w-0"></iframe>
</noscript>
@php
    $menus = Menu::all()->keyBy('slug');
@endphp
<x-navbar :menu="$menus['main-menu']"/>


<main>
    {{ $slot }}
</main>
<x-layout.shared.footer/>
</body>
</html>
