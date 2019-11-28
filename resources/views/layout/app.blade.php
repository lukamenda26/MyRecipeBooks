<html>
<head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>料理本おすすめサイト Myレシピブック - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="container">
        <p>こんにちは！
            @if (Auth::check())
                {{ \Auth::user()->name }}さん
                <a href="/auth/logout">ログアウト</a>
            @else
                ゲストさん
                <a href="/auth/login">ログイン</a>
                <a href="/auth/register">会員登録</a>
            @endif
        </p>
            @yield('content')
        </div>
    </body>
</html>