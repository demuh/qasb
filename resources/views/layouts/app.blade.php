<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'قصب') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="flex-center position-ref full-height">
                <div class="top-right logo">
                    <a href="{{ url('/home') }}">قصب</a>
                </div>
            @if (Route::has('login'))
                <div class="top-left links">
                    @auth
                        <a href="{{ url('/home') }}">صفحۀ اصلی</a>
                    @else
                        <a href="{{ route('login') }}">ورود</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ثبت‌نام</a>
                        @endif
                    @endauth
                </div>
            @endif

        <main class="content">
            @yield('content')
        </main>
    </div>
</body>
</html>
