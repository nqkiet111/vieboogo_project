<!-- Modal add -->
<div class="modal fade" id="detail_ncc" centered="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết nhà cung cấp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow-y: auto;">
                <div class="card-body">
                          <div class="card-body pt-0">
                            <h2 class="lead"><b><span class="ncc_ten" name="ncc_ten" id="ncc_ten"></span></b></h2>
                            <p class="text-muted text-sm"><b><span class="ncc_chusohuu" name="ncc_chusohuu" id="ncc_chusohuu"></span></b></p>
                            <div class="row">
                              <div class="col-7">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-key"></i></span><span class="ma_ncc" name="ma_ncc" id="ma_ncc"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span><span class="ncc_ngayhoatdong" name="ncc_ngayhoatdong" id="ncc_ngayhoatdong"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-suitcase"></i></span> <span class="ncc_makinhdoanh" name="ncc_makinhdoanh" id="ncc_makinhdoanh"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> <span class="ncc_email" name="ncc_email" id="ncc_email"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><span class="ncc_diachi" name="ncc_diachi" id="ncc_diachi"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <span class="ncc_sodt" name="ncc_sodt" id="ncc_sodt"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i ></i></span><span>  </span></li>
                                        </ul>
                                      </div>
                                      <div class="col-6">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">

                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-credit-card"></i></span> <span class="ncc_tentknh2" name="ncc_tentknh2" id="ncc_tentknh2"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-credit-card"></i></span> <span class="ncc_sotknh2" name="ncc_sotknh2" id="ncc_sotknh2"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-credit-card"></i></span> <span class="ncc_tentknh1" name="ncc_tentknh1" id="ncc_tentknh1"></span></li>
                                          <li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-credit-card"></i></span> <span class="ncc_sotknh1" name="ncc_sotknh1" id="ncc_sotknh1"></span></li>
                                        </ul>
                                      </div>
                                </div>
                            </div>
                              <div class="col-5 text-center">
                                <img src="../../dist/img/user1-128x128.jpg" alt="Logo công ty" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                                 Liên hệ
                              </a>
                            </div>
                          </div>
                </div>
                {{-- <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tên nhà cung cấp</label>
                                <input type="text" class="form-control ncc_ten" name="ncc_ten" id="ncc_ten"
                                    disabled>
                                <input type="text" class="form-control " value="" name="ma_ncc" id="ma_ncc"
                                    hidden>
                                <span class="text-danger font-weight-bold" id="ncc_tenErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control ncc_email" name="ncc_email" id="ncc_email"
                                    disabled>
                                <span class="text-danger font-weight-bold" id="ncc_emailErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" class="form-control ncc_sodt" name="ncc_sodt" id="ncc_sodt"
                                    disabled>
                                <span class="text-danger font-weight-bold" id="ncc_sodtErrorUpdate"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ngày hoạt động</label>
                                <input type="date" class="form-control ncc_ngayhoatdong" name="ncc_ngayhoatdong"
                                    id="ncc_ngayhoatdong">
                                <span class="text-danger font-weight-bold" id="ncc_ngayhoatdongErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Mã kinh doanh</label>
                                <input type="text" class="form-control ncc_makinhdoanh" name="ncc_makinhdoanh"
                                    id="ncc_makinhdoanh" disabled>
                                <span class="text-danger font-weight-bold" id="ncc_makinhdoanhErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Chủ sở hữu</label>
                                <input type="text" class="form-control ncc_chusohuu" name="ncc_chusohuu"
                                    id="ncc_chusohuu" disabled>
                                <span class="text-danger font-weight-bold" id="ncc_chusohuuErrorUpdate"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên tài khoản ngân hàng 1</label>
                                <input type="text" class="form-control ncc_tentknh1" name="ncc_tentknh1"
                                    id="ncc_tentknh1" disabled>
                                <span class="text-danger font-weight-bold" id="ncc_tentknh1ErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số tài khoản ngân hàng 1</label>
                                <input type="text" class="form-control ncc_sotknh1" name="ncc_sotknh1"
                                    id="ncc_sotknh1" disabled>
                                <span class="text-danger font-weight-bold" id="ncc_sotknh1ErrorUpdate"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên tài khoản ngân hàng 2</label>
                                <input type="text" class="form-control ncc_tentknh2" name="ncc_tentknh2"
                                    id="ncc_tentknh2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số tài khoản ngân hàng 2</label>
                                <input type="text" class="form-control ncc_sotknh2" name="ncc_sotknh2"
                                    id="ncc_sotknh2" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea type="text" class="form-control ncc_diachi" name="ncc_diachi" id="ncc_diachi">
                            </textarea>
                        <span class="text-danger font-weight-bold" id="ncc_diachiErrorUpdate"></span>
                    </div>
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal add -->
