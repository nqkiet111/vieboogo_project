// thêm nhà cung cấp
$(document).on("submit", "#add_new_ncc", function (event) {
    event.preventDefault();

    // Lấy thông tin form
    var formData = new FormData(this);
    formData.append("_token", csrfToken);

    // Gửi AJAX request
    $.ajax({
        type: "POST",
        url: saveNccRoute,
        data: formData,
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            location.reload();
            $("#add_ncc").modal("hide");
        },
        error: function (data) {
            // Xóa class d-none của tất cả các lỗi
            $("#add_new_ncc .text-danger").addClass("d-none");

            var errors = data.responseJSON;
            if (!$.isEmptyObject(errors)) {
                $.each(errors.errors, function (key, value) {
                    var errorID = "#" + key + "Error";
                    $(errorID).removeClass("d-none");
                    $(errorID).text(value);
                });
            }
        },
    });
});

// Sửa nhà cung cấp
$("#update_ncc").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var ma_ncc = button.data("ma_ncc");
    var ncc_ten = button.data("ncc_ten");
    var ncc_diachi = button.data("ncc_diachi");
    var ncc_email = button.data("ncc_email");
    var ncc_sodt = button.data("ncc_sodt");
    var ncc_ngayhoatdong = button.data("ncc_ngayhoatdong");
    var ncc_makinhdoanh = button.data("ncc_makinhdoanh");
    var ncc_chusohuu = button.data("ncc_chusohuu");
    var ncc_tentknh1 = button.data("ncc_tentknh1");
    var ncc_sotknh1 = button.data("ncc_sotknh1");
    var ncc_tentknh2 = button.data("ncc_tentknh2");
    var ncc_sotknh2 = button.data("ncc_sotknh2");
    var modal = $(this);
    modal.find(".modal-body #ma_ncc").val(ma_ncc);
    modal.find(".modal-body #ncc_ten").val(ncc_ten);
    modal.find(".modal-body #ncc_diachi").val(ncc_diachi);
    modal.find(".modal-body #ncc_email").val(ncc_email);
    modal.find(".modal-body #ncc_sodt").val(ncc_sodt);
    modal.find(".modal-body #ncc_ngayhoatdong").val(ncc_ngayhoatdong);
    modal.find(".modal-body #ncc_makinhdoanh").val(ncc_makinhdoanh);
    modal.find(".modal-body #ncc_chusohuu").val(ncc_chusohuu);
    modal.find(".modal-body #ncc_tentknh1").val(ncc_tentknh1);
    modal.find(".modal-body #ncc_sotknh1").val(ncc_sotknh1);
    modal.find(".modal-body #ncc_tentknh2").val(ncc_tentknh2);
    modal.find(".modal-body #ncc_sotknh2").val(ncc_sotknh2);

    $("#edit_ncc").on("submit", function (event) {
        event.preventDefault();
        // Lấy thông tin form
        var formData = new FormData(this);
        formData.append("_token", csrfToken);
        $.ajax({
            type: "POST",
            url: updateNccRoute,
            data: formData,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                location.reload();
                $("#update_ncc").modal("hide");
            },
            error: function (data) {
                // Xóa class d-none của tất cả các lỗi
                $("#update_ncc .text-danger").addClass("d-none");

                var errors = data.responseJSON;
                if (!$.isEmptyObject(errors)) {
                    $.each(errors.errors, function (key, value) {
                        var errorID = "#" + key + "Error";
                        $(errorID).removeClass("d-none");
                        $(errorID).text(value);
                    });
                }
            },
        });
    });
});

// Chi tiết nhà cung cấp
$("#detail_ncc").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var ma_ncc = button.data("ma_ncc");
    var ncc_ten = button.data("ncc_ten");
    var ncc_diachi = button.data("ncc_diachi");
    var ncc_email = button.data("ncc_email");
    var ncc_sodt = button.data("ncc_sodt");
    var ncc_ngayhoatdong = button.data("ncc_ngayhoatdong");
    var ncc_makinhdoanh = button.data("ncc_makinhdoanh");
    var ncc_chusohuu = button.data("ncc_chusohuu");
    var ncc_tentknh1 = button.data("ncc_tentknh1");
    var ncc_sotknh1 = button.data("ncc_sotknh1");
    var ncc_tentknh2 = button.data("ncc_tentknh2");
    var ncc_sotknh2 = button.data("ncc_sotknh2");
    var modal = $(this);
    modal.find(".modal-body #ma_ncc").text("Mã số: " + ma_ncc);
    modal.find(".modal-body #ncc_ten").text("Công ty: " + ncc_ten);
    modal.find(".modal-body #ncc_diachi").text("Địa chỉ: " + ncc_diachi);
    modal.find(".modal-body #ncc_email").text("Email: " + ncc_email);
    modal.find(".modal-body #ncc_sodt").text("Số điện thoại: " + ncc_sodt);
    modal
        .find(".modal-body #ncc_ngayhoatdong")
        .text("Ngày hoạt động: " + ncc_ngayhoatdong);
    modal
        .find(".modal-body #ncc_makinhdoanh")
        .text("Mã kinh doanh: " + ncc_makinhdoanh);
    modal.find(".modal-body #ncc_chusohuu").text("Đại diện: " + ncc_chusohuu);
    modal
        .find(".modal-body #ncc_tentknh1")
        .text("Tên tài khoản 1: " + ncc_tentknh1);
    modal
        .find(".modal-body #ncc_sotknh1")
        .text("Số tài khoản 1: " + ncc_sotknh1);
    modal
        .find(".modal-body #ncc_tentknh2")
        .text("Tên tài khoản 2: " + ncc_tentknh2);
    modal
        .find(".modal-body #ncc_sotknh2")
        .text("Số tài khoản 2: " + ncc_sotknh2);
});

//confirm xóa
function deleteConfirmation(maNCC) {
    Swal.fire({
        title: "Xác nhận xóa?",
        text: "Bạn chắc chắn muốn xóa nhà cung cấp này?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Hủy",
    }).then((result) => {
        if (result.isConfirmed) {
            // Chuyển hướng đến route xóa
            window.location.href =
                "/admin/nhacungcap/delete/" + maNCC.replace(/\//g, "-");
        }
    });
}

//search nhà cung cấp
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });




