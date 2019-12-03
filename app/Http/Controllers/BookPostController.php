<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookPost;
use App\Services\BookPostService;

class BookPostController extends Controller
{
    protected $service;

    public function __construct(BookPostService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function showCreateForm()
    {
        return view('home/bookpost');
    }

    public function create(BookPost $request)
    {
        $result = $this->service->createBookPost($request);        
        return redirect()->route('home.confirm', [
            'id' => $result->id,
        ]);
    }

    public function confirm(Book $book)
    {
        return view('home/confirm', [
            'name' => $book->name,
            'link' => $book->link,
            'comment' => $book->comment,
            'user_id' => $book->user_id,
        ]);
    }
    
}
