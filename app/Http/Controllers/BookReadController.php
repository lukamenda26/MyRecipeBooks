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
