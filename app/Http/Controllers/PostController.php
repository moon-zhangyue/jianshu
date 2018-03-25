<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Zan;

class PostController extends Controller
{
    //文章列表页
    public function index()
    {
//        $app = app();
//        $log = $app->make('log'); //绑定容器
//        $log->info('post_index',['data'=>'this is post data']);
//
//        \Log::info('post_index',['data'=>'门面模式']);


//        DB::connection()->enableQueryLog();
        $posts = Post::orderBy('created_at', 'desc')->withCount(["comments", "zans"])->paginate(5);
//        print_r(DB::getQueryLog());
//        var_dump($posts[0]);
        return view('post/index', compact('posts'));
    }

    //文章详情页
    public function show(Post $post)
    {
        $post->load('comments');
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
            'user_id' => 'integer',
        ]);

        $user_id = \Auth::id();

        $param = array_merge(request(['title', 'content']), compact('user_id'));//需要在允许注入字段里面加上user_id

        //或者
//        $param = request(['title', 'content']);

        $result = Post::create($param);

        return redirect("/posts");
    }

    //编辑页面
    public function edit(Post $post)
    {
        return view('post/edit', compact('post'));
    }

    //编辑逻辑
    public function update(Post $post)
    {
        //验证
        $this->validate(request(), [
            'title'   => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);

        $this->authorize('update', $post);//权限操作

        $post->title   = request('title');
        $post->content = request('content');
        $post->save();

        return redirect("/posts/{$post->id}");
    }

    //删除逻辑
    public function delete(Post $post)
    {
        //TODO 用戶权限认证
        $this->authorize('delete', $post);

        $post->status = 2; //刪除狀態
        $post->save();

        return redirect("/posts");
    }

    //图片上传
    public function imageUpload(Request $request)
    {
//        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        $path = $request->file('wangEditorH5File')->storePublicly(time());
//        dd('storage/'.$path);
//        dd(asset('storage/'.$path));
        return asset('storage/' . $path);
//        return 'storage/6acb82a265e8b6448cca67077594adba/8VDF7a9KbvcMI7ShndFlOi19Gx2svowD7XGloF3K.jpeg';
    }

    //提交评论
    public function comment(Post $post)
    {
        $this->validate(request(), [
            'content' => 'required|min:3'
        ]);

        $comment = new Comment();

        $comment->user_id = \Auth::id();
        $comment->content = request('content');
        $post->comments()->save($comment);

        return back();
    }

    //赞
    public function zan(Post $post)
    {
        $param = [
            'user_id' => \Auth::id(),
            'post_id' => $post->id
        ];

        Zan::firstOrCreate($param);
        return back();
    }

    //取消赞
    public function unzan(Post $post)
    {
        $post->zan(\Auth::id())->delete();
        return back();
    }

}
