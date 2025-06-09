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

</head>
<body class="bg-bg">
     @php
    $menus = \Webid\Druid\Models\Menu::all()->keyBy('slug');
    @endphp
    <x-navbar :menu="$menus['main-menu']">

    </x-navbar>
    <main>
        {{ $slot }}
    </main>
     <x-layout.shared.footer />
</body>
</html>
