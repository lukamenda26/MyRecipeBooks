<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Make;
use Illuminate\Support\Facades\Auth;
use App\Book;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\MakePost;

class PhotosController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(int $id)
    {
        return view('photos/create', [
            'id' => $id
        ]);
    }

    public function store(int $id, MakePost $request){
        // バリデーション処理
        // ルールの指定
        // $rules = [
        //     'img_pass' => ['image','max:255'],
        //     'title' => ['max:255'],
        //     'comment' => ['required', 'max:255'],
        //     // 'score' => ['integer'],
        // ];
        // // すべての入力値を取得し$inputに保持
        // $inputs = $request->all();
        // // バリデータクラスのインスタンスを作成
        // $validator = Validator::make($inputs, $rules);

        // if ($validator->fails()) {
        //     $validator->setAttributeNames(array(
        //         'img_pass' => '画像',
        //         'title' => 'レシピ名',
        //         'comment' => 'コメント',
        //     ));
        //     // バリデーションエラーの場合は直前の画面にリダイレクト
        //     $this->validate($request, $validator);
        // }

        // バリデーション通過後
        $parent_book = Book::find($id);

        // Makeモデルのインスタンスを作成する
        $make = new Make();
        // 本の名前
        if(!empty($request->img_pass)) {
            $make->img_pass = $request->img_pass->storeAs('public/images', 'IMG_'.$request->id . '.jpg');
        } else {
            $make->img_pass = "public/images/NoImage.png";
        }
        if(!empty($request->img_pass)) {
            $make->title = $request->title;
        } else {
            $make->title = "（不明）";
        }
        $make->comment = $request->comment;
        $make->score = $request->score;
        //登録ユーザーからidを取得
        $make->user_id = Auth::user()->id;
        $make->book_id = $parent_book->id;
        // インスタンスの状態をデータベースに書き込む
        $make->save();
        //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
        return redirect()->route('detail.confirm', [
            'id' => $make->id,
        ]);
    }

    public function confirm(Make $make)
    {
        return view('photos/confirm', [
            'title' => $make->title,
            'score' => $make->score,
            'comment' => $make->comment,
            'book_id' => $make->book_id,
            'img_pass' => str_replace('public/', 'storage/', $make->img_pass),
        ]);
    }

}
