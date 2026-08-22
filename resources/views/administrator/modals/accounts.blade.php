
<!-- 禁用 -->
<div class="modal fade" id="deactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Account | 禁用</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form禁用" class="form-horizontal" method="GET" action="">
                    @csrf
                    {{-- <input type="text" id="delete_id" name="id"> --}}
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to deactivate this Account?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-danger"> 禁用</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 禁用 -->



<!-- 激活 -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Account | 激活</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form激活" class="form-horizontal" method="GET" action="">
                    @csrf
                    {{-- <input type="text" id="delete_id" name="id"> --}}
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to activate this Account?</h2>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-success"> 激活</button>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- 激活 -->




