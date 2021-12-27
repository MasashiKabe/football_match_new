<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- 各ページごとにtitleタグを入れる為に空けておく -->
        <title>@yield('title')</title>

        <!-- Laravel標準で用意してあるJavascriptを読み込む -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Laravel標準で用意されているcssを読み込む -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- sass/admin.cssを読み込む -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <!-- 画面上部に表示するナビゲーションバー -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/index">Football Match</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">ログイン</a>
                                        
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">新規ユーザー登録</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ここまでナビゲーションバー -->
            <main class="py-4">
                <!-- ここにコンテンツを入れる -->
                @yield('content')
            </main>
        </div>
    </body>
</html>