@include('administrator/includes/header')
@include('administrator/modals/modal_accounts')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('storage/images/blacklogo.png') }}" alt="吴派写意"
                height="180" width="180">
            <h1>吴派写意</h1>
        </div>
        <!-- Preloader -->

        @include('administrator/includes/navbar')
        @include('administrator/includes/menubar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>账户管理</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">首页</a></li>
                                <li class="breadcrumb-item active">账户管理</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
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
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <div class="card" style="width:100%;">
                            <div class="card-header">
                                {{-- <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fas fa-plus"></i> 新建</a> --}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>用户name</th>
                                            <th>Full 姓名</th>
                                            <th>邮箱 地址</th>
                                            {{-- <th>联系方式 No.</th> --}}
                                            <th>日期 of Registration</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- SELECT `id`, `role`, `username`, `firstname`, 
                                                `middlename`, `surname`, `address`, `photo`, 
                                                `email`, `contact`, `password`, `status`, 
                                                `verification_token`, `verification_status`, 
                                                `created_at`, `updated_at`, `administrator_id` 
                                                FROM `users` WHERE 1 --}}
                                        @foreach ($accounts as $index => $account)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $account['username'] }}</td>
                                                {{-- <td><img src="{{ url('storage/images/employees/' . $employee['photo']) }}"
                                                    alt="Employee" class="brand-image img-circle elevation-3"
                                                    style="width:60px;height:60px;"></td> --}}
                                                <td>{{ $account['name'] }}</td>
                                                <td>{{ $account['email'] }}</td>
                                                <td>{{ $account['created_at'] }}</td>
                                                {{-- <td>{{ $employee['contact'] }}</td> --}}
                                                <td>
                                                    {{-- <button type="button" class="btn btn-success btn-sm edit"
                                                        data-id="{{ $employee['id'] }}"
                                                        data-employee_id="{{ $employee['employee_id'] }}"
                                                        data-firstname="{{ $employee['firstname'] }}"
                                                        data-middlename="{{ $employee['middlename'] }}"
                                                        data-surname="{{ $employee['surname'] }}"
                                                        data-email="{{ $employee['email'] }}"
                                                        data-contact="{{ $employee['contact'] }}"
                                                        data-status="{{ $employee['stat_no'] }}"><i
                                                            class="fas fa-edit"></i> 编辑</button> --}}

                                                    {{-- <button type="button" class="btn bg-navy btn-sm addface"
                                                        data-id="{{ $employee['employee_id'] }}"><i
                                                            class="fas fa-image-portrait"></i> Add Face</button> --}}
                                                    @if ($account['status'] == 1)
                                                        <button type="button" class="btn btn-danger btn-sm deactivate"
                                                            data-id="{{ $account['id'] }}"
                                                            data-status="{{ $account['status'] }}"><i
                                                                class="fas fa-close"></i>
                                                            禁用</button>
                                                    @elseif($account['status'] == 0)
                                                        <button type="button" class="btn btn-success btn-sm activate"
                                                            data-id="{{ $account['id'] }}"
                                                            data-status="{{ $account['status'] }}"><i
                                                                class="fas fa-check"></i>
                                                            激活</button>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('administrator/includes/footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('administrator/includes/scripts')

    <script>
        $(function() {
            $('#example1 tbody').on("click", ".deactivate", function() {
                $('#deactivate').modal('show');
                var id = $(this).data('id');
                console.log();
                //$('#delete_id').val(id);

                var form操作 = '/admin/account/deactivate/' + id;
                $('#form禁用').attr('action', form操作);
            });


        });

        $(function() {
            $('#example1 tbody').on("click", ".activate", function() {
                $('#activate').modal('show');
                var id = $(this).data('id');

                //$('#delete_id').val(id);

                var form操作 = '/admin/account/activate/' + id;
                $('#form激活').attr('action', form操作);
            });


        });
    </script>

</body>

</html>
