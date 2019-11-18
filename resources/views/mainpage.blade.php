<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SM_Project</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .header {
                text-align: center;
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
            .top-center-logged-admin {
                position: absolute;
                left: 35%;
                top: 18px;
            }

            .top-center-logged {
                position: absolute;
                left: 45%;
                top: 18px;
            }

            .top-center-not-logged {
                position: absolute;
                left: 40%;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .header > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{ $user }}
            @auth
                @if ( $user == 'SM@naver.com' )
                    <div class="top-center-logged-admin header">
                    <a href="https://blog.laravel.com">현지학기제</a>
                    <a href="https://blog.laravel.com">조원 소개</a>
                    <a href="https://blog.laravel.com">조원 셋팅</a>
                    <a href="https://blog.laravel.com">질의 응답</a>
                    <p>admin계정입니다.</p>
                @else
                    <div class="top-center-logged header">
                    <a href="https://blog.laravel.com">현지학기제</a>
                    <a href="https://blog.laravel.com">조원 소개</a>
                    <a href="https://blog.laravel.com">질의 응답</a>
                @endif
            @else
                <div class="top-center-not-logged header">
                <a href="https://blog.laravel.com">현지학기제</a>
            @endauth

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/logged') }}">Home</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SM_Project
                </div>
            </div>
        </div>
    </body>
</html>
