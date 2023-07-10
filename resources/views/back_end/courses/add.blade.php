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
        'inputNames' => ['name' , 'description' , 'price' , 'Image' , 'id_category'],
        'TitleNames' => ['name' , 'Mô Tả' , 'price' , 'Image' , 'Danh mục' ],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file' , 'select'],
        'buttonText' => 'submit courses'
])
@endsection
