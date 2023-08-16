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
        $select_status = '<select class="form-control" name="status" id="status">'.$options.'
                            </select>';

        $options1 = '';
        foreach ($menuCat as $menu) {
            $options1 .= '<option value="' . $menu->id . '">' . $menu->name . '</option>';
        }
        $select_menucat = '<select class="form-control" name="id_menuCat" id="status">'.$options1.'
                            </select>'
    @endphp
    @include('back_end.forms.form', [
        'action' => 'menu',
        'method' => 'POST',
        'TitleNames' => ['Tên Menu', 'Đường dẫn' , 'status' , 'Menu Categories'],
        'inputNames' => ['name', 'slug' , 'status' , 'id_menuCat'],
        'inputTypes' => ['text', 'text' , 'select' , 'select'],
        'select' => ['status'=>$select_status , 'id_menuCat'=> $select_menucat],
        'buttonText' => 'Update Menu'
    ])
@endsection
