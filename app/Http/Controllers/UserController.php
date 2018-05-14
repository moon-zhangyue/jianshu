<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/13 18:22
 * Module: UserController.php
 * Please No Garbage Code!
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function setting()
    {
        $me = \Auth::user();
        return view('user/setting', compact('me'));
    }

    public function settingStore(Request $request, User $user)
    {
        $this->validate(request(), [
            'name' => 'min:3',
        ]);

        $name = request('name');
        if ($name != $user->name) {
            if (\App\User::where('name', $name)->count() > 0) {
                return back()->withErrors(array('message' => '用户名称已经被注册'));
            }
            $user->name = request('name');
        }
        if ($request->file('avatar')) {
            $path         = $request->file('avatar')->storePublicly(md5(\Auth::id() . time()));
            $user->avatar = "/storage/" . $path;
        }

        $user->save();
        return back();
    }

    /*
     * 个人中心页面
     * */
    public function show(User $user)
    {
        //个人信息--包含关注/粉丝/文章数
        $user = User::withCount(['stars', 'fans', 'posts'])->find($user->id); //stars,fans,posts是User里面的三个模型关联

        //这个人文章列表.取最新的钱10条
        $posts = $user->posts()->orderBy('created_at', 'desc')->take(10)->get();

        //这个人关注的用户,包含关注的用户关注/粉丝/文章数
        $stars  = $user->stars;
        $susers = User::whereIn('id', $stars->pluck('star_id'))->withCount(['stars', 'fans', 'posts'])->get();
//        foreach ($susers as $k => $v) {
//            var_dump($v);
//        }
//        dd($susers);
        //关注这个人的用户,包含粉丝用户的关注/粉丝/文章数
        $fans   = $user->fans;
        $fusers = User::whereIn('id', $fans->pluck('fan_id'))->withCount(['stars', 'fans', 'posts'])->get();

        return view('user/show', compact('user', 'posts', 'susers', 'fusers'));
    }

    /*
    * 关注用户
    * */
    public function fan(User $user)
    {
        $me = \Auth::user();
        $me->doFan($user->id);

        return [
            'error' => 0,
            'msg'   => ''
        ];
    }

    /*
     * 取消关注
     * */
    public function unfan(User $user)
    {
        $me = \Auth::user();
        $me->doUnfan($user->id);

        return [
            'error' => 0,
            'msg'   => ''
        ];
    }
}