<!-- 通过 -->
<div class="modal fade" id="approve">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">认证 | 通过</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form通过" class="form-horizontal" method="GET" action="">
                    @csrf
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to approve this 用户?</h2>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-success"> 确认</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 通过 -->

<!-- 拒绝 -->
<div class="modal fade" id="reject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">认证 | 拒绝</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form拒绝" class="form-horizontal" method="GET" action="">
                    @csrf
                    <div class="text-center">
                        <h2 class="bold"> Are you sure you want to reject this Account?</h2>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> 关闭</button>
                <button type="submit" class="btn btn-danger"> 确认</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 拒绝 -->

<!-- 查看 -->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="viewLabel">认证 | 查看</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h5>Avatar Photo</h5>
                            <img src="{{ asset('../storage/images/blacklogo.png') }}" id="view_avatar_photo"
                                class="img-fluid" alt="Avatar Photo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h5>Place Photo</h5>
                            <img src="{{ asset('../storage/images/blacklogo.png') }}" id="view_place_photo"
                                class="img-fluid" alt="Place Photo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h5>ID Photo</h5>
                            <img src="{{ asset('../storage/images/blacklogo.png') }}" id="view_id_photo"
                                class="img-fluid" alt="ID Photo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h5>Selfie Photo</h5>
                            <img src="{{ asset('../storage/images/blacklogo.png') }}" id="view_selfie_photo"
                                class="img-fluid" alt="Selfie Photo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 查看 -->
