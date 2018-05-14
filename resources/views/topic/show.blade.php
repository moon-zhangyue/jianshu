@extends("layout.main")
@section("content")
    <div class="col-sm-8">
        <blockquote>
            <p>{{$topic->name}}</p>
            <footer>文章：{{$topic->post_topics_count}}</footer>
            <button class="btn btn-default topic-submit" data-toggle="modal" data-target="#topic_submit_modal"
                    topic-id="{{$topic->id}}" _token="{{csrf_token()}}" type="button">投稿
            </button>
        </blockquote>
    </div>
    <div class="modal fade" id="topic_submit_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">我的文章</h4>
                </div>
                <div class="modal-body">
                    <form action="/topic/{{$topic->id}}/submit" method='POST'>
                        {{csrf_field()}}
                        @foreach($posts as $post)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="post_ids[]" value="{{$post->id}}">
                                    {{$post->title}}
                                </label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-default">投稿</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8 blog-main">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @foreach($posts as $post)
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a
                                        href="/user/{{$post->user_id}}">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}
                            </p>
                            <p class=""><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
                            <p>{!!str_limit($post['content'],100,'...')!!}</p>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- /.tab-content -->
        </div>
    </div><!-- /.blog-main -->
@endsection
