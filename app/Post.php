<?php

namespace App;

use App\Model;

//默认对应post表
class Post extends Model
{
    //protected $guarded; //不可注入数据
    protected $fillable = ['title', 'content', 'user_id']; //可以注入数据

    /*
     * 关联用户
     * */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');//模型关联
    }

    /*
     * 评论模型
     * */
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
    }

}
