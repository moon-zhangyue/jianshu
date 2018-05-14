<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        //带文章数的专题
        $topic = Topic::withCount('postTopics')->find($topic->id);
        //专题的文章列表,倒序排列10个
        $posts = $topic->posts()->orderBy('created_at', 'desc')->take(10)->get();
        return view('topic/show', compact('topic', 'posts'));
    }

    public function submit(Topic $topic)
    {

    }
}
