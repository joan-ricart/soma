<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'SOMA Restaurant Barcelona')" />

    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title', 'SOMA Restaurant Barcelona')" />
    <meta property="og:description" content="@yield('og:description', 'SOMA Restaurant Barcelona')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="SOMA Restaurant" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    @stack('styles') <!-- Additional styles -->
</head>

<body x-data="{ menuExpanded: false, footerFixed: true }">

    @include('layouts.partials.header')

    <div aria-hidden class="absolute top-1/4" x-intersect:leave="menuExpanded = true"
        x-intersect:enter="menuExpanded = false">
    </div>

    @yield('content')

    @include('layouts.partials.footer')

    @stack('scripts') <!-- Additional scripts -->
</body>

</html>
