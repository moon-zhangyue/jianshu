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

    }

    //创建逻辑
    public function store()
    {

    }

    //编辑页面
    public function edit()
    {

    }

    //编辑逻辑
    public function update()
    {

    }

    //删除逻辑
    public function delete()
    {

    }
}
