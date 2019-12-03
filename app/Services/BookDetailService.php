<?php
namespace App\Services;

use App\Make;
use App\Book;
use Illuminate\Support\Facades\DB;

class BookDetailService
{
    public function LookForBookId(int $identifier)
    {
        $x = Make::where('book_id',$identifier)->first();
        return $x;
    }

    public function showMakeList(int $identifier)
    {
        $data = DB::table('makes')
        ->join('books','makes.book_id','=','books.id')
        ->join('users','makes.user_id','=','users.id')
        ->select(
            'books.name as book_name',
            'books.comment as book_comment',
            'link',
            'books.id as book_id',
            'title',
            'makes.comment as make_comment',
            'score',
            'img_pass',
            'users.name as user_name',
            'makes.created_at as time'
            )
        ->where('book_id', $identifier)
        ->get();
        return $data;
    }

    public function emptyMakeList(int $identifier)
    {
        $data = Book::find($identifier);
        return $data;
    }
}