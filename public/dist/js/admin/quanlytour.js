$(document).ready(function(){

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
}
),


$(document).ready(function(){

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
    }
)