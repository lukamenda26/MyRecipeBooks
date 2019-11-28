@extends('layout.app')

@section('title')
    レシピ本 投稿画面
@endsection

@section('content')

        <h1 class="formstyle">レシピ本 投稿画面</h1>
        <p>おすすめしたいレシピ本を投稿してください！</p>
        <br />
        @if (count($errors)>0)
            <ul class="errorlist">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        <form name="bookform" method="post" action="{{ route('home.create') }}" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">書籍名<span style="color: red; font-weight: normal;"> ※必須</span></label>
                    <div class="col-sm-10">
                        <input type="text"  name="name" value="{{ old('name') }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="link" class="col-sm-2 control-label">URL</label>
                    <div class="col-sm-10">
                        <input type="text" name="link" value="{{ old('link') }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment"  class="col-sm-2 control-label">コメント<span style="color: red; font-weight: normal;"> ※必須</span></label>
                    <div class="col-sm-10">
                        <textarea name="comment" cols="30" rows="5" class="form-control">{{ old('comment') }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/home" class="btn btn-default">TOPへ戻る</a>
                        <input type="submit" value="投稿する" class="btn btn-danger">
                    </div>
                </div>
        </form>
        
@endsection