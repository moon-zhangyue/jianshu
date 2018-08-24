<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/8/23 18:10
 * Module: NoticeController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
//    protected $guarded = [];
//    protected $fillable = ['title', 'content'];//开启白名单字段

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

        \App\Notice::create(request(['title', 'content']));
        return redirect('/admin/notice');
    }
}