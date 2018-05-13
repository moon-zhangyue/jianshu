<?php

namespace App;

use App\Model;

use Laravel\Scout\Searchable;

//默认对应post表
class Post extends Model
{
    use Searchable;

    //定义里面的type
    public function searchableAs()
    {
        return 'post';
    }

    //定义有哪些字段需要搜索
    public function toSearchableArray()
    {
        return [
            'title'   => $this->title,
            'content' => $this->content
        ];
    }


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
     * 和用户进行关联,判断用户是否给文章点赞了
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
