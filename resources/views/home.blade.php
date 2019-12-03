@extends('layout.app')

@section('title')
    TOP
@endsection

@section('content')

        <h1 class="titlestyle">料理本おすすめサイト　Myレシピブック</h1>
        <div class="box26">
            <p>
                あなたにとって、とっておきの料理本はありませんか？<br />
                長年使っているお気に入りの料理本、子供のころお母さん・おばあちゃんが作ってくれたレシピが載っている本・・・、なんでも構いません！ぜひ教えてください！<br />
                そして本の中で作ってみたレシピがあれば、ぜひそれもシェアしてください！<br />
            </p>
        </div>
        <a href="/home/bookpost" class="btn btn-danger">おすすめの本を投稿する</a>
        <!-- <a href="/detail" class="btn">詳細</a> -->
        <br />
        <br />
            <div class="row o-3column">
                @foreach ($books as $book)
                    <dl class="test02 col-md-4">
                    <dt>{{ $book->book_name }}</dt>
                        <dd>{{ $book->comment }}</dd>
                    @if (!empty($book->link))
                        <dd><a href="{{ $book->link }}" target="_blank">外部URLリンク</a></dd>
                    @endif
                        <dd>投稿日時：　{{ $book->created_at }}</dd>
                        <dd>投稿者：　{{ $book->user->name }}</dd>　
                        <a href="/detail/{{ $book->book_id }}" class="btn btn-warning">
                            「作ってみた！」を見る
                        </a>
                    </dl>
                
                @endforeach
            </div>

@endsection