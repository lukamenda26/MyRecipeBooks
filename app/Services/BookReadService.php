<?php
namespace App\Services;

use App\Book;

class BookReadService
{
    public function retrieveBookRead()
    {
        $data = Book::with('user')->get();
        return $data;
        // return Book::all();
    }
}