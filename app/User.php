<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // // 任意のテーブルを紐付ける
    // protected $table = "books";

    // // primaryKeyの変更
    // protected $primaryKey = "user_id";

    // //hasMany設定
    // public function books()
    // {
    //     return $this->hasMany('App\Book');
    // }
    
}
