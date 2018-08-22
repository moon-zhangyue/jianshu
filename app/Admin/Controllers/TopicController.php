<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/8/16 16:39
 * Module: TopicController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;


use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = \App\Topic::all();
        return view('admin/topic/index', compact('topics'));
    }

    public function create()
    {
        return view('admin/topic/create');
    }

    public function destroy()
    {

    }
}