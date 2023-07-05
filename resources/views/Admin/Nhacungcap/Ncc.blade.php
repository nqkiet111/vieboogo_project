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
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#add_ncc">
                                        Thêm
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
                                            <th width="125">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $stt = 0;
                                        @endphp
                                        @foreach ($data_ncc as $ncc)
                                        <tr>
                                            <td>{{++$stt}}</td>
                                            <td>{{$ncc->ncc_ten}}</td>
                                            <td>{{$ncc->ncc_diachi}}</td>
                                            <td>{{$ncc->ncc_sodt}}</td>
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
    <script src="{{asset('dist/js/modal.js')}}"></script>
    <script>
        // Tạo mới nhà cung cấp với phương thức AJAX
        $(document).on('submit', '#add_new_ncc', function(event) {
            event.preventDefault();

            // Lấy thông tin form
            var formData = new FormData(this);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            // Gửi AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ route('ncc.save') }}",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    location.reload();
                    $('#add_ncc').modal('hide');
                },
                error: function(data) {
                    // Xóa class d-none của tất cả các lỗi
                    $('#add_new_ncc .text-danger').addClass('d-none');

                    var errors = data.responseJSON;
                    if (!$.isEmptyObject(errors)) {
                        $.each(errors.errors, function(key, value) {
                            var errorID = '#' + key + 'Error';
                            $(errorID).removeClass("d-none");
                            $(errorID).text(value);
                        });
                    }
                }
            });
        });
    </script>

@endsection
