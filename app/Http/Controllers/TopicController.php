<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        return view('topic/show');
    }

    public function submit(Topic $topic)
    {

    }
}
