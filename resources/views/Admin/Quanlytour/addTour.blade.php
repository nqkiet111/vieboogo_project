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
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form id="frm_addtour" enctype="multipart/form-data" method="POST">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Tên tour</label>
                                        <input type="text" class="form-control" id="txtTentour" name="txtTentour" placeholder="Tên tour">
                                        <div id="valid_tentour"></div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Địa điểm</label>
                                        <select class="selectDiadiem form-control" name="selectDiadiem" id="selectDiadiem">
                                            <option value="">Chọn địa điểm</option>
                                            @foreach($listDmdiadiem as $dmDiadiem)
                                            <option value="{{$dmDiadiem->dmdd_id}}">{{$dmDiadiem->dmdd_ten}}</option>
                                            @endforeach
                                        </select>
                                        <div id="valid_dmdiadiem"></div>
                                      </div>
                                    </div>

                                    

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Số lượng người lớn</label>
                                          <input type="number" class="form-control" onchange="soluongnguoi()" id="slnguoilon" value="1" name="slnguoilon" placeholder="Số lượng người lớn">
                                          
                                          <div id="validnguoilon"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Số lượng trẻ em</label>
                                            <input type="number" class="form-control" id="sltreem" onchange="soluongnguoi()"  value="1" name="sltreem" placeholder="Số lượng trẻ em">
                                            <div id="validtreem"></div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Ngày đi</label>
                                          <input type="date" class="form-control"  id="txtNgaydi" name="txtNgaydi" placeholder="Tên tour">
                                          <div id="valid_ngaydi"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Ngày về</label>
                                            <input type="date" class="form-control" id="txtNgayve" name="txtNgayve" placeholder="Tên tour">
                                            <div id="valid_ngayve"></div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Số lượng ngày</label>
                                          <input type="text" class="form-control" id="txtSoluongngay" name="txtSoluongngay" placeholder="2 ngày 1 đêm">
                                          <div id="valid_slngay"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Ảnh đại diện</label>
                                            <input type="file" class="form-control" id="anhTour" name="anhTour" placeholder="">
                                            <div id="valid_avatatour"></div>
                                        </div>
                                      </div>
                                    <div class="form">
                                      <label for="inputCity">Mô tả</label>
                                      <textarea name="mota" id="mota"></textarea>
                                    </div>
                                    <br>
                                    

                                    <button type="button" data-url="{{ route('tour.saveTour') }}"  class="btn btn-primary btn-addTour">Thêm</button>
                                  </form>
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

    {{-- @include('Admin.Quanlytour.addDanhmucdiadiem'); --}}
    <script src="{{ asset('dist/js/modal.js') }}"></script>
    <script src="{{ asset('dist/js/admin/quanlytour.js') }}"></script>
@endsection
