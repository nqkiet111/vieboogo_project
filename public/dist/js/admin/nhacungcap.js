// custom.js
$(document).on("submit", "#add_new_ncc", function(event) {
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
        success: function(data) {
            location.reload();
            $("#add_ncc").modal("hide");
        },
        error: function(data) {
            // Xóa class d-none của tất cả các lỗi
            $("#add_new_ncc .text-danger").addClass("d-none");

            var errors = data.responseJSON;
            if (!$.isEmptyObject(errors)) {
                $.each(errors.errors, function(key, value) {
                    var errorID = "#" + key + "Error";
                    $(errorID).removeClass("d-none");
                    $(errorID).text(value);
                });
            }
        },
    });
});
