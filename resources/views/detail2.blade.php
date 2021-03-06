@extends('layout.app')

@section('title')
    おすすめ本 詳細ページ
@endsection

@section('content')

<h1 class="booktitle">{{ $isdata->name }}</h1>
<div class="box26">
    <span class="box-title">コメント</span>
    <p>{{ $isdata->comment }}　<a href="{{ $isdata->link }}">外部URLリンク</a></p>
</div>
<a href="/home" class="btn btn-default">TOPへ戻る</a>
<a href="{{ route('detail.create', ['id' => $isdata->id]) }}" class="btn btn-danger">作ってみた！を投稿する</a>
<br />
<br />
<div class="container">
    <h3 class="listtitle">みんなの「作ってみた！」</h3>
    <br />
    <div class="container">
        <p>投稿はまだありません。</p>
    </div>
    
</div>


@endsection