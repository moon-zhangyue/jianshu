@extends("layout.main")
@section("content")
    <div class="col-sm-8">
        <blockquote>
            <p>旅游</p>
            <footer>文章：4</footer>
            <button class="btn btn-default topic-submit" data-toggle="modal" data-target="#topic_submit_modal"
                    topic-id="1" _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">投稿
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
                    <form action="/topic/1/submit">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="56">
                                dfdasfd
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="57">
                                反对撒发的撒风反对撒发的撒风反对撒发的撒风
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="58">
                                自动放大舒服的撒
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="59">
                                你好你好
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="60">
                                你好你好
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="61">
                                你好你好
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="62">
                                你好你好
                            </label>
                        </div>
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
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1个月前</p>
                        <p class=""><a href="/posts/55">32323</a></p>

                        <p>232323232323232323232323232323232323232323232323232323
                            232323232323232323232323
                            232323232323232323...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1个月前</p>
                        <p class=""><a href="/posts/54">dafdsafads</a></p>

                        <p>dafdsafadsdafdsafadsdafdsafadsdafdsafads

                            dafdsafadsdafdsafadsdafdsafadsdafdsafadsdafdsafadsdafdsa...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/51">Libbie Grant</a> 1个月前</p>
                        <p class=""><a href="/posts/1">Provident ipsa omnis suscipit iusto repellendus impedit
                                consectetur perspiciatis.</a></p>

                        <p>Consequatur quam at amet omnis sit explicabo eos. Molestiae temporibus libero quasi rem qui.
                            Optio s...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/52">Edison Reynolds</a> 1个月前</p>
                        <p class=""><a href="/posts/2">Officia deleniti ut repellendus et qui laudantium voluptas
                                nobis.</a></p>

                        <p>Officiis optio sed aliquam. Exercitationem id voluptatem sint minus quasi. Aliquid placeat et
                            eos vo...</p>
                    </div>
                </div>

            </div>
            <!-- /.tab-content -->
        </div>


    </div><!-- /.blog-main -->
@endsection
