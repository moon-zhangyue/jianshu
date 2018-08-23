<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/8/23 18:10
 * Module: NoticeController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;


class NoticeController extends Controller
{
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
            'name' => 'required|min:3'
        ]);

        \App\Topic::create(request(['name']));
        return redirect('/admin/topics');
    }
}