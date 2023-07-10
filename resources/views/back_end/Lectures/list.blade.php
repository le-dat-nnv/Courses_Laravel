@extends('back_end.layout.index')
@section('content')
    <h5>List Danh Mục Khóa Học</h5>
    @include('back_end.forms.list' , [
    'nameTitle' => ['id' , 'Thông tin' , 'Mô tả' , 'Thời lượng bài giảng', 'Trạng thái'],
    'list' => ['id' , 'title' , 'description' , 'duration' , 'is_active'],
    'url' => 'ledat',
    'url_delete' => 'ledat'
])
@endsection
