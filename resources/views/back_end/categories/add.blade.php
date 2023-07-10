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
        'inputNames' => ['name' , 'description' , 'Đường dẫn' , 'Image'],
        'TitleNames' => ['name' , 'Mô Tả' , 'slug' , 'Image'],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file'],
        'buttonText' => 'submit categories'
])
@endsection
