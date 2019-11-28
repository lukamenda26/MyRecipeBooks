<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;

class BookDeleteCotroller extends Controller
{
    public function delete(Book $book)
    {
        $book->delete();
        return redirect('/home');
    }
}
