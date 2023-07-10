@extends('back_end.layout.index')
@section('content')
    <h5>Add Rate</h5>
    @include('back_end.forms.form', [
        'action' => 'rate',
        'method' => 'POST',
        'TitleNames' => ['Tên Menu', 'Đường dẫn', 'Parent_id'],
        'inputNames' => ['name', 'slug', 'parent_id'],
        'inputTypes' => ['text', 'text', 'select'],
        'buttonText' => 'Add Banner'
    ])
@endsection
