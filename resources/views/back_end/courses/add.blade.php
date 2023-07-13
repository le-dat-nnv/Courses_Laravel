@extends('back_end.layout.index')
@section('content')
    @php
        $date_opt = [];
        $option = '';
        foreach ($categories as $pro){
                $option .= '<option value="'.$pro->id.'">'.$pro->name.'</option>';
        }
        $select = '<select class="form-select col-6" name="id_category" aria-label="Default select example">
                    '.$option.'
                    </select>'
    @endphp
    @include('back_end.forms.form' , [
        'action1' => 'Courses',
        'method' => 'post',
        'inputNames' => ['title' , 'description' , 'price' , 'image' , 'id_category' , 'start_date' , 'end_date' , 'schedule_datetime_start' , 'schedule_datetime_end'],
        'TitleNames' => ['title' , 'Mô Tả' , 'price' , 'Image' , 'Danh mục' , 'Ngày bắt đầu' , 'Ngày kết thúc' ,  'Thời gian bắt đầu học' , 'Thời gian kết thúc học'],
        'inputTypes' => ['text' , 'textarea' , 'text' , 'file' , 'select' , 'date' , 'date' , 'time' , 'time'],
        'select' => $select,
        'buttonText' => 'submit courses'
])
@endsection
