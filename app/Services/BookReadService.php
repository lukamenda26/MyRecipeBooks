<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Book;

class BookReadService
{
    public function retrieveBookRead()
    {
        // $books = DB::table('books')
        // ->join('users','users.id','=','books.user_id')
        // ->select(
        //     'books.id as book_id',
        //     'books.name as book_name',
        //     'comment',
        //     'link',
        //     'books.created_at as time',
        //     'users.name as user_name'
        //     )
        // ->get();
        $books = Book::all();
        return $books;
    }
}