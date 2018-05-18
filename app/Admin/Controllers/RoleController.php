<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/17 18:38
 * Module: RoleController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use App\AdminPermission;
use App\AdminRole;
use Illuminate\Http\Request;
use \App\AdminUser;

class RoleController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        $roles = \App\AdminRole::paginate(10);
        return view('/admin/role/index', compact('roles'));
    }

    /*
     * 创建角色
     */
    public function create()
    {
        return view('/admin/role/add');
    }

    /*
     * 创建角色行为
     * */
    public function store()
    {
        $this->validate(request(), [
            'name'        => 'required|min:3',
            'description' => 'required',
        ]);

        \App\AdminRole::create(request(['name', 'description']));

        return redirect('/admin/roles');
    }

    /*
     * 角色权限关系页面
     * */
    public function permission(\App\AdminRole $role)
    {
        //获取所有权限
        $permissions = \App\AdminPermission::all();

        //获取当前角色权限
        $myPermissions = $role->permissions;

        return view('/admin/role/permission', compact('permissions', 'myPermissions', 'role'));
    }

    /*
     * 储存用户关系行为
     * */
    public function storePermission(\App\AdminRole $role)
    {
        $this->validate(request(), [
            'permissions' => 'required|array'
        ]);

        $permissions   = \App\AdminPermission::find(request('permissions'));
        $myPermissions = $role->permissions;

        // 对已经有的权限
        $addPermissions = $permissions->diff($myPermissions);
        foreach ($addPermissions as $permission) {
            $role->grantPermission($permission);
        }

        $deletePermissions = $myPermissions->diff($permissions);
        foreach ($deletePermissions as $permission) {
            $role->deletePermission($permission);
        }
        return back();
    }


}