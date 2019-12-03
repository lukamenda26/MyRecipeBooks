<?php
namespace App\Services;

use App\Make;
use App\Book;

class BookDetailService
{
    public function LookForBookId(int $identifier)
    {
        return Make::where('book_id',$identifier)->first();
    }

    public function showMakeList(int $identifier)
    {
        return Make::whereBook_id($identifier)->get();
    }

    public function emptyMakeList(int $identifier)
    {
        return Book::find($identifier);
    }
}