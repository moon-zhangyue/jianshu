<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use app\Model;

class Comment extends Model
{
    //评论所属文章
    public function post()
    {
        return $this->belongsTo('App/Post');
    }

    //评论所属用户
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
