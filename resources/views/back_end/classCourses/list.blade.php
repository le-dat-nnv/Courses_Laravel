@extends('back_end.layout.index')
@section('content')
    <h5>List Danh Mục Khóa Học</h5>
    @include('back_end.forms.list' , [
    'nameTitle' => ['Mã Lớp' , 'Sức Chứa'],
    'list' => ['id_class' , 'capacity'],
    'url' => 'classCourses'
])
@endsection
