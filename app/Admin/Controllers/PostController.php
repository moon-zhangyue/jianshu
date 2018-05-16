<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/16 16:07
 * Module: PostController.php
 * 文章列表页面
 */

namespace App\Admin\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Post::withoutGlobalScope('status')->where('status', 0)->orderBy('created_at', 'desc')->paginate(10);
        return view('/admin/post/index', compact('posts'));
    }

    /*
     * 修改文章的状态
     */
    public function status(Post $post)
    {
        $this->validate(request(), [
            "status" => 'required|in:-1,1',
        ]);

        $post->status = request('status');
        $post->save();//此处报错,但是数据库操作成功

        return [
            'error' => 0,
            'msg'   => ''
        ];
    }
}