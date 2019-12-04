<html>
<head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>料理本おすすめサイト Myレシピブック - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"><!-- Bootstrap本体 -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
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
    <div id="app">
        <example-component></example-component>
    </div>

    <script src="{{ mix('js/app.js') }}"></script> 
    </body>

</html>