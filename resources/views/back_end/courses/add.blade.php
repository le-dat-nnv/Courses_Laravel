@extends('back_end.layout.index')
@section('content')
    @php
        $date_opt = [];
        $option = '';
        $option_lecture = '';
        foreach ($categories as $pro){
                $option .= '<option value="'.$pro->id.'">'.$pro->name.'</option>';
        }
        $select_cat = '<select class="form-select col-6" name="id_category" aria-label="Default select example">
                    '.$option.'
                    </select>';

        foreach ($lecture as $lec){
                $option_lecture .= '<option value="'.$lec->id.'">'.$lec->name.'</option>';
        }

        $select_lecture = '<select class="form-select col-6" name="id_lecture" aria-label="Default select example">
                                '.$option_lecture.'
                            </select>';
    @endphp
    @include('back_end.forms.form' , [
        'action1' => 'Courses',
        'method' => 'post',
        'inputNames' => ['title' , 'id_lecture' ,  'slug' , 'curriculum' ,  'description' , 'price' , 'image' , 'id_category' , 'start_date' , 'end_date' , 'schedule_datetime_start' , 'schedule_datetime_end'],
        'TitleNames' => ['title' , 'giảng viên', 'Đường dẫn' , 'Chương trình khóa học' , 'Mô Tả' , 'price' , 'Image' , 'Danh mục' , 'Ngày bắt đầu' , 'Ngày kết thúc' ,  'Thời gian bắt đầu học' , 'Thời gian kết thúc học'],
        'inputTypes' => ['text' , 'select','text' , 'textarea' , 'textarea' , 'text' , 'file' , 'select' , 'date' , 'date' , 'time' , 'time'],
        'select' => ['id_lecture' =>$select_lecture, 'id_category' => $select_cat],
        'buttonText' => 'submit courses'
])
@endsection
