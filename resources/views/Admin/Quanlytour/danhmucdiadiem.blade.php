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
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#ModelThemdiadiem">
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
                                            <th style="width:14%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp
                                        @foreach ($data_dmdd as $dmdiadiem)
                                            <tr>
                                                <td>{{ ++$stt }}</td>
                                                <td>{{ $dmdiadiem->dmdd_ten }}</td>
                                            
                                            <td>
                                                <button type="button" class="btn btn-primary">Sửa</button> 
                        
                                                <button data-url="{{ route('dmdd.destroyDmdiadiem', $dmdiadiem->dmdd_id) }}"  type="button" class="btn btn-danger btn-delete-dmdiadiem">Xóa</button>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                {{$data_dmdd->links()}}
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

    @include('Admin.Quanlytour.addDanhmucdiadiem');
    
    <script src="{{ asset('dist/js/modal.js') }}"></script>
    <script src="{{ asset('dist/js/admin/quanlytour.js') }}"></script>
@endsection
