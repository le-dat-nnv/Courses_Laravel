@extends('back_end.layout.index')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                List Bill
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <td><input style="position: relative;margin-left: 0px;" class="form-check-input mx-0" id="all" v-model="isChecked" @change="checkAll" type="checkbox"></td>
                        <td>#</td>
                        <td>Người mua khóa học</td>
                        <td>Tổng tiền</td>
                        <td>Email</td>
                        <td>Tên khóa học</td>
                        <td>Trạng thái</td>
                        <td>Detail</td>
                    </tr>
                    </thead>
                    <tbody id="product-list-body">
                    @foreach ($data as $index => $product)
                        <tr>
                            <td><input style="position: relative;margin-left: 0px;" class="form-check-input" type="checkbox" value="" id="{{ $product->id }}" ref="{{ $product->id }}" ></td>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->total_price.'VND' }}</td>
                            <td>{{ $product->email }}</td>
                            <td>{{ $product->getNames() }}</td>
                            @if($product->status)
                                <td>Đang chờ</td>
                            @else
                                <td>Đã thanh toán</td>
                            @endif
                            <td><a href="{{ route('bill.edit' , ['bill'=>$product->id]) }}" class="btn btn-danger">Xem chi tiết</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        {{ $data->links() }}
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection
