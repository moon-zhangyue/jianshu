<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //文章列表页
    public function index()
    {
        return view('post/index',array('aa'=>'dd'));
    }

    //文章详情页
    public function show()
    {
        return view('post/show');
    }

    //创建文章
    public function create()
    {
        return view('post/create');
    }

    //创建逻辑
    public function store()
    {
        return;
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
