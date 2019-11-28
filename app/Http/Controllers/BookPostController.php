<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookPost;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\RegistersUsers;

class BookPostController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCreateForm()
    {
        return view('home/bookpost');
    }

    public function create(BookPost $request)
    {
        // バリデーション通過後
        // Bookモデルのインスタンスを作成する
        $book = new Book();
        // 本の名前
        $book->name = $request->name;
        //リンク
        $book->link = $request->link;
        //コメント
        $book->comment = $request->comment;
        //登録ユーザーからidを取得
        $book->user_id = Auth::user()->id;
        // インスタンスの状態をデータベースに書き込む
        $book->save();
        //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
        return redirect()->route('home.confirm', [
            'id' => $book->id,
        ]);
    }

    public function confirm(Book $book)
    {
        // $bk = Book::find($book->user_id);
        // $user = $bk->users->name;
        // $user = Book::where('user_id', '$book->user_id')
        // ->join('users','users.id','=','books.user_id')
        // ->get();
        return view('home/confirm', [
            'name' => $book->name,
            'link' => $book->link,
            'comment' => $book->comment,
            'user_id' => $book->user_id,
            // 'user_name' => $user[0]['name'],
        ]);
    }
    
}
