@extends('layout.app')

@section('title')
    TOP
@endsection

@section('content')

<h1 class="formstyle">作ってみた！投稿画面</h1>
<br />
    @if (count($errors)>0)
        <ul class="errorlist">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
<form method="post" action="{{ route('detail.create', ['id' => $id ]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">レシピ名</label>
        <div class="col-sm-10">
            <input type="text"  name="title" value="{{ old('title') }}" class="form-control" placeholder="（不明）">
        </div>
    </div>
    <div class="form-group" id="vue">
        <label for="score" class="col-sm-2 control-label">評価</label>
        <div class="col-sm-2">
            <select name="score" class="form-control" v-model="score">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="col-sm-8">
            <p class="form-control scoreStars">@{{ showStar }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="img_pass" class="col-sm-2 control-label">画像</label>
        <div class="col-sm-10">
            <input type="file" name="img_pass" class="form-control">
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
        <br />
        <br />
            <a href="/detail/{{ $id }}" class="btn btn-default">作ってみた！一覧へ戻る</a>
            <a href="/home" class="btn btn-default">TOPへ戻る</a>
            <input type="submit" value="投稿する" class="btn btn-danger">
        </div>
    </div>

</form>

@endsection