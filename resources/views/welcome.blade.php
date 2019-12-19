<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>دفترچه خاطرات آنلاین - مائده اژدری لاله</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Farsi WebFont: BFont.ir --> 
        <link rel="stylesheet" type="text/css" href="http://font.limil.org/koodak.min.css"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F2F2F2;
                color: #636b6f;
                font-family: "B Koodak";
                font-size: 15px;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                background-color:#7EA6C0;
                color:#fff;
                border-radius:10px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .introduction{
                font-size:16px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">صفحه اصلی</a>
                    @else
                        <a href="{{ route('login') }}">ورود</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ثبت نام</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <img src="Images/Titr.png" style="width:400px; margin:10px;"/> 
                </div>
                <div class="introduction">
                مائده اژدری لاله - آذرماه ۱۳۹۸
                </div>
                <!--<div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>
    </body>
</html>
