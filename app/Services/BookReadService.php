<?php
namespace App\Services;

use App\Book;

class BookReadService
{
    public function retrieveBookRead()
    {
        return Book::all();
    }
}