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
                    <span class="mt-3 mb-3">Chọn phương thức thanh toán</span>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Thanh toán khi nhận hàng</button>
                        <button type="submit" class="btn btn-success mx-3">Thanh toán qua VNPay</button>
                    </div>
                </div>
            </div>
            <div class="col-6 card mt-3">
                <div class="card-body">
                    @if (!Auth::check())
                        <span class="mt-3 mb-3">Vui lòng đăng nhập để enroll</span>
                        <form class="mt-3">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
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
