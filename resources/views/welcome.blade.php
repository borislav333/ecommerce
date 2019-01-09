<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
    {{--<header>
        <div class="top-nav container">
            <div class="logo">
                CSS grid example
            </div>
            <ul>
                <li>
                    <a href="#">Shop</a>
                    <a href="#">About</a>
                    <a href="#">Blog</a>
                    <a href="#"></a>
                </li>
            </ul>
        </div> <!-- end top nav -->

        <div class="hero container">
            <div class="hero-copy">
                <h1>CSS Grid Example</h1>
                <p>Example using css</p>
                <div class="hero-buttons">
                    <a href="" class="button button-white"></a>
                    <a href="" class="button button-white"></a>
                </div>
            </div> <!-- end hero copy -->

            <div class="hero-image">
                <img src="{{asset('img/macbook-pro-laravel.png')}}" alt="">
            </div>
        </div>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Css grid example</h1>
            </div>
            <div class="text-center button-container">
                <a href="" class="button">Featured</a>
                <a href="" class="button">On Sale</a>
            </div>

            <div class="products text-center">
                <div class="product">
                    <a href=""><img src="{{asset('img/macbook-pro-laravel.png')}}" alt=""></a>
                </div>
            </div>
            <div class="product-price">

            </div>
        </div>
    </header>--}}


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

    <a href="" class="btn btn-primary"></a>
    </body>
</html>
