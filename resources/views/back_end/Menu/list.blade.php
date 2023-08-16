@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên Menu' , 'Slug' , 'Parent_id' ,  'Status'],
    'list' => ['name' , 'slug' , 'parent_id' , 'status'],
    'title_table' => 'List Danh Mục Menu',
    'url' => 'menu',
    'delete' => 'menu'
])
@endsection
