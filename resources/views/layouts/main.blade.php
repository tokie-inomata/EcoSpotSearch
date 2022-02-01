<!doctype html>
<html>
<head>
    <title>Ecoスポットサーチ</title>
    <meta name="description" content="段ボールや雑誌、小型家電・蛍光灯・電池などを回収できる場所を探してみませんか？Ecoスポットサーチは資源の回収ボックスの場所を検索するサイトです。">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    @yield('js')

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smartphone.css') }}" media="screen and (max-width: 480px)">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="footer-fixed">
        <header>
            <a href="/" class="logo-title">資源回収ボックス検索サイト<br><span>EcoSpotSearch</span></a>
            <nav>
                <ul class="main-menu">
                    <ol class="menu-button"><a href="#search">検索</a></ol>
                    @if(Auth::check())
                        <ol class="menu-button"><a href="/mypage">マイページ</a></ol>
                        <ol class="menu-button"><a href="{{ route('user_logout') }}">ログアウト</a></ol>
                    @else
                        <ol class="menu-button"><a href="/user/login">ログイン</a></ol>
                        <ol class="menu-button"><a href="/user/create">登録</a></ol>
                    @endif
                </ul>
            </nav>
        </header>

        @yield('main')

        <footer>
            <p class="copyright">Copyright ©︎ 2021 ESS</p>
        </footer>
    </div>
</body>
</html>