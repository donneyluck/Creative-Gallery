<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">分类 | 新建</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/category/add"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">姓名</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ex: Pastel" required>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Add -->

<!-- 编辑 -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">分类 | 编辑</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/category/edit"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="edit_id" name="id">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="edit_name" class="col-sm-12 control-label">姓名</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="edit_name" name="name"
                                        placeholder="Ex: Pastel" maxlength="11">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <p>Choose employee's status.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="edit_status" class="col-sm-12 control-label">状态</label>

                                <div class="col-sm-5">
                                    <select class="form-control" id="edit_status" name="status" required>
                                        <option value="" selected>- Select -</option>
                                        <option value="1">正常</option>
                                        <option value="0">禁用</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 编辑 -->

<!-- 删除 -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">分类 | 删除</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form删除" class="form-horizontal" method="GET" action="">
                    @csrf
                    {{-- <input type="text" id="delete_id" name="id"> --}}
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to delete this 分类?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-danger"> 删除</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 删除 -->


<!-- 上传 -->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Professors | 上传</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/professor/upload"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="excel" class="col-sm-3 control-label">Excel</label>

                        <div class="col-sm-12">
                            <input type="file" accept=".xls, .xlsx" id="excel" name="excel">
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 上传 -->


<!-- Add Face -->
<div class="modal fade" id="addface">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Employee | Add Face</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAddface" class="form-horizontal" enctype="multipart/form-data" method="POST"
                    action="/admin/employees/add-face">
                    @csrf
                    <input type="text" id="add_face_id" name="employee_no">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="photo">Photos</label>
                                <input type="file" accept="image/png, image/gif, image/jpeg" id="photo"
                                    name="photos[]" multiple />
                            </div>
                        </div>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn bg-navy"> 上传</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- Add Face -->
