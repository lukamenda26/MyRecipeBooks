@extends('layout.app')

@section('title')
    おすすめ本 詳細ページ
@endsection

@section('content')

<h1 class="booktitle">{{ $data[0]->book_name }}</h1>
<div class="box26">
    <span class="box-title">コメント</span>
    <p>{{ $data[0]->book_comment }}　<a href="{{ $data[0]->link }}">外部URLリンク</a></p>
</div>
<a href="/home" class="btn btn-default">TOPへ戻る</a>
<a href="{{ route('detail.create', ['id' => $data[0]->book_id]) }}" class="btn btn-danger">作ってみた！を投稿する</a>
<br />
<br />
<div class="container">
    <h3 class="listtitle">みんなの「作ってみた！」</h3>
    <br />
    <div class="row o-3column">
    @foreach ($data as $podata)
        <dl class="col-md-4 sampleList">
        <dt><img src="{{ str_replace('public/', '../storage/', $podata->img_pass) }}"></img></dt>
            <dd>レシピ名：{{ $podata->title }}</dd>
            <dd>
            評価：
                @if ($podata->score == 5)
                    <span>★★★★★</span>
                @elseif ($podata->score == 4)
                    <span>★★★★</span>
                @elseif ($podata->score == 3)
                    <span>★★★</span>
                @elseif ($podata->score == 2)
                    <span>★★</span>
                @elseif ($podata->score == 1)
                    <span>★</span>
                @endif
            </dd>
            <dd>{{ $podata->make_comment }}</dd>
            <dd>投稿者：{{ $podata->user_name }}</dd>
            <dd>投稿日時：{{ $podata->time }}</dd>
        </dl>
        @endforeach
    </div>
    
</div>


@endsection