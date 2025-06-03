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
    <!-- Alpine.js CDN removed, now loaded via Vite -->
</head>
<body>
    {{ $slot }}
</body>
</html>
