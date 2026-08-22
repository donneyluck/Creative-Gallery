@include('administrator/includes/header')
@include('administrator/modals/modal_requests')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/blacklogo.png') }}" alt="吴派写意"
                height="180" width="180">
            <h1>吴派写意</h1>
        </div>
        @include('administrator/includes/navbar')
        @include('administrator/includes/menubar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bidding</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">首页</a></li>
                                <li class="breadcrumb-item">Bidding</li>
                                <li class="breadcrumb-item">正常</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                @if ($errors->any())
                    <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> 错误！</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> 成功！</h4>
                        <ul>
                            {{ session()->get('success') }}
                        </ul>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="card" style="width:100%;">
                            <div class="card-header">
                                {{-- <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fas fa-plus"></i> 新建</a> --}}
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>作品</th>
                                            <th>艺术家</th>
                                            <th>描述</th>
                                            <th>起拍价</th>
                                            <th>日期</th>
                                            <th>Duration</th>
                                            <th>状态</th>
                                            <th>日期 Requested</th>
                                            {{-- <th>操作</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($biddings as $index => $bidding)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <img onclick="window.open(this.src)" src="{{ asset('../storage/images/arts/' . $bidding['photo']) }}"
                                                        alt="Product {{ $index + 1 }}"
                                                        class="img-fluid img-size-64 mr-2">
                                                    {{ $bidding['name'] }}
                                                </td>
                                                <td>{{ $bidding['artist'] }}</td>
                                                <td>{{ $bidding['description'] }}</td>
                                                <td>₱{{ number_format($bidding['starting_price'], 2) }}</td>
                                                <td>{{ $bidding['start_date'] }}</td>
                                                <td>{{ $bidding['duration'] }}</td>
                                                @if ($bidding['art_status'] == 2)
                                                    <td><span class="badge badge-warning">正常</span></td>
                                                @endif
                                                <td>{{ $bidding['created_at'] }}</td>
                                                {{-- <td>
                                                    <button type="button" class="btn btn-success btn-sm approve"
                                                        data-id="{{ $bidding['id'] }}"><i class="fas fa-check"></i>
                                                        通过</button>
                                                    <button type="button" class="btn btn-danger btn-sm reject"
                                                        data-id="{{ $bidding['id'] }}"><i class="fas fa-close"></i>
                                                        拒绝</button>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
            </section>
        </div>
    </div>
    </section>
    </div>
    @include('administrator/includes/footer')
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>
    @include('administrator/includes/scripts')
    <script>
        $(function() {
            $('#example1 tbody').on("click", ".approve", function() {
                $('#approve').modal('show');
                var id = $(this).data('id');
                var form操作 = '/admin/bidding/request/approve/' + id;
                $('#form通过').attr('action', form操作);
            });
            $('#example1 tbody').on("click", ".reject", function() {
                $('#reject').modal('show');
                var id = $(this).data('id');
                var form操作 = '/admin/bidding/request/reject/' + id;
                $('#form拒绝').attr('action', form操作);
            });
        });
    </script>
</body>

</html>
