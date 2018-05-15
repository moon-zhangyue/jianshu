<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 14:49
 * Module: UserController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

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
}