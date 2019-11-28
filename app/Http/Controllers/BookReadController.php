<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookPost;

class BookReadController extends Controller
{
    public function read(Request $request)
    {
        $books = DB::table('books')
        ->join('users','users.id','=','books.user_id')
        ->select(
            'books.id as book_id',
            'books.name as book_name',
            'comment',
            'link',
            'books.created_at as time',
            'users.name as user_name'
            )
        ->get();
        // $user = DB::table('books')
        // ->join('booksusers','users.id','=','books.user_id')
        // ->get();
        return view('home', [
            'books' => $books,
        ]);
    }
}
