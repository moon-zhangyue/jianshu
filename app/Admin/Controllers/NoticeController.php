<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/8/23 18:10
 * Module: NoticeController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
//    protected $guarded = [];
    protected $fillable = ['title', 'content'];//开启白名单字段

    public function index()
    {
        $notices = \App\Notice::all();
        return view('admin/notice/index', compact('notices'));
    }

    public function create()
    {
        return view('admin/notice/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required|string',
            'content' => 'required|string'
        ]);

//        $request->except('_token', '_method');//也不管用

        $notice = \App\Notice::create(request(['title', 'content']));

        dispatch(new \App\Jobs\SendMessage($notice));//消息分发给队列

        return redirect('/admin/notice');
    }
}