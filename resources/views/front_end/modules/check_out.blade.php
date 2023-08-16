@extends('front_end.layout.index')
@section('content')
    @include('front_end.layout.breadcrumb' , [
        'title_breadcrumb' => 'Cart',
        'breadcrumb' => [' Cart ']
    ])
    <div class="container mt-50 mb-50">
        <div class="alert alert-primary" role="alert">
            Tiến hành thanh toán hóa đơn
        </div>
        <div class="row">
            <div class="card col-6 mt-3">
                <div class="card-body mb-3">
                    <span class="mt-3 mb-5">Giỏ hàng của bạn</span>
                </div>
                <div class="lp-checkout-order__inner mt-3">
                    <table class="table table-bordered table-striped">
                        @php
                            $totalPrice = 0;
                        @endphp
                        @foreach (session('cart') as $key=>$ca)
                            @php
                                $totalPrice += $ca['price'];
                            @endphp
                            <tbody>
                            <tr class="cart-item">
                                <td class="course-thumbnail">
                                    <img style="object-fit: cover" width="150" height="auto"
                                         src="{{ asset('storage/'.$ca['image']) }}"
                                         alt="Educating Through Christ to Learn And to Serve" loading="lazy"
                                         title="Educating Through Christ to Learn And to Serve"></td>
                                <td class="course-name">
                                    <h6 href="">{{ $ca['title'] }}</h6>
                                </td>
                                <td class="course-total col-number">
                                    {{ $ca['price'] . ' VND' }}
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                        <tfoot>
                        <tr class="cart-subtotal">
                            <th colspan="2">Subtotal</th>
                            <td class="col-number">{{ $totalPrice .' VND' }}</td>
                        </tr>
                        <tr class="order-total">
                            <th colspan="2">Total</th>
                            <td class="col-number">{{ $totalPrice .' VND' }}</td>
                        </tr>
                        </tfoot>
                    </table>
                    @if (Auth::check())
                        <span class="mt-3 mb-3">Chọn phương thức thanh toán</span>
                        <div class="mt-3">
                            <button id="tk-nh" type="submit" class="btn btn-primary">Thanh toán khi nhận hàng</button>
                            <button type="submit" class="btn btn-success mx-3">Thanh toán qua VNPay</button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-6 card mt-3">
                <div class="card-body">
{{--                    form lưu thông tin người dùng --}}

                    <form action="{{ route('invoice') }}" method="post" class=" mt-50" id="form_block">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email nhận hàng</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                @if($errors->has('email'))
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                @if($errors->has('phone'))
                                    <p class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="load-ward">Chọn xã</label>
                                <select aria-label="Default Ward" class="form-select @error('ward') is-invalid @enderror" name="ward" id="load-ward">
                                    <option selected>Chọn xã</option>
                                </select>
                                @if($errors->has('ward'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('ward') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <select aria-label="Default District" class="mb-3 form-select" name="district" id="load-district">
                                <option selected>Chọn Huyện</option>
                            </select>
                            <select aria-label="Default City" class="mb-3 form-select" name="city" id="load-city">
                                <option selected>Chọn Tỉnh/Thành Phố</option>
                            </select>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Notes</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if (!Auth::check())
                        <span class="mt-3 mb-3">Vui lòng đăng nhập để enroll</span>
                        <form class="mt-3" action="{{ route('add-cart-check-out') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                       aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">Đăng ký</button>
                            <button type="submit" class="btn btn-primary">Quên mật khấu</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function() {

        function loadCities() {
            $.ajax({
                url: "{{ route('get-city') }}",
                type: 'GET',
                dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    var citySelect = $('#load-city');
                    citySelect.empty(); // Xóa nội dung cũ

                    // Lặp qua dữ liệu và hiển thị thành phố
                    $.each(response, function (index, item) {
                        citySelect.append('<option value="' + item.code + '">' + item.name_city + '</option>');
                    });

                    // Sự kiện khi thành phố thay đổi
                    citySelect.change(function () {
                        var selectedCityId = $(this).val();
                        loadDistrictsByCity(selectedCityId);
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function loadDistrictsByCity(cityId) {
            $.ajax({
                url: "http://127.0.0.1:8000/api/get-districts/" + cityId,
                type: 'GET',
                dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    var districtSelect = $('#load-district');
                    districtSelect.empty(); // Xóa nội dung cũ

                    // Lặp qua dữ liệu và hiển thị huyện
                    $.each(response, function (index, item) {
                        districtSelect.append('<option value="' + item.code + '">' + item.name_district + '</option>');
                    });

                    // Sự kiện khi huyện thay đổi
                    districtSelect.change(function () {
                        var selectedDistrictId = $(this).val();
                        loadWardsByDistrict(selectedDistrictId);
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function loadWardsByDistrict(districtId) {
            $.ajax({
                url: "http://127.0.0.1:8000/api/get-ward/" + districtId,
                type: 'GET',
                dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    var wardSelect = $('#load-ward');
                    wardSelect.empty(); // Xóa nội dung cũ

                    // Lặp qua dữ liệu và hiển thị xã
                    $.each(response, function (index, item) {
                        wardSelect.append('<option value="' + item.id + '">' + item.name_ward + '</option>');
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        // Gọi hàm loadCities ngay sau khi tài liệu HTML đã tải xong
        loadCities();
    });
</script>
@endsection
