@extends('layout.app')

@section('title')
    ユーザー登録フォーム
@endsection

@section('content')

        <h1 class="formstyle">ユーザー登録フォーム</h1>
        
        @if (count($errors)>0)
            <ul class="errorlist">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        
        <br />
        <form name="registform" action="/auth/register" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 control-label">ユーザ名</label>
                <div class="col-sm-10">
                    <input type="text" name="name" size="30">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">メールアドレス</label>
                <div class="col-sm-10">
                    <input type="text" name="email" size="30">
                </div>                
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">パスワード</label>
                <div class="col-sm-10">
                    <input type="password" name="password" size="30">
                </div>                
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">パスワード（確認）</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirmation" size="30">
                </div>                
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <button type='submit' name='action' value='send' class="btn btn-danger">送信</button>
                </div>
            </div>
                               
        </form>

@endsection