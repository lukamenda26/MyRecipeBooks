<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Make;
use App\Http\Requests\MakePost;

class MakePostService
{
    public function createMakePost(int $identifier, MakePost $req)
    {
        // バリデーション通過後
        $parent_book = Book::find($identifier);

        // Makeモデルのインスタンスを作成する
        $make = new Make();
        // 本の名前
        if(!empty($req->img_pass)) {
            $make->img_pass = $req->img_pass->storeAs('public/images', 'IMG_'.$req->id . '.jpg');
        } else {
            $make->img_pass = "public/images/NoImage.png";
        }
        if(!empty($req->title)) {
            $make->title = $req->title;
        } else {
            $make->title = "（不明）";
        }
        $make->comment = $req->comment;
        $make->score = $req->score;
        //登録ユーザーからidを取得
        $make->user_id = Auth::user()->id;
        $make->book_id = $parent_book->id;
        // インスタンスの状態をデータベースに書き込む
        $make->save();
        return $make;
    }
}