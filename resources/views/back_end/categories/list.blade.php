@extends('back_end.layout.index')
@section('content')
    <h5>List Danh Mục Khóa Học</h5>
    @include('back_end.forms.list' , [
    'nameTitle' => ['id' , 'name' , 'Đường dẫn' , 'Mô tả' , "Images"],
    'list' => ['id' , 'name' , 'slug' , 'description' , 'image'],
    'url' => 'ledat',
    'url_delete' => 'ledat'
])
@endsection
