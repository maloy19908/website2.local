<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="{{ asset('assets/app.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/app.js') }}"></script>
        @yield('header')
    </head>
    <body>
        @include('components.layouts.menu')
        {{ $slot }}
        @yield('scripts')
    </body>
</html>
