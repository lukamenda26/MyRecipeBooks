<?php

namespace App\Http\Controllers;

use App\Services\BookReadService;

class BookReadController extends Controller
{
    protected $service;

    public function __construct(BookReadService $service)
    {
        $this->service = $service;
    }
    
    public function read()
    {
        $result = $this->service->retrieveBookRead();
        return view('home', [
            'books' => $result,
        ]);
    }
}
