<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'link', 'comment', 'user_id'];

    // // 任意のテーブルを紐付ける
    // protected $table = "users";

    public function makes()
    {
        return $this->hasMany('App\Make');
    }
}
