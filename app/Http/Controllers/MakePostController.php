<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Make;
use App\Http\Requests\MakePost;
use App\Services\MakePostService;

class MakePostController extends Controller
{
    protected $service;

    public function __construct(MakePostService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function create(int $id)
    {
        return view('photos/create', [
            'id' => $id
        ]);
    }

    public function store(string $id, MakePost $request)
    {
        // //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト
        $result = $this->service->createMakePost(intval($id), $request);       
        return redirect()->route('detail.confirm', [
            'id' => $result->id,
        ]);
    }

    public function confirm(Make $make)
    {
        return view('photos/confirm', [
            'title' => $make->title,
            'score' => $make->score,
            'comment' => $make->comment,
            'book_id' => $make->book_id,
            'img_pass' => str_replace('public/', 'storage/', $make->img_pass),
        ]);
    }

}
