<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 11:38
 * Module: LoginController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/admin/login/index');
    }

    /*
     * 具体登陆
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|min:2',
            'password' => 'required|min:6|max:30',
        ]);

        $user = request(['name', 'password']);
        if (true == \Auth::guard('admin')->attempt($user)) {
            return redirect('/admin/home');
        }

        return \Redirect::back()->withErrors("用户名密码错误");
    }

    /*
     * 登出操作
     */
    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}