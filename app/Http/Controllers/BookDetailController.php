<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;
use App\Make;
use Illuminate\Support\Facades\DB;

class BookDetailController extends Controller
{
    /**
     * @return void
     */

    public function showDetail($id)
    {
        // try {
        //     $x = Make::findOrFail($id);
            // 記事詳細一覧
        // $data = Book::find($id);
        $x = Make::where('book_id',$id)->first();
        if (!empty($x)) {
            $data = DB::table('makes')
            ->join('books','makes.book_id','=','books.id')
            ->join('users','makes.user_id','=','users.id')
            ->select(
                'books.name as book_name',
                'books.comment as book_comment',
                'link',
                'books.id as book_id',
                'title',
                'makes.comment as make_comment',
                'score',
                'img_pass',
                'users.name as user_name',
                'makes.created_at as time'
                )
            ->where('book_id', $id)
            ->get();
            // return view('detail', compact('data'));
            return view('detail', [
                'data' => $data,
            ]);
        } else {
            $data = Book::find($id);
            return view('detail2', compact('data'));
        }

        // } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {

        // }
    }
}
