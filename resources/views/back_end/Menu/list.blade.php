@extends('back_end.layout.index')
@section('content')
    <h5>List Danh Mục Menu</h5>
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên Menu' , 'Slug' , 'Parent_id' ,  'Status'],
    'list' => ['name' , 'slug' , 'parent_id' , 'status'],
    'url' => 'menu'
])
@endsection
