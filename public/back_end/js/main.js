$(document).ready(function() {
    $('.nav-link').click(function() {
        var collapse = $(this).data('target');
        var index = $(this).index('.nav-link');

        // Lấy trạng thái collapse hiện tại
        var isCollapsed = $(collapse).hasClass('show');

        // Đảo ngược trạng thái collapse của phần tử
        if (isCollapsed) {
            $(collapse).collapse('hide');
            // Lưu trạng thái collapse vào localStorage
            localStorage.setItem('collapseState_' + index, 'hidden');
        } else {
            $(collapse).collapse('show');
            // Lưu trạng thái collapse vào localStorage
            localStorage.setItem('collapseState_' + index, 'shown');
        }
    });

    // Khôi phục trạng thái collapse sau khi trang được tải lại
    $('.nav-link').each(function(index) {
        var collapse = $(this).data('target');
        var collapseState = localStorage.getItem('collapseState_' + index);

        if (collapseState === 'hidden') {
            $(collapse).removeClass('show');
        } else if (collapseState === 'shown') {
            $(collapse).addClass('show');
        }
    });
});

var newRowAdded = [];

function suaClassCourses(e) {
    event.preventDefault();
    var $tr = $(e).closest('tr');
    var id = $tr.attr('id');

    if(!newRowAdded[id]) {
        // Tạo một phần tử tr mới chứa đoạn văn bản
        $('#formFake' + id).remove();
        $('#myForm' + id).show();
        $(e).text("Ẩn");
        newRowAdded[id] = true;
    }
    else {
        var faker = $('<tr id="formFake'+id+'" style="display: none"></tr>');

        $tr.after(faker);
        $('#myForm' + id).hide();
        $(e).text("Sửa");
        newRowAdded[id] = false;
    }
}

/*
*$.ajax({
    url: 'https://provinces.open-api.vn/api/p/',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        // Xử lý dữ liệu JSON ở đây
        var jsonData = response;
        // Gọi AJAX request tiếp theo sử dụng dữ liệu JSON
        $.ajax({
            url: '/api/fetch-provinces',
            type: 'GET',
            dataType: 'json',
            data: { jsonData: jsonData },
            success: function(jsonData) {

            },
            error: function(xhr, status, error) {
                // Xử lý lỗi tại đây (nếu có)
                console.log(error);
            }
        });
    },
    error: function(xhr, status, error) {
        // Xử lý lỗi tại đây (nếu có)
        console.log(error);
    }
});

$.ajax({
    url: 'https://provinces.open-api.vn/api/d/',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        var jsonData = response;
        console.log(jsonData);
        $.ajax({
            url: '/api/fetch-districts',
            type: 'POST',
            dataType: 'json',
            data: { jsonData: jsonData },
            success: function(jsonData) {
                console.log(jsonData);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    },
    error: function(xhr, status, error) {
        console.log(error);
    }
});

$.ajax({
    url: 'https://provinces.open-api.vn/api/w/',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        var jsonData = response;
        var batchSize = 98; // Số lượng bảng dữ liệu trong mỗi lần gửi
        var dataLength = jsonData.length;

        function sendData(startIndex) {
            var endIndex = Math.min(startIndex + batchSize, dataLength);
            var batchData = jsonData.slice(startIndex, endIndex);
            var isAlertShown = false; // Cờ kiểm tra xem alert đã hiển thị hay chưa
            // console.log(batchData);
            // alert(dataLength);
            isAlertShown = true; // Đánh dấu là alert đã hiển thị

            $.ajax({
                url: '/api/fetch-wards',
                type: 'POST',
                dataType: 'json',
                data: {jsonData: batchData},
                success: function (jsonData) {
                    console.log(jsonData);

                    if (!isAlertShown && endIndex < dataLength) {
                        // Gửi tiếp nếu còn dữ liệu và alert chưa hiển thị
                        sendData(endIndex);
                    } else {
                        // Hoàn thành quá trình gửi dữ liệu
                        console.log('Hoàn thành gửi dữ liệu.');
                    }
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        }

// Bắt đầu gửi dữ liệu từ startIndex = 0
        sendData(10500);
    },
        error: function(xhr, status, error) {
        console.log(error);
    }
});

* */
