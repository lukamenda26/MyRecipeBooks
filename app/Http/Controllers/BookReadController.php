<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookPost;
use App\Services\BookReadService;

class BookReadController extends Controller
{
    public function __construct(BookReadService $bookread)
    {
        $this->bookread = $bookread;
    }
    public function read()
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
        $result = $this->bookread->retrieveBookRead();
        return view('home', [
            'books' => $result,
        ]);
    }
}
