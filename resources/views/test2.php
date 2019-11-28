<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blade Template file</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
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
                <a href="/auth/register">会員情報</a>
            @endif
        </p>
        <h1>料理本おすすめサイト　Myレシピブック</h1>
        <a href="/home/bookpost" class="btn btn-primary">おすすめの本を投稿する</a>
        <br />
        <br />
            <div class="row o-3column">
                @foreach ($books as $book)
                    <dl class="test02 col-md-4">
                    <dt>{{ $book->book_name }}</dt>
                        <dd>{{ $book->comment }}</dd>
                        
                        <dd><a href="{{ $book->link }}" target="_blank">外部URLリンク</a>
                        <dd>投稿者：　{{ $book->user_name }}</dd>　
                        <!-- <form name="bookform" method="post" action="/home/" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form> -->
                        <!-- <input type="submit" value="口コミページへ"></dd> -->
                    </dl>
                
                @endforeach
            </div>
        </div>
    </body>
</html>