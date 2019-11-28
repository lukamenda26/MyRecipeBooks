<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', 'BookReadController@read');

//本の投稿フォームページ
Route::get('/home/bookpost', 'BookPostController@showCreateForm')->name('home.create');
Route::post('/home/bookpost', 'BookPostController@create');

//投稿確認ページ
Route::get('/home/bookpost/{book}', 'BookPostController@confirm')->name('home.confirm');

// 削除機能
Route::get('/home/{book}', 'BookDeleteCotroller@delete');
Route::post('/home/{book}', 'BookDeleteCotroller@delete');

// 本の個別ページ
Route::get('/detail/{id}', 'BookDetailController@showDetail')->name('home.detail');
// Route::post('/detail/{book}', 'BookDetailController@showDetail');
// Route::post('/home/{book}', 'BookDetailController@detail');

// 画像投稿
// Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);
Route::get('/detail/{id}/create', 'PhotosController@create')->name('detail.create');
Route::post('/detail/{id}/create', 'PhotosController@store');

//投稿確認ページ
Route::get('/home/create/{make}', 'PhotosController@confirm')->name('detail.confirm');

// 新規会員登録
Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

// ログイン処理
Route::get('/auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/auth/login', 'Auth\LoginController@login');

// ログアウト
Route::get('/auth/logout', 'Auth\LoginController@logout');

use Illuminate\Support\Facades\Mail;
use App\Mail\Test;

Route::get('/', function() {
    return view('welcome');
});

// Route::get('/test', function () {
//     Mail::to('test@example.com')->send(new Test);
//     return 'メール送信しました！';
// });

// パスワードリセットのためのemail入力
// Route::get('password/reset',  'Auth\ResetPasswordController@showPasswordResetForm')->name('password.request');

// リセットしたパスワードとログインIDが書かれたメール送信
// Route::post('password/email', 'Auth\ResetPasswordController@sendPasswordResetEmail')->name('password.email');
// Route::post('/test', function () {
//     Mail::to('test@example.com')->send(new Test);
//     return 'メール送信しました！';
// });