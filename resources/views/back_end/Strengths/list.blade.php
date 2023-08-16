@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
    'nameTitle' => ['Tên Menu' , 'Slug'],
    'list' => ['name' , 'name_short'],
    'title_table' => 'List Danh Mục Menu',
    'url' => 'strengths',
    'delete' => 'strengths'
])
@endsection
