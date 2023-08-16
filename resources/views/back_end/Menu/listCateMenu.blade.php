@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên Menu' ,  'status' ],
    'list' => ['name', 'status'],
    'title_table' => 'List Danh Mục Menu',
    'url' => 'categoriesMenu',
    'delete' => 'categoriesMenu'
])
@endsection
