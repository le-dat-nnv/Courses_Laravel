$(document).ready(function() {
    $('#image').change(function(){
        var file = $(this)[0].files[0];
        var reader = new FileReader();
        var width = $('#image-preview').data('width');
        var height = $('#image-preview').data('height');
        reader.onload = function(e) {
            $('#image-preview').html('<img width="'+ width +'" height="'+height+'" src="' + e.target.result + '">');
        }
        reader.readAsDataURL(file);
    });
});

$(document).ready(function() {
    $('#price').on('change', function() {
        // Lấy giá trị của trường input
        var price = $('#price').val();

        // Gửi yêu cầu AJAX đến URL xử lý lọc sản phẩm
        $.ajax({
            url: 'http://127.0.0.1:8000/api/admin/products/filter-by-price/'+ price,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var tbody = $('#product-list-body');
                tbody.empty(); // Xóa nội dung cũ của tbody
                var list = ['name' , 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category'];
                const url_pattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
                $.each(data.data, function(index, product) {
                    var row = '<tr>' +
                    '<td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="' + product.id + '" ref="' + product.id + '"></td>' +
                    '<td>' + (index + 1) + '</td>';

                    $.each(list, function(i, title) {
                        if (title === 'image') {
                            var image_url = product.image;
        // Kiểm tra xem image_url có phải là một URL hợp lệ hay không
                            if (!url_pattern.test(image_url)) {
            // Nếu giá trị không phải là một URL hợp lệ, xây dựng đường dẫn đầy đủ từ căn bản của URL của trang web và giá trị của trường image
                                image_url = 'http://127.0.0.1:8000/' + image_url;
                            }
                            row += '<td><img width="200px" height="200px" src="' + image_url + '" alt="Your Image"></td>';
                        } else {
                            row += '<td>' + product[title] + '</td>';
                        }
                    });

                    row += '<td><a href="' + product.edit_url + '" class="btn btn-danger">Sửa</a></td>' +
                    '<td><form action="' + product.delete_url + '" method="POST">' +
                    '<input type="hidden" name="_method" value="DELETE">' +
                    '<button type="submit" class="btn btn-primary">Xóa</button>' +
                    '</form></td>' +
                    '</tr>';

                    tbody.append(row); // Thêm dòng mới vào tbody
                });
            }
        });
    });
});


$(document).ready(function() {
    $('#id_category').on('change', function() {
        // Lấy giá trị của trường input
        var id_category = $('#id_category').val();
        // Gửi yêu cầu AJAX đến URL xử lý lọc sản phẩm
        $.ajax({
            url: 'http://127.0.0.1:8000/api/admin/products/filter-by-cate/'+ id_category,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var tbody = $('#product-list-body');
                tbody.empty(); // Xóa nội dung cũ của tbody
                var list = ['name' , 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category'];
                const url_pattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
                $.each(data.data, function(index, product) {
                    var row = '<tr>' +
                    '<td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="' + product.id + '" ref="' + product.id + '"></td>' +
                    '<td>' + (index + 1) + '</td>';

                    $.each(list, function(i, title) {
                        if (title === 'image') {
                            var image_url = product.image;
        // Kiểm tra xem image_url có phải là một URL hợp lệ hay không
                            if (!url_pattern.test(image_url)) {
            // Nếu giá trị không phải là một URL hợp lệ, xây dựng đường dẫn đầy đủ từ căn bản của URL của trang web và giá trị của trường image
                                image_url = 'http://127.0.0.1:8000/' + image_url;
                            }
                            row += '<td><img width="200px" height="200px" src="' + image_url + '" alt="Your Image"></td>';
                        } else {
                            row += '<td>' + product[title] + '</td>';
                        }
                    });

                    row += '<td><a href="' + product.edit_url + '" class="btn btn-danger">Sửa</a></td>' +
                    '<td><form action="' + product.delete_url + '" method="POST">' +
                    '<input type="hidden" name="_method" value="DELETE">' +
                    '<button type="submit" class="btn btn-primary">Xóa</button>' +
                    '</form></td>' +
                    '</tr>';

                    tbody.append(row); // Thêm dòng mới vào tbody
                });
            }
        });
    });
});


$(document).ready(function() {
    $('#status').on('change', function() {
        // Lấy giá trị của trường input
        var status = $('#status').val();
        // Gửi yêu cầu AJAX đến URL xử lý lọc sản phẩm
        $.ajax({
            url: 'http://127.0.0.1:8000/api/admin/products/filter-by-status/'+ status,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var tbody = $('#product-list-body');
                tbody.empty(); // Xóa nội dung cũ của tbody
                var list = ['name' , 'price' , 'image' , 'title' , 'material' , 'color' , 'status' , 'id_category'];
                const url_pattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
                $.each(data.data, function(index, product) {
                    var row = '<tr>' +
                    '<td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="' + product.id + '" ref="' + product.id + '"></td>' +
                    '<td>' + (index + 1) + '</td>';

                    $.each(list, function(i, title) {
                        if (title === 'image') {
                            var image_url = product.image;
        // Kiểm tra xem image_url có phải là một URL hợp lệ hay không
                            if (!url_pattern.test(image_url)) {
            // Nếu giá trị không phải là một URL hợp lệ, xây dựng đường dẫn đầy đủ từ căn bản của URL của trang web và giá trị của trường image
                                image_url = 'http://127.0.0.1:8000/' + image_url;
                            }
                            row += '<td><img width="200px" height="200px" src="' + image_url + '" alt="Your Image"></td>';
                        } else {
                            row += '<td>' + product[title] + '</td>';
                        }
                    });

                    row += '<td><a href="' + product.edit_url + '" class="btn btn-danger">Sửa</a></td>' +
                    '<td><form action="' + product.delete_url + '" method="POST">' +
                    '<input type="hidden" name="_method" value="DELETE">' +
                    '<button type="submit" class="btn btn-primary">Xóa</button>' +
                    '</form></td>' +
                    '</tr>';

                    tbody.append(row); // Thêm dòng mới vào tbody
                });
            }
        });
    });
});