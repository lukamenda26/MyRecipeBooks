@extends('layout.app')

@section('title')
    投稿結果
@endsection

@section('content')
        <hr />
        <p>以下データの投稿に成功しました。</p>
        <hr />
        <p>書籍名：{{ $name }}</p>
        <p>外部URLリンク：{{ $link }}</p>
        <p>コメント：{{ $comment }}</p>
        <!-- <p>ユーザID：{{ $user_id }}</p> -->
        <a href="/home" class="btn btn-danger">TOPへ</a>

@endsection