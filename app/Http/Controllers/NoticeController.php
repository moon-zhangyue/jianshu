<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/8/24 17:07
 * Module: NoticeController.php
 * Please No Garbage Code!
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /*
     * 消息页面
     */
    public function index()
    {
        // 获取我收到的消息
        $user    = \Auth::user();
        $notices = $user->notice;
        return view("notice/index", compact('notices'));
    }
}