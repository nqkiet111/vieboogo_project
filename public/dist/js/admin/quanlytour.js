$(document).ready(function(){

    // add-diadiem
    $('#form-addDiadiem').submit(function(e){
        var validate = true;
        e.preventDefault();
        var url = $(this).attr('data-url');
        var tenDiadiem = $('#txtTendiadiem').val();
        $('.dynamic-input-error').remove();


        var formData = new FormData(this);
        formData.append("_token", csrfToken);

        if(tenDiadiem == ''){
            $('#result').append("<div class='dynamic-input-error' style='color:blue'>Vui lòng nhập địa điểm</div>");
        return validate = false;
        }

        if(validate == true){
            
            $.ajax({
                
                type: 'post',
                url: url,
                data: formData,
                success: function(response){
                   if(response['data'] == 'error'){
                    $('#result').append("<div class='dynamic-input-error' style='color:yellow'>Địa điểm đã tồn tại</div>");
                   }else{
                    $('#txtTendiadiem').val('');
                    $('#result').append("<div class='dynamic-input-error' style='color:#fff'>Thêm thành công</div>");
                   }
                }
            })
            
        }
            
    },


    )
}
)



