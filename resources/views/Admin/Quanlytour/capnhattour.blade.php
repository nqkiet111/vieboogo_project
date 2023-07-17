@extends('Layouts.master')
@section('title', 'Nhà cung cấp')
@section('maincontent')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Cập nhật tour</strong></h1>
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
                                <h3 class="card-title">Danh sách tour</h3>
                                <div class="text-right">
                                    <a href="{{ route('tour.addTour') }}" class="btn btn-primary text-right">Thêm mới</a>
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
                                            <th>Tour</th>
                                            <th>Thông tin tour</th>
                                            <th>Hiện thị</th>
                                            <th>Đặt lịch trình tour</th>
                                            <th style="width:14%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                        @endphp
                                        @foreach ($listTour as $tour)
                                            <tr>
                                                <td>{{ ++$stt }}</td>
                                                <td>{{ $tour->tour_ten }}</td>
                                                <td style="text-align:left">
                                                   Ngày đi:   {{ date('d-m-Y', strtotime(($tour->tour_ngaydi)) ) }} <br>
                                                   Ngày về: {{ date('d-m-Y', strtotime($tour->tour_ngayve )) }} <br>
                                                Số lượng ngày: {{ $tour->tour_soluongngay }} <br>
                                                Số lượng người lớn: {{ $tour->tour_soluongnguoilon }} <br>
                                                Số lượng trẻ em: {{ $tour->tour_soluongtrem }}
                                                </td>
                                                <td><input onchange="tourHienthi('{{ $tour->tour_id }}')" type="checkbox" name="hienthi_{{$tour->tour_id}}" id="hienthi_{{$tour->tour_id}}" value="@if($tour->tour_hienthi == 1) 1 @else 0 @endif" @if($tour->tour_hienthi == 1) checked @endif /></td>
                                                <td><a class="btn btn-primary text-right" ata-toggle="modal" data-target="#modal_datlichtour" onclick="DatlichTour('{{$tour->tour_id}}')"> Đặt</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                {{-- {{$data_dmdd->links()}} --}}
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

    @include('Admin.Quanlytour.datlichtrinhtour');
    
    <script src="{{ asset('dist/js/modal.js') }}"></script>
    <script src="{{ asset('dist/js/admin/quanlytour.js') }}"></script>
@endsection
