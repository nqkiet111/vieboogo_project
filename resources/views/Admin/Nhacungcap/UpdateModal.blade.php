<!-- Modal add -->
<div class="modal fade" id="update_ncc" centered="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cập nhật nhà cung cấp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="edit_ncc" enctype="multipart/form-data">
                @csrf 
                <div class="modal-body"  style="overflow-y: auto;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tên nhà cung cấp</label>
                                    <input type="text" class="form-control ncc_ten" name="ncc_ten" id="ncc_ten"  autocomplete="off">
                                    <input type="text" class="form-control " value="" name="ma_ncc" id="ma_ncc" hidden>
                                    <span class="text-danger font-weight-bold" id="ncc_tenErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control ncc_email" name="ncc_email" id="ncc_email"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_emailErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="tel" class="form-control ncc_sodt" name="ncc_sodt" id="ncc_sodt"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_sodtErrorUpdate"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ngày hoạt động</label>
                                    <input type="date" class="form-control ncc_ngayhoatdong" name="ncc_ngayhoatdong" id="ncc_ngayhoatdong">
                                    <span class="text-danger font-weight-bold" id="ncc_ngayhoatdongErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mã kinh doanh</label>
                                    <input type="text" class="form-control ncc_makinhdoanh" name="ncc_makinhdoanh" id="ncc_makinhdoanh"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_makinhdoanhErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Chủ sở hữu</label>
                                    <input type="text" class="form-control ncc_chusohuu" name="ncc_chusohuu" id="ncc_chusohuu"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_chusohuuErrorUpdate"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên tài khoản ngân hàng 1</label>
                                    <input type="text" class="form-control ncc_tentknh1" name="ncc_tentknh1" id="ncc_tentknh1"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_tentknh1ErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số tài khoản ngân hàng 1</label>
                                    <input type="text" class="form-control ncc_sotknh1" name="ncc_sotknh1" id="ncc_sotknh1"  autocomplete="off">
                                    <span class="text-danger font-weight-bold" id="ncc_sotknh1ErrorUpdate"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên tài khoản ngân hàng 2</label>
                                    <input type="text" class="form-control ncc_tentknh2" name="ncc_tentknh2" id="ncc_tentknh2"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số tài khoản ngân hàng 2</label>
                                    <input type="text" class="form-control ncc_sotknh2" name="ncc_sotknh2" id="ncc_sotknh2"  autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Logo công ty</label>
                            <input type="file" class="form-control-file ncc_logo" name="ncc_logo" accept="image/*">
                            <span class="text-danger font-weight-bold" id="ncc_logoErrorUpdate"></span>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <textarea type="text" class="form-control ncc_diachi" name="ncc_diachi" id="ncc_diachi">
                            </textarea>
                            <span class="text-danger font-weight-bold" id="ncc_diachiErrorUpdate"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal add -->
