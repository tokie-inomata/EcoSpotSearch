<html>
<head>
    <title>ESS</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="footer_fixed">
        <header>
            <a href="/"><img alt="Ecoスポットサーチ" src="{{ asset('img/eco_spot_search.png') }}" class="titlelogo"></a>
                <nav>
                    <ul>
                        <ol><a href="/login">ログイン</a></ol>
                        <ol><a href="/user_add">新規登録</a></ol>
                    </ul>
                </nav>
        </header>
        <div id="side_menu">
            <a href="/mypage" class="menulist">ユーザー情報</a>
            <a href="/registration_list" class="menulist">登録一覧</a>
        </div>
        <div id="user_info">
            @yield('main')
        </div>
        <footer>
            <p class="copyright">Copyright ©︎ 2021 ESS</p>
        </footer>
    </div>
</body>
</html>