$(document).ready(function(){

   CKEDITOR.replace('mota',{
    filebrowserUploadUrl: "{{URL('admin/ckeditor/image_upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
   });

    // add-diadiem
    $('#form-addDiadiem').submit(function(e){
        var validate = true;
        e.preventDefault();
        var url = $(this).attr('data-url');
        var tenDiadiem = $('#txtTendiadiem').val();
        $('.dynamic-input-error').remove();

        if(tenDiadiem == ''){
            $('#result').append("<div class='dynamic-input-error' style='color:blue'>Vui lòng nhập địa điểm</div>");
        return validate = false;
        }

        if(validate == true){
            
            $.ajax({
                
                type: 'post',
                url: url,
                data: {
                    tendiadiem: $('#txtTendiadiem').val()
                },
                success: function(response){
                   if(response['status'] == 'error'){
                    $('#result').append("<div class='dynamic-input-error' style='color:yellow'>Địa điểm đã tồn tại</div>");
                   }else{
                    
                    toastr.success('Thêm thành công', 'successfully');
                    setTimeout(function () { document.location.reload(true); }, 700);
                   }
                }
            })
            
        }
            
    },


    )
},

    // add-diadiem
    $('.btn-delete-dmdiadiem').click(function(e){
        var url = $(this).attr('data-url');
        
        Swal.fire({
            title: 'Bạn chắc chắn xóa',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({   
                        type: 'delete',
                        url: url,
                        success: function(response){
                            if(response['status']){
                                
                                setTimeout(function () { document.location.reload(true); }, 400);
                                toastr.success('Xóa thành công', 'successfully');
                            }else{
                                toastr.error('Xóa thất bại', 'Error');
                            }
                        }
                    })
            }
          })

        // --ajax
        // $.ajax({   
        //     type: 'delete',
        //     url: url,
        //     success: function(response){
        //         if(response['status']){
        //             toastr.success('Thêm thành công', 'successfully');
        //             setTimeout(function () { document.location.reload(true); }, 700);
        //         }
        //     }
        // })
        // end ajax


        })
,


    // thêm tour-------------------------------------
    $('.btn-addTour').click(function(e){
        var valid = true;
        e.preventDefault();
        $('.dynamic-input-error').remove();
        var url = $(this).attr('data-url');
        var test_value = $("#anhTour").val();
        var extension = test_value.split('.').pop().toLowerCase();
        let frmData = new FormData($('#frm_addtour')[0]);

        tentour = $('#txtTentour').val();
        dmdiadiem = $('#selectDiadiem').val();
        txtNgaydi = $('#txtNgaydi').val();
        txtNgayve = $('#txtNgayve').val();
        txtSoluongngay = $('#txtSoluongngay').val();
        slnguoilon = $('#slnguoilon').val();
        sltreem = $('#sltreem').val();
        mota = $("textarea[name=mota]").val(CKEDITOR.instances.mota.getData());
        anhTour = $('#anhTour').val();


        if(tentour == ''){
            $('#valid_tentour').append("<div class='dynamic-input-error' style='color:yellow'>Tên tour không được rỗng</div>");
            return valid = false;
        }

        if(dmdiadiem == ''){
            $('#valid_dmdiadiem').append("<div class='dynamic-input-error' style='color:yellow'>Vui lòng chọn địa điểm</div>");
            return valid = false;
        }

        if(txtNgaydi == ''){
            $('#valid_ngaydi').append("<div class='dynamic-input-error' style='color:yellow'>Vui lòng chọn ngày đi</div>");
            return valid = false;
        }

        if(txtNgayve == ''){
            $('#valid_ngayve').append("<div class='dynamic-input-error' style='color:yellow'>Vui lòng chọn ngày về</div>");
            return valid = false;
        }

        if(txtNgaydi != '' && txtNgayve !='' && txtNgayve < txtNgaydi){
            $('#valid_ngayve').append("<div class='dynamic-input-error' style='color:yellow'>Ngày về phải lớn hoặc bằng ngày đi</div>");
            return valid = false;
        }

        if(txtSoluongngay == ''){
            $('#valid_slngay').append("<div class='dynamic-input-error' style='color:yellow'>Vui lòng đặt số lượng ngày</div>");
            return valid = false;
        }

        if(slnguoilon == '' || slnguoilon <= 0){
            $('#validnguoilon').append("<div class='dynamic-input-error' style='color:yellow'>Số lượng không hợp lệ</div>");
            return valid = false;
        }

        if(sltreem == '' || sltreem < 0){
            $('#sltreem').append("<div class='dynamic-input-error' style='color:yellow'>Số lượng không hợp lệ</div>");
            return valid = false;
        }

        if(anhTour == ''){
            $('#valid_avatatour').append("<div class='dynamic-input-error' style='color:yellow'>Vui lòng đặt ảnh đại diện</div>");
            return valid = false;
        }

        // check dinh dang file anh
        
        if ($.inArray(extension, ['png', 'gif', 'jpeg', 'jpg']) == -1) {
            $('#valid_avatatour').append("<div class='dynamic-input-error' style='color:yellow'>File ảnh không hợp lệ</div>");
            return valid = false;
        }

        if(valid){
          $.ajax({
            type: 'POST',
            url: url,
            data: frmData,
            contentType: false,
            processData: false,
            success: function(response){
                if(response['status']){
                    toastr.success('Thêm tour thành công', 'successfully');
                    $('#frm_addtour')[0].reset();
                }
            }
        })
        }

        
    }),


    



    // check so luong nguoi dat tour --------------------

)




function soluongnguoi(){
    slnguoilon = $('#slnguoilon').val();
    sltreem = $('#sltreem').val();
    $('.dynamic-input-error').remove();
    if(slnguoilon<=0){
        $('#validnguoilon').append("<div class='dynamic-input-error' style='color:yellow'>Số lượng người lớn phải lớn hơn 0</div>");
    }

    if(sltreem < 0){
        $('#validtreem').append("<div class='dynamic-input-error' style='color:yellow'>Số lượng trẻ em không hợp lệ</div>");
    }

}

function tourHienthi(id){
    var Valhienthi = $('#hienthi_'+id).val();
    $.ajax({
        url: './cap-nhat-tour/changeHienthiTour',
        data: {
            Valhienthi: Valhienthi,
            xx: id
        },
        success: function(response){
            if(response['status'] == false){
                toastr.error('Không thể cập nhật', 'Lỗi');
            }
        }
    })
}

function DatlichTour(id){
    $('#modal_datlichtour').modal('show');
}

