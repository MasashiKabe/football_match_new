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
                    <a class="navbar-brand" href="#">Football Match</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('user/mypage') }}">マイページ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('user/team/regist') }}">チーム新規登録</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    マッチング
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('user/matching/search_apply') }}">試合依頼</a></li>
                                    <li><a class="dropdown-item" href="{{ url('user/approval/list') }}">試合承認</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ url('user/matching/list') }}">マッチング一覧</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                        <a href={{ route('logout') }} onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>
                        <form id='logout-form' action={{ route('logout') }} method="POST" style="display: none;">
                            @csrf
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