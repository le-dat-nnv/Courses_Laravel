@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên' , 'Mô tả' , 'Danh mục' , 'Module'],
    'list' => ['name' , 'summary', 'id_categories' , 'module'],
    'url' => 'Courses',
])
@endsection
