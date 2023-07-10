@extends('back_end.layout.index')
@section('content')
    <h5>List Khuyến mãi</h5>
    <div class="" style="overflow: auto">
        @include('back_end.forms.list' , [
            'nameTitle' => ['id' , 'name' , 'description' , 'duration' , 'Trạng thái' , 'Bắt đầu' , 'Kết thúc' , 'Giảm (%)' , 'Giá tối thiểu' , 'Giá tối đa'],
            'list' => ['id' , 'promotion_name' , 'description' , 'duration' , 'is_active' , 'start_date' , 'end_date' , 'discount_percentage' , 'minimum_purchase_amount' , 'maximum_purchase_amount'],
            'url' => 'ledat',
            'url_delete' => 'ledat'
        ])
    </div>

@endsection
