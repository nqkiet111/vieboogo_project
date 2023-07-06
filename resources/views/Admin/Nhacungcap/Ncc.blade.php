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
                                            <th width="300">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp
                                        @foreach ($data_ncc as $ncc)
                                            <tr>
                                                <td>{{ ++$stt }}</td>
                                                <td>{{ $ncc->ncc_ten }}</td>
                                                <td>{{ $ncc->ncc_diachi }}</td>
                                                <td>{{ $ncc->ncc_sodt }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-info" data-toggle="modal"
                                                        data-ma_ncc="{{ $ncc->ma_ncc }}" data-ncc_ten="{{ $ncc->ncc_ten }}"
                                                        data-ncc_diachi="{{ $ncc->ncc_diachi }}"
                                                        data-ncc_email="{{ $ncc->ncc_email }}"
                                                        data-ncc_sodt="{{ $ncc->ncc_sodt }}"
                                                        data-ncc_ngayhoatdong="{{ $ncc->ncc_ngayhoatdong }}"
                                                        data-ncc_makinhdoanh="{{ $ncc->ncc_makinhdoanh }}"
                                                        data-ncc_chusohuu="{{ $ncc->ncc_chusohuu }}"
                                                        data-ncc_tentknh1="{{ $ncc->ncc_tentknh1 }}"
                                                        data-ncc_sotknh1="{{ $ncc->ncc_sotknh1 }}"
                                                        data-ncc_tentknh2="{{ $ncc->ncc_tentknh2 }}"
                                                        data-ncc_sotknh2="{{ $ncc->ncc_sotknh2 }}"
                                                        data-target="#update_ncc"><i class="fa fa-pen">
                                                            Cập nhật</i></a>
                                                    <a class="btn btn-sm btn-warning" data-toggle="modal"
                                                        data-ma_ncc="{{ $ncc->ma_ncc }}"
                                                        data-ncc_ten="{{ $ncc->ncc_ten }}"
                                                        data-ncc_diachi="{{ $ncc->ncc_diachi }}"
                                                        data-ncc_email="{{ $ncc->ncc_email }}"
                                                        data-ncc_sodt="{{ $ncc->ncc_sodt }}"
                                                        data-ncc_ngayhoatdong="{{ $ncc->ncc_ngayhoatdong }}"
                                                        data-ncc_makinhdoanh="{{ $ncc->ncc_makinhdoanh }}"
                                                        data-ncc_chusohuu="{{ $ncc->ncc_chusohuu }}"
                                                        data-ncc_tentknh1="{{ $ncc->ncc_tentknh1 }}"
                                                        data-ncc_sotknh1="{{ $ncc->ncc_sotknh1 }}"
                                                        data-ncc_tentknh2="{{ $ncc->ncc_tentknh2 }}"
                                                        data-ncc_sotknh2="{{ $ncc->ncc_sotknh2 }}"
                                                        data-target="#detail_ncc"><i class="fa fa-eye">
                                                            Chi tiết</i></a>
                                                    <a href="{{ route('ncc.delete', str_replace('/', '-', $ncc->ma_ncc)) }}"
                                                        onclick="event.preventDefault(); deleteConfirmation('{{ $ncc->ma_ncc }}');"
                                                        class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"> Xóa </i>
                                                    </a>
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
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @include('Admin.Nhacungcap.AddModal')
    @include('Admin.Nhacungcap.UpdateModal')
    @include('Admin.Nhacungcap.DetailsModal')
    <script src="{{ asset('dist/js/modal.js') }}"></script>
    <script>
        var saveNccRoute = "{{ route('ncc.save') }}";
        var csrfToken = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('dist/js/admin/nhacungcap.js') }}"></script>
@endsection
