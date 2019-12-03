<?php
namespace App\Services;

use App\Make;
use App\Book;

class BookDetailService
{
    public function LookForBookId(int $identifier)
    {
        $x = Make::where('book_id',$identifier)->first();
        return $x;
    }

    public function showMakeList(int $identifier)
    {
        $data = Make::whereBook_id($identifier)->get();
        return $data;
    }

    public function emptyMakeList(int $identifier)
    {
        $data = Book::find($identifier);
        return $data;
    }
}