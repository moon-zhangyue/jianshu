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
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="/admin/users/2/role" method="POST">
                            <input type="hidden" name="_token" value="RPPMc0lhvtynKELDZljXlz9UZI9uNc55ip1P8GCM">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="roles[]"
                                               checked
                                               value="1">
                                        sys-manager
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="roles[]"
                                               checked
                                               value="2">
                                        post-manager
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="roles[]"
                                               checked
                                               value="3">
                                        topic-manager
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="roles[]"
                                               checked
                                               value="4">
                                        notice-manager
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection