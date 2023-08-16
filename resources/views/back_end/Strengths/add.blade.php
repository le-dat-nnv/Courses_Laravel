@extends('back_end.layout.index')
@section('content')
    @php
        $status = [
            1 => 'active',
            2 => 'no active'
        ];
        $options = '';
        foreach ($status as $key => $value) {
            $selected = (isset($category) && $category->id == $key) ? 'selected' : '';
            $options .= '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
        }
    @endphp
    @include('back_end.forms.form', [
        'action' => 'strengths',
        'method' => 'POST',
        'TitleNames' => ['Tên', 'Tiêu đề ngắn', 'Icon Svg' , 'Mô tả'],
        'inputNames' => ['name', 'name_short', 'icon_svg' , 'description'],
        'inputTypes' => ['text', 'text', 'text' , 'textarea'],
        'select_add' => '<label class="mb-2 mt-4" for="status">Status</label>
        <select class="form-control" name="status" id="status">'.$options.'
        </select>',
        'buttonText' => 'Add Strengths',
        'title_add' => 'Thêm Điểm Mạnh'
    ])
@endsection
