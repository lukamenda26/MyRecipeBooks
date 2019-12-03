<?php
namespace App\Services;

use App\Book;

class BookReadService
{
    public function retrieveBookRead()
    {
        $books = Book::all();
        return $books;
    }
}