<!DOCTYPE html>
<html lang="en" x-data x-bind:class="document.documentElement.className" x-init="if(localStorage.getItem('theme')==='dark'){document.documentElement.classList.add('dark')}" >
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
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
<body>
     @php
    $menus = \Webid\Druid\Models\Menu::all()->keyBy('slug');
    @endphp
    <x-navbar :menu="$menus['main-menu']">
        <x-slot name="brand">
            <span class="text-2xl text-gray-900 dark:text-white">MyCompany</span>
        </x-slot>
        <x-slot name="controls">

        </x-slot>
    </x-navbar>
    {{ $slot }}
</body>
</html>
