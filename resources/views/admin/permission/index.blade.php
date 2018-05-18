@extends("admin.layout.main")
@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">权限列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/permissions/create">增加权限</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>权限名称</th>
                                <th>描述</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>system</td>
                                <td>系统管理</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>post</td>
                                <td>文章管理</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>topic</td>
                                <td>专题管理</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>notice</td>
                                <td>通知管理</td>
                                <td>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection