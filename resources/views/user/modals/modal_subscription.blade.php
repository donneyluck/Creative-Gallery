<style>
    .align-icon {
        display: flex;
        align-items: center;
    }
</style>

<!-- Subscribe as 艺术家 -->
<div class="modal fade" id="view_as_artist_sub">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="background:#020035;">
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 text-center">
                            <h3 class="my-3" style="color:white;" id="view_title">PREMIUM</h3>
                            <div class="row">
                                <div class="col">
                                    <h5 id="view_category" style="color:white;">For 艺术家</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 id="view_start_date" style="color:white;">₱249 Lifetime</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="p-2 d-flex align-items-center text-white justify-content-center align-icon">
                                        <i class="fas fa-check"></i>
                                        <p class="mb-0 ml-2">Exhibit 作品s</p>
                                    </div>
                                  
                                    <div
                                        class="p-2 d-flex align-items-center text-white justify-content-center align-icon">
                                        <i class="fas fa-check"></i>
                                        <p class="mb-0 ml-2">Auction yout 作品</p>
                                    </div>
                                    <div class="p-2 d-flex align-items-center justify-content-center align-icon">
                                        <a href="/create-payment-link"
                                            class="btn btn-lg btn-success d-flex align-items-center">
                                            {{-- <i class="fas fa-check"></i> --}}
                                            <p class="mb-0 ml-2">Subscribe</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe as 艺术家 -->

<!-- Subscribe as 收藏家 -->
<div class="modal fade" id="view_as_buyer_sub">
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="background:#020035;">
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 text-center">
                            <h3 class="my-3" style="color:white;" id="view_title">PREMIUM</h3>
                            <div class="row">
                                <div class="col">
                                    <h5 id="view_category" style="color:white;">For Art 收藏家</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 id="view_start_date" style="color:white;">₱249 Lifetime</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="p-2 d-flex align-items-center text-white justify-content-center align-icon">
                                        <i class="fas fa-check"></i>
                                        <p class="mb-0 ml-2">Offer for 作品s</p>
                                    </div>
                                   
                                    <div class="p-2 d-flex align-items-center justify-content-center align-icon">
                                        <a href="/create-payment-link"
                                            class="btn btn-lg btn-success d-flex align-items-center">
                                            {{-- <i class="fas fa-check"></i> --}}
                                            <p class="mb-0 ml-2">Subscribe</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe as 收藏家 -->
