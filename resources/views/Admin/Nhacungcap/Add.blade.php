<!-- Modal add -->
<div class="modal fade" id="add_ncc" centered="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm nhà cung cấp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="add_new_ncc">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên nhà cung cấp</label>
                            <input type="text" class="form-control ncc_ten" name="ncc_ten" required>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control-file ncc_logo" name="ncc_logo" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control ncc_diachi" name="ncc_diachi" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control ncc_email" name="ncc_email" required>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="tel" class="form-control ncc_sodt" name="ncc_sodt" required>
                        </div>
                        <div class="form-group">
                            <label>Ngày hoạt động</label>
                            <input type="date" class="form-control ncc_ngayhoatdong" name="ncc_ngayhoatdong" required>
                        </div>
                        <div class="form-group">
                            <label>Mã kinh doanh</label>
                            <input type="text" class="form-control ncc_makinhdoanh" name="ncc_makinhdoanh" required>
                        </div>
                        <div class="form-group">
                            <label>Chủ sở hữu</label>
                            <input type="text" class="form-control ncc_chusohuu" name="ncc_chusohuu" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên tài khoản ngân hàng 1</label>
                                    <input type="text" class="form-control ncc_tentknh1" name="ncc_tentknh1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số tài khoản ngân hàng 1</label>
                                    <input type="text" class="form-control ncc_sotknh1" name="ncc_sotknh1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên tài khoản ngân hàng 2</label>
                                    <input type="text" class="form-control ncc_tentknh2" name="ncc_tentknh2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số tài khoản ngân hàng 2</label>
                                    <input type="text" class="form-control ncc_sotknh2" name="ncc_sotknh2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add_ncc">Thêm mới</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal add -->
