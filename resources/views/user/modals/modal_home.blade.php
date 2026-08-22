<style>
    .fixed-size-upload {
        height: 450px;
        width: 100%;
        object-fit: cover;
    }

    .avatar-upload {
        height: 480px;
        width: 640px;
        object-fit: cover;
    }

    .place-upload {
        height: 480px;
        width: 640px;
        object-fit: cover;
    }
</style>

<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">创建</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/artwork/add" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <img src="{{ asset('../storage/images/blacklogo.png') }}" id="upload_photo"
                                    name="upload_photo" class="fixed-size-upload" />
                                <input type="file" placeholder="" class="file-chooser"
                                    onchange="document.getElementById('upload_photo').src = window.URL.createObjectURL(this.files[0])"
                                    id="photo" name="photo" alt="上传 photo" required>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="title" class="col-sm-12 control-label">作品名称</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="请输入作品名称..."
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-12 control-label">描述</label>
                                <div class="col-xs-12">
                                    <textarea rows="5" class="form-control" id="description" name="description"
                                        placeholder="请输入作品描述..."
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-sm-12 control-label">分类</label>
                                <div class="col-xs-12">
                                    <select class="form-control select2" id="category" name="category"
                                        style="width: 100%;">
                                        <option selected="selected">Select 分类</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="start_date" class="col-sm-12 control-label">竞拍日期</label>
                                <div class="col-xs-12">
                                    <div class="input-group date" id="start_date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            name="start_date" data-target="#start_date"
                                            placeholder="请输入竞拍日期..."
                                            oninput="this.value = this.value.replace(/[^0-9 / : P A M ]/g, '');" />
                                        <div class="input-group-append" data-target="#start_date"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="end_date" class="col-sm-12 control-label">结束日期</label>
                                <div class="col-xs-12">
                                    <div class="input-group date" id="end_date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="请输入竞拍结束日期..." data-target="#end_date"
                                            name="end_date"
                                            oninput="this.value = this.value.replace(/[^0-9 / : P A M ]/g, '');" />
                                        <div class="input-group-append" data-target="#end_date"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="start_price" class="col-sm-12 control-label">起拍价</label>
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="start_price" name="start_price"
                                        placeholder="请输入作品价格..."
                                        oninput="this.value = this.value.replace(/[^0-9 ]/g, '');" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="video" class="col-sm-12 control-label">真伪证明</label>
                                <div class="col-xs-12">
                                    <input type="file" id="video" name="video" accept="video/*" required>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-success">上传</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add -->

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
                                    <div class="watermark">吴派写意</div>
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

<!-- 查看 as 收藏家 -->
<div class="modal fade" id="view_as_buyer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">查看</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="关闭">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/home/offer">
                    @csrf
                    <input type="hidden" id="enthusiast_art_id" name="art_id" />
                    <p>提示：不能重复出价</p>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none" id="enthusiast_title"></h3>
                            <div class="col-12">
                                <div class="image-container">
                                    <img oncontextmenu="return false;"
                                        src="{{ asset('../storage/images/blacklogo.png') }}" alt="ID"
                                        id="enthusiast_photo" class="product-image" />
                                    <div class="watermark">吴派写意</div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="form-group">
                                    <p>请输入您的出价</p>
                                    <input type="text" class="form-control form-control-lg" id="offer"
                                        name="offer" placeholder="示例：1000">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3" id="enthusiast_title"></h3>
                            <div class="row">
                                <div class="col">
                                    <h5 id="enthusiast_category">分类</h5>
                                </div>
                                <div class="col">
                                    <h5 id="enthusiast_start_date">Start 日期</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 id="enthusiast_duration">Duration</h5>
                                </div>
                                {{-- <div class="col">
                                    <h5 id="enthusiast_end_date">结束日期</h5>
                                </div> --}}
                            </div>
                            <p id="enthusiast_description"></p>
                            <hr>
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0" id="enthusiast_start_price">
                                </h2>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">出价</button>
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
