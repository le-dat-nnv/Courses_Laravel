@extends('back_end.layout.index')
@section('content')
    <h5>List Danh Mục Khóa Học</h5>
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên Lecture' , 'ảnh giảng viên' , 'Thời lượng bài giảng', 'Trạng thái'],
    'list' => ['name' , 'image' , 'duration' , 'is_active'],
    'url' => 'Lectures',
    'url_delete' => 'Lectures'
])
@endsection
