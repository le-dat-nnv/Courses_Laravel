@extends('back_end.layout.index')
@section('content')
    @include('back_end.forms.list' , [
        'nameTitle' => ['Tên' , 'Location' , 'Email' , 'Telephone'],
        'list' => ['name' , 'location' , 'email' , 'telephone'],
        'url' => 'about',
    ])
@endsection
