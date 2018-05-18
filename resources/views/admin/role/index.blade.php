@extends("admin.layout.main")
@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">角色列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/roles/create">增加角色</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>角色名称</th>
                                <th>角色描述</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>sys-manager</td>
                                <td>系统管理员</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/1/permission">权限管理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>post-manager</td>
                                <td>文章运营人员</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/2/permission">权限管理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>topic-manager</td>
                                <td>专题管理员</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/3/permission">权限管理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>notice-manager</td>
                                <td>通知管理员</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/4/permission">权限管理</a>
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
