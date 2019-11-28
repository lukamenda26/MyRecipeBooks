<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $fillable = ['img_pass', 'comment', 'score', 'user_id', 'book_id', 'title', 'user_id'];
}
