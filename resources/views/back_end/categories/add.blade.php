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
        'action1' => 'Categories',
        'method' => 'post',
        'inputNames' => ['name' , 'description' , 'slug' , 'Image'],
        'TitleNames' => ['name' , 'Mô Tả' , 'Đường dẫn' , 'Image'],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file'],
        'buttonText' => 'submit categories'
])
@endsection
