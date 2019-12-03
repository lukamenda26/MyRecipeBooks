<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Http\Requests\BookPost;

class BookPostService
{
    public function createBookPost(BookPost $req)
    {
        // バリデーション通過後
        // Bookモデルのインスタンスを作成する
        $book = new Book();
        $book->name = $req->name;
        $book->link = $req->link;
        $book->comment = $req->comment;
        $book->user_id = Auth::user()->id;
        $book->save();     
        return $book;
    }
}