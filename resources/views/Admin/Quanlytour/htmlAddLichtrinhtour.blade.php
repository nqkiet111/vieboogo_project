@php
$ngay  = 0;
$luungay = 0; 
$stt = 0;
$sttThem = 0; 
$formLichtrinh = 0;
$numElmNgay = 0; 
$luulichtrinh = 0;
@endphp
<input type="hidden" name="numElm" id="numElm" value="" />
@for($i=1; $i <= $days;$i++)
<h5><i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{ ++$ngay }}</h5>
<input type="hidden" name="numElmNgay_{{$i}}" id="numElmNgay_{{$i}}" value="" />
<div class="form-group" id="formLichtrinh_{{++$formLichtrinh}}">
    <i class='fa fa-circle' style='color:green' aria-hidden='true'></i>
    <label for="inputPassword6">Tên hoạt động: </label>
    <input type="text" id="txtTenhoatdong" name="txtTenhoatdong" class="form-control mx-sm-3">

    <label for="inputPassword6">Thời gian: </label>
    <input type="datetime-local" id="txtThoigian" name="txtThoigian" class="form-control mx-sm-3">

    <label for="inputPassword6">Mô tả: </label>
    <input type="text" id="txtMota" name="txtMota" class="form-control mx-sm-3">

    <label for="inputPassword6">Hình ảnh: </label>
    <input type="file" id="anhNgaylichtrinh" name="anhNgaylichtrinh" class="form-control mx-sm-3">
</div>
<div class="formMore" id="formMore_{{$i}}">
</div>
<div class="btn_frmLichtrinh" style="margin-bottom: 2%">
    <button type="button" onclick="themformDatlich('{{++$sttThem}}')" class="btn btn-primary">Thêm</button>
    <button type="button" onclick="ResetLich('{{$i}}')"  class="btn btn-danger">Reset</button>
    <button type="button" onclick="LuulichtrinhtheoNgay('{{++$luulichtrinh}}')" class="btn btn-success">Lưu Ngày {{ ++$luungay }}</button>
</div>
@endfor
