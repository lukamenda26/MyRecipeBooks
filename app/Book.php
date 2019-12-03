<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'link', 'comment', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
