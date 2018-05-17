<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/16 18:19
 * Module: AdminPermission.php
 * Please No Garbage Code!
 */

namespace App;


class AdminPermission extends Model
{
    protected $table = 'admin_permissions';

    //权限属于哪个角色
    public function roles()
    {
        return $this->belongsToMany(\App\AdminRole::class, 'admin_permission_role', 'permission_id', 'role_id')->withPivot(['permission_id', 'role_id']);
    }
}