<div class="modal fade" id="ModelThemdiadiem" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm danh mục địa điểm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" data-url="{{ URL('admin/quan-ly-tour/them-dia-diem') }}" method="POST" id="form-addDiadiem" role="form">
        <div class="modal-body">
          
          @csrf 
          <input type="text" name="txtTendiadiem" id="txtTendiadiem" class="form-control" value=""/>
            <p id="result"></p>  
          
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Lưu</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
        </form>
      </div>
    </div>
  </div>