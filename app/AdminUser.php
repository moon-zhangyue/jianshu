<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 16:09
 * Module: AdminUser.php
 * Please No Garbage Code!
 */

namespace App;

use App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $rememberTokenName = '';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /*
     * 用户有哪些角色
     * */
    public function roles()
    {
        return $this->belongsToMany(\App\AdminUser::class, 'admin_role_user', 'user_id', 'role_id')->withPivot(['user_id', 'role_id']);
    }
}