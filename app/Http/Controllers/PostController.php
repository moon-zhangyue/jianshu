<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //文章列表页
    public function index()
    {
//        DB::connection()->enableQueryLog();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
//        print_r(DB::getQueryLog());
//        var_dump($post[0]->id);
        return view('post/index', compact('posts'));
    }

    //文章详情页
    public function show(Post $post)
    {
        return view('post/show', compact('post'));
    }

    //创建文章
    public function create()
    {
        return view('post/create');
    }

    //创建逻辑
    public function store()
    {
//        $post = new Post();
//
//        $post->title   = request('title');
//        $post->content = request('content');
//        $post->save();

        //验证
        $this->validate(request(), [
            'title'   => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);
        //或者
        $param = request(['title', 'content']);

        $result = Post::create($param);
        return redirect("/posts");
    }

    //编辑页面
    public function edit()
    {
        return view('post/edit');
    }

    //编辑逻辑
    public function update()
    {
        return;
    }

    //删除逻辑
    public function delete()
    {
        return;
    }
}
