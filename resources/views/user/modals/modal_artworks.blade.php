<!-- 查看 as 艺术家 -->
<div class="modal fade" id="view_as_artist">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">查看</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none" id="view_title"></h3>
                            <div class="col-12">

                                <div class="image-container">
                                    <img oncontextmenu="return false;"
                                        src="{{ asset('../storage/images/blacklogo.png') }}" alt="ID"
                                        id="view_photo" class="product-image" />
                                    <div class="watermark">创意<br>画廊</div>
                                </div>
                                {{-- <img oncontextmenu="return false;" src="{{ asset('../storage/images/blacklogo.png') }}" id="view_photo"
                                    class="product-image" alt="Product Image"> --}}
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3" id="view_title"></h3>
                            <div class="row">
                                <div class="col">
                                    <p id="view_category">分类</p>
                                </div>
                                <div class="col">
                                    <p id="view_start_date">Start 日期</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 id="view_duration">Duration</h5>
                                </div>
                                {{-- <div class="col">
                                    <h5 id="view_end_date">结束日期</h5>
                                </div> --}}
                            </div>
                            <p id="view_description"></p>
                            <hr>
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0" id="view_start_price">
                                </h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">所有出价（从高到低）</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="products-list product-list-in-card pl-2 pr-2" id="productList">
                                        <!-- List items will be dynamically added here -->
                                    </ul>
                                </div>

                                {{-- <div class="card-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase">查看 全部 Offers</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 查看 -->

<!-- Accept -->
<div class="modal fade" id="accept">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">接受出价</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAccept" class="form-horizontal" method="GET" action="">
                    @csrf
                    <div class="text-center">
                        <h2 class="bold"> 您确定要接受这个出价吗？</h2>
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
<!-- Accept -->

<!-- 拒绝 -->
<div class="modal fade" id="reject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">拒绝出价</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form拒绝" class="form-horizontal" method="POST" action="/reject-offer">
                    @csrf
                    <input type="hidden" id="rejectId" name="id" />
                    <div class="text-center">
                        <h2 class="bold"> 您确定要拒绝这个出价吗？</h2>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="请输入原因..." 
                                rows="3" id="reject原因" name="reason"></textarea>
                            </div>

                        </div>
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