@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
    'nameTitle' => ['id' , 'name' , 'Đường dẫn' , "Images"],
    'list' => ['id' , 'name' , 'slug'  , 'image'],
    'url' => 'Categories',
    'delete' => 'Categories'
])
@endsection
