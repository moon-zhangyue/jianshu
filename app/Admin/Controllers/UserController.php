<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 14:49
 * Module: UserController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use App\AdminRole;
use Illuminate\Http\Request;
use \App\AdminUser;

class UserController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        $users = \App\AdminUser::paginate(10);
        return view('/admin/user/index', compact('users'));
    }

    /*
     * 创建用户
     */
    public function create()
    {
        return view('/admin/user/add');
    }

    /*
     * 创建用户
     */
    public function store()
    {
        $this->validate(request(), [
            'name'     => 'required|min:3',
            'password' => 'required'
        ]);

        $name     = request('name');
        $password = bcrypt(request('password'));
        \App\AdminUser::create(compact('name', 'password'));
        return redirect('/admin/users');
    }

    /*
     * 用户角色页面
     */
    public function role(\App\AdminUser $user)
    {
        $roles   = \App\AdminRole::all();
        $myRoles = $user->roles;
        return view('/admin/user/role', compact('roles', 'myRoles', 'user'));
    }

    /*
     * 储存用户角色
     * */
    public function storeRole(AdminRole $user)
    {
        $this->validate(request(), [
            'roles' => 'required|array'
        ]);

        $roles   = AdminRole::findMany(request('roles'));
        $myRoles = $user->roles;

        //增加
        $addRoles = $roles->diff($myRoles);
        foreach ($addRoles as $role) {
            $user->assignRole($role);
        }
        //删除
        $deleteRoles = $roles->diff($roles);
        foreach ($deleteRoles as $role) {
            $user->deleteRole($role);
        }
        return back();
    }
}