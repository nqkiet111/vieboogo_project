@extends('Layouts.master')
@section('title', 'Nhà cung cấp')
@section('maincontent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Nhà cung cấp</strong></h1>
                    </div>
                    <div class="text-right col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách nhà cung cấp</h3>
                                <div class="text-right">
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#add_ncc"> Thêm
                                        mới</button>
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên nhà cung cấp</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
                                            <th width="125"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @include('Admin.Nhacungcap.Add')
    <script>
        //Tạo mới nhà cung cấp với phương thức ajax
        $("#add_new_ncc").on('submit', function(event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    location.reload();
                    $('#add_gv').modal('hide');
                },
                error: function(data) {
                    $('#tengvError').addClass('d-none');
                    $('#emailError').addClass('d-none');
                    $('#ngaysinhError').addClass('d-none');
                    $('#bomonError').addClass('d-none');
                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function(key, value) {
                            var ErrorID = '#' + key + 'Error';
                            $(ErrorID).removeClass("d-none");
                            $(ErrorID).text(value);
                        })
                    }
                }
            });
        });
    </script>

@endsection
