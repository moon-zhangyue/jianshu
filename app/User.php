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
        return $this->hasMany(\App\Post::class, 'user_id', 'id'); //第一个参数:关联对象  第二个:关联对象的外键   第三个:我当前模型主键
    }

    /*
     * 我的粉丝
     * */
    public function fans()
    {
        return $this->hasMany(\App\Fan::class, 'star_id', 'id');
    }

    /*
     * 我粉的人
     * */
    public function stars()
    {
        return $this->hasMany(\App\Fan::class, 'fan_id', 'id');
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
        return $this->fans()->where('fan_id', $uid)->count();
    }

    /*
     * 当前用户是否关注了uid
     * */
    public function hasStar($uid)
    {
        $res = $this->stars()->where('star_id', $uid)->count();
        dd($res);
        die;
        return $this->stars()->where('star_id', $uid)->count();
    }
}