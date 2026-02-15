<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Meta (override in views with @section('meta_description') and @section('meta_keywords')) -->
    <meta name="description" content="@yield('meta_description', config('app.name') . ' - Welcome')">
    <meta name="keywords" content="@yield('meta_keywords', '')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Vite assets (global) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('vite')
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen flex flex-col">
    @include('layouts.header')

    <main class="flex-1 w-full max-w-4xl mx-auto px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>