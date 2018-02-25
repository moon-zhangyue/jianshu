<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2018/2/25
 * Time: 17:02
 */

namespace App\Http\Controllers;


class LoginController extends Controller
{
    /*
     * 登录页面
     * */
    public function index()
    {
        return view('login.index');
    }

    /*
     * 登录行为
     * */
    public function login()
    {
        //验证
        $this->validate(request(), [
            'email'       => 'required|email',
            'password'    => 'required|min:5|max:10',
            'is_remember' => 'integer',
        ]);

        $user        = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));

        if (\Auth::attempt($user, $is_remember)) {
            return redirect('/posts');
        }
        return \Redirect::back()->withErrors('错误');
    }

    /*
     * 退出
     * */
    public function logout()
    {
        \Auth::logout();
        return  redirect('/login');
    }

}