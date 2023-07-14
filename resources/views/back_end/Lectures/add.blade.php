@extends('back_end.layout.index')
@section('content')
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
        'action' => 'Lectures',
        'method' => 'post',
        'inputNames' => ['name' , 'description' , 'duration' , 'image' , 'specialize'],
        'TitleNames' => ['Name Lecture', 'Mô tả' , 'Thời lượng bài giảng' , 'Image Lecture' , 'Chuyên môn'],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file', 'text' ],
        'buttonText' => 'submit course'
])
@endsection
