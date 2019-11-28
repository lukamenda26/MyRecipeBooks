@extends('layout.app')

@section('title')
    ログインフォーム
@endsection

@section('content')

        <h1 class="formstyle">ログインフォーム</h1>
        <p style="color: red; font-weight: bold;">ここから先は会員制ページです。ログイン、もしくは新規会員登録をお願いいたします。</p>
                
        @if (count($errors)>0)
            <ul class="errorlist">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        
        <br />
        @isset($message)
            <p style="color:red">{{$message}}</p>
        @endisset
        <form name="loginform" action="/auth/login" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 control-label">メールアドレス</label>
                <div class="col-sm-10">
                    <input type="text" name="email" size="30" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">パスワード</label>
                <div class="col-sm-10">
                    <input type="password" name="password" size="30">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type='submit' name='action' value='send' class="btn btn-danger">ログイン</button>
                    <a href="/home" class="btn btn-default">ゲストとして閲覧を続ける</a>
                </div>
            </div>
        </form>

@endsection