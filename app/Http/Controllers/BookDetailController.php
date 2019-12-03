<?php

namespace App\Http\Controllers;

use App\Services\BookDetailService;

class BookDetailController extends Controller
{
    protected $service;

    public function __construct(BookDetailService $service)
    {
        $this->service = $service;
    }
    public function showDetail(string $id)
    {
        // $x = Make::where('book_id',$id)->first();
        $result = $this->service->LookForBookId(intval($id));
        if (!empty($result)) {
            $isdata = $this->service->showMakeList(intval($id));
            return view('detail', [
                'data' => $isdata,
            ]);
        } else {
            $isdata = $this->service->emptyMakeList(intval($id));
            return view('detail2', compact('isdata'));
        }
    }


}
