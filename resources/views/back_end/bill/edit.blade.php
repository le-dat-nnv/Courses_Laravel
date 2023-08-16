@extends('back_end.layout.index')
@section('content')
    <div class="card mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Xem chi tiết
            </h6>
        </div>
        <div class="card-body">
            <form ref="btn_form_submit" id="form_submit" action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input id="id" type="hidden" name="id_s" value="{{ isset($data) ? $data->id : '' }}"  >
                <div class="row pr-3 pl-3">
                    <label class='mb-2 mt-4'>Tên người mua</label>
                    <input id="formFile" type="text" class="form-control" disabled value="{{ $data->name }}">
                </div>
                <div class="row pr-3 pl-3">
                    <label class='mb-2 mt-4'>Số tiền mua</label>
                    <input id="formFile" type="text" class="form-control" disabled value="{{ $data->total_price }}">
                </div>
                <div class="row pr-3 pl-3">
                    <label class='mb-2 mt-4'>Các khóa học đã mua</label>
                    <input id="formFile" type="text" class="form-control" disabled value="{{ $hk }}">
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-danger mt-4 mb-3" type="submit">Quay trở về</a>
            </form>
        </div>
    </div>

@endsection
