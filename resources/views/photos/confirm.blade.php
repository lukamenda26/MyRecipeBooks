@extends('layout.app')

@section('title')
    投稿結果
@endsection

@section('content')
        <hr />
        <p>以下データの投稿に成功しました。</p>
        <hr />
        <p>レシピ名：{{ $title }}</p>
        <p>評価：{{ $score }}</p>
        <p>コメント：{{ $comment }}</p>
        <p>画像：</p>
        <img src="/{{ $img_pass }}" width="200" hight="200">
        <br />
        <br />
        <a href="/detail/{{ $book_id }}" class="btn btn-warning">作ってみた！一覧へ</a>
        <a href="/home" class="btn btn-danger">TOPへ</a>

@endsection