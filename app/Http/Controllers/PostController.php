<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $posts = Post::orderBy('created_at', 'desc')->where('status', 1)->paginate(10);
//        print_r(DB::getQueryLog());
//        var_dump($post[0]->id);
        return view('post/index', compact('posts'));
    }

    //文章详情页
    public function show(Post $post)
    {
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
        ]);
        //或者
        $param = request(['title', 'content']);

        $result = Post::create($param);
        return redirect("/posts");
    }

    //编辑页面
    public function edit(Post $post)
    {
        return view('post/edit',compact('post'));
    }

    //编辑逻辑
    public function update(Post $post)
    {
        //验证
        $this->validate(request(), [
            'title'   => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);

        $post->title   = request('title');
        $post->content = request('content');
        $post->save();

        return redirect("/posts/{$post->id}");
    }

    //删除逻辑
    public function delete(Post $post)
    {
        //TODO 用戶权限认证

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
        return asset('storage/'.$path);
//        return 'storage/6acb82a265e8b6448cca67077594adba/8VDF7a9KbvcMI7ShndFlOi19Gx2svowD7XGloF3K.jpeg';
    }
}
