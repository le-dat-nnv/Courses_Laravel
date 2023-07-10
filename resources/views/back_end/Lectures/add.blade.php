@extends('back_end.layout.index')
@section('content')
    <h5>Add Lớp</h5>
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
        'inputNames' => ['title' , 'description' , 'duration' , 'is_active'],
        'TitleNames' => ['Title', 'Mô tả' , 'Thời lượng bài giảng' , 'Trạng thái'],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file' ],
        'buttonText' => 'submit course'
])
@endsection
