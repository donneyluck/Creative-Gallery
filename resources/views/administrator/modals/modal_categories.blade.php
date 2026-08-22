<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">分类 | New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/admin/category/add" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">姓名</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ex: Pastel"
                                        oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');" required>
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
        </div>
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
                    <input type="hidden" id="edit_id" name="id">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="edit_name" class="col-sm-12 control-label">姓名</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="edit_name" name="name"
                                        placeholder="Ex: Pastel"
                                        oninput="this.value = this.value.replace(/[^A-Z a-z ]/g, '');" maxlength="11">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>Choose category status. 正常 if you want it to be shown. 禁用 if you want to hide it.</p>
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
        </div>
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
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to delete this 分类?</h2>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-danger"> 删除</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 删除 -->