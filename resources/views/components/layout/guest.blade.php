<!DOCTYPE html>
<html  lang="en" x-data x-bind:class="document.documentElement.className" x-init="if(localStorage.getItem('theme')==='dark'){document.documentElement.classList.add('dark')}" >
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7DX7K0H0BT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7DX7K0H0BT', { debug_mode: {{ (bool)config('services.google.analytics_debug') }} });
    </script>

</head>
<body class="bg-bg">
     @php
    $menus = \App\Models\CMS\Menu::all()->keyBy('slug');
    @endphp
    <x-navbar :menu="$menus['main-menu']">

    </x-navbar>
    <main>
        {{ $slot }}
    </main>
     <x-layout.shared.footer />
</body>
</html>
