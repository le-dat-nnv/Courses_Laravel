@extends('back_end.layout.index')
@section('content')
    <h5>Add Course</h5>
{{--        @php--}}
{{--            $checkCat = [];--}}
{{--            foreach($product as $pr) {--}}
{{--                $dataCat[] =  $pr->getCat()->id;--}}
{{--                if(!in_array($pr->getCat()->id , $checkCat)) {--}}
{{--                    $checkCat[] = $pr->getCat()->id;--}}
{{--                }--}}
{{--            }--}}
{{--            dd($checkCat);--}}
{{--        @endphp--}}
    @include('back_end.forms.form' , [
        'action' => 'ledat',
        'method' => 'post',
        'inputNames' => ['promotion_name' , 'start_date' , 'end_date' , 'description' , 'discount_percentage' , 'minimum_purchase_amount' , 'maximum_purchase_amount'],
        'TitleNames' => ['Name' , 'Thời gian bắt đầu' , 'Thời gian kết thúc' , 'Mô tả' , 'Phần trăm khuyến mãi' , 'Giá tối thiếu' , 'Giá tối đa' ],
        'inputTypes' => ['text' , 'date' , 'date' , 'textarea' , 'text' ,'text' ,'text'],
        'buttonText' => 'submit courses'
])
@endsection
