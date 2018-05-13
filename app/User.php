<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2018/2/25
 * Time: 16:34
 */

namespace App;

use App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /*
     * 用户的文章列表
     * */
    public function posts()
    {
        return $this->hasMany(\App\Post::class, 'user_id', 'id');
    }

    /*
     * 关注我的Fan模型
     * */
    public function fans()
    {
        return $this->hasMany(\App\Post::class, 'star_id', 'id');
    }

    /*
     * 我关注的Fan模型
     * */
    public function stars()
    {
        return $this->hasMany(\App\Post::class, 'fan_id', 'id');
    }

    /*
     * 关注某人
     * */
    public function doFan($uid)
    {
        $fan = new \App\Fan();

        $fan->star_id = $uid;

        return $this->stars()->save($fan);
    }

    /*
     * 取消关注
     * */
    public function doUnfan($uid)
    {
        $fan = new \App\Fan();

        $fan->star_id = $uid;

        return $this->stars()->delete($fan);
    }

    /*
     * 当前用户是否被uid关注
     * */
    public function hasFan($uid)
    {
        $this->fans()->where('fan_id', $uid)->count();
    }

    /*
     * 当前用户是否关注了uid
     * */
    public function hasStar($uid)
    {
        $this->stars()->where('star_id', $uid)->count();
    }

}