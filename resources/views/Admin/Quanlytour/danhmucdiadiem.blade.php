@extends('Layouts.master')
@section('title', 'Nhà cung cấp')
@section('maincontent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Danh mục địa điểm</strong></h1>
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
                                <h3 class="card-title">Danh sách danh mục địa điểm</h3>
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
                                            <th>Địa điểm</th>
                                            <th width="125">Thao tác</th>
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
    <script src="{{ asset('dist/js/modal.js') }}"></script>
    <script>
        var saveNccRoute = "{{ route('ncc.save') }}";
        var csrfToken = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('dist/js/admin/nhacungcap.js') }}"></script>
@endsection
