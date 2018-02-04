@extends("layout.main")

@section("content")
        <div class="col-sm-8 blog-main">
            <form action="/posts/62" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">
                <div class="form-group">
                    <label>标题</label>
                    <input name="title" type="text" class="form-control" placeholder="这里是标题" value="你好你好">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="这里是内容">&lt;p&gt;你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好&lt;img src=&quot;http://127.0.0.1:8000/storage/72c76b674ec8793fcfd6555ff371bfbd/nxC9ozLfkORmoY92q9lPsejXchVvdNO2cwHiR2Jf.jpeg&quot; alt=&quot;63&quot; style=&quot;max-width: 100%;&quot;&gt;你好你好似懂非懂说&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;</textarea>
                </div>
                <button type="submit" class="btn btn-default">提交</button>
            </form>
            <br>
        </div><!-- /.blog-main -->
@endsection