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

    /*
     * 和用户进行关联
     * */
    public function zan($user_id)
    {
        return $this->hasOne(\App\Zan::class)->where('user_id', $user_id);
    }

    /*
     * 文章的所有赞
     * */
    public function zans()
    {
        return $this->hasMany(\App\Zan::class);
    }

}
