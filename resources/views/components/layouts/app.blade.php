<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title.' - '.config('app.name') ?? config('app.name') }}</title>

    <!-- Styles -->
    @vite('resources/sass/app.scss')

    <!-- Scripts -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
</head>

<body>
    @include('layouts.nav')
    @include('layouts.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('layouts.topbar')
            {{ $slot }}
    </main>

    @yield('scripts')
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
</body>

</html>
