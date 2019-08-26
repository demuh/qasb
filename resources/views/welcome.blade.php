<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>قصب - دفترچۀ فارسی</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
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


            <div class="content">
                <div class="intro">
                        <div class="title">
                            <span style="font-weight:bold">قصب </span>چی‌کار می‌کنه؟
                        </div>
                        <div class="description">
                            کاره خاصی نمی‌کنه، شماره‌هات رو این‌جا می‌نویسی که یه‌وقت خدایی‌نکرده یادت نره، حالا یادت هم رفت، مهم نیست، جهنم، می‌خواستی حفظش کنی، لندهور.
                        </div>
                        
                </div>
                <div class="box flex-center"></div>
            </div>
        </div>
    </body>
</html>
