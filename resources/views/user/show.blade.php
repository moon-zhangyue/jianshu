@extends("layout.main")

@section("content")
    <div class="col-sm-8">
        <blockquote>
            <p><img src="{{$user->avatar}}" alt="" class="img-rounded"
                    style="border-radius:500px; height: 40px"> {{$user->name}}
            </p>
            <footer>关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}｜文章：{{$user->posts_count}}</footer>
        </blockquote>
    </div>
    <div class="col-sm-8 blog-main">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">关注</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉丝</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 6天前</p>
                        <p class=""><a href="/posts/62">你好你好</a></p>


                        <p>
                        <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 6天前</p>
                        <p class=""><a href="/posts/61">你好你好</a></p>


                        <p>
                        <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 6天前</p>
                        <p class=""><a href="/posts/60">你好你好</a></p>


                        <p>
                        <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 6天前</p>
                        <p class=""><a href="/posts/59">你好你好</a></p>


                        <p>
                        <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1周前</p>
                        <p class=""><a href="/posts/58">自动放大舒服的撒</a></p>


                        <p>我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们坚持一个中国我们...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1周前</p>
                        <p class=""><a href="/posts/57">反对撒发的撒风反对撒发的撒风反对撒发的撒风</a></p>


                        <p>反对撒发的撒风反对撒发的撒风反对撒发的撒风反对撒发的撒风反对撒发的撒风反对撒发的撒风反对撒发的撒风反...</p>
                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/5">Kassandra Ankunding2</a> 1周前</p>
                        <p class=""><a href="/posts/56">dfdasfd</a></p>


                        <p>vadfdasfdas vadfdasfdas vadfdasfdas vadfdasfdas vadfdasfdas vadfdasfdas vadfdasfdas
                            vadfdasfdas vadf...</p>
                    </div>
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
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="blog-post" style="margin-top: 30px">
                        <p class="">Jadyn Medhurst Jr.</p>
                        <p class="">关注：1 | 粉丝：1｜ 文章：0</p>

                        <div>
                            <button class="btn btn-default like-button" like-value="1" like-user="6"
                                    _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注
                            </button>
                        </div>

                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class="">Mrs. Felicita D&#039;Amore DVM</p>
                        <p class="">关注：0 | 粉丝：1｜ 文章：1</p>

                        <div>
                            <button class="btn btn-default like-button" like-value="1" like-user="55"
                                    _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注
                            </button>
                        </div>

                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class="">Maybell VonRueden</p>
                        <p class="">关注：0 | 粉丝：2｜ 文章：0</p>

                        <div>
                            <button class="btn btn-default like-button" like-value="1" like-user="3"
                                    _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注
                            </button>
                        </div>

                    </div>
                    <div class="blog-post" style="margin-top: 30px">
                        <p class="">Miss Melyssa Bogan DDS</p>
                        <p class="">关注：2 | 粉丝：2｜ 文章：3</p>

                        <div>
                            <button class="btn btn-default like-button" like-value="1" like-user="2"
                                    _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注
                            </button>
                        </div>

                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>


    </div><!-- /.blog-main -->
@endsection