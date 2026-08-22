<!-- 通过 -->
<div class="modal fade" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Verification | 通过</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form通过" class="form-horizontal" method="GET" action="">
                    @csrf
                    {{-- <input type="text" id="delete_id" name="id"> --}}
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to approve this 用户?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-success"> 通过</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 通过 -->


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
