@extends('back_end.layout.index')
@section('content')
    <h5>Add Lớp</h5>
{{--        @php--}}
{{--            $checkCat = [];--}}
{{--            foreach($product as $pr) {--}}
{{--                $dataCat[] =  $pr->getCat()->id;--}}
{{--                if(!in_array($pr->getCat()->id , $checkCat)) {--}}
{{--                    $checkCat[] = $pr->getCat()->id;--}}
{{--                }--}}
{{--            }--}}
{{--            dd($checkCat);--}}
{{--        @endphp--}}
    @php

        $data_class = [];
        $html = '<tbody>';
        $select_subject = '<select class="form-select" aria-label="Default select example" Disabled>';
        foreach ($pro as $key=>$proFile) {
            $select_subject.='<option value="'.$proFile->getCourses()->id.'">'.$proFile->getCourses()->title.'</option>';
        }
        $select_subject .= '</select>';
        foreach ($pro as $key=>$pros) {
            $date_start = \Carbon\Carbon::parse($pros->getCourses()->schedule_datetime_start)->format('H:i');
            $date_end = \Carbon\Carbon::parse($pros->getCourses()->schedule_datetime_end)->format('H:i');
            $data_class['id'] = $pros->id_class;
            $html .= '<tr id="'.$pros->id_class.'">
                            <td>'.$pros->getCourses()->start_date.'</td>
                            <td>'.$date_start.' - '.$date_end.'</td>
                            <td>Toán cao cấp</td>
                            <td>Nguyễn Văn A</td>
                            <td>A101</td>
                            <td><button onclick="suaClassCourses(this)" class="btn btn-danger">Sửa</button></td>
                            <td><button class="btn btn-primary">Xóa</button></td>
                        </tr>
                        <tr id="formFake'.$pros->id_class.'" style="display: none;"></tr>
                        <tr id="myForm'.$pros->id_class.'" style="display: none;">
                            <td colspan="7" >
                                <form>
                                  <div class="form-group">
                                    <label class="text-uppercase">update form data</label>
                                  </div>
                                  <div class="form_group mt-3 row d-flex align-items-center">
                                    <label class="col-sm-1">Thời gian : </label>
                                    <div class="col-4"><p class="mb-0">'.$date_start.' - '.$date_end.'</p></div>
                                  </div>
                                  <div class="form_group mt-3 row d-flex align-items-center">
                                    <label class="col-sm-1">Môn Học : </label>
                                    <div class="col-4"><p class="mb-0">'.$pros->getCourses()->title.'</p></div>
                                  </div>
                                  <div class="form_group mt-3 d-flex align-items-center">
                                    <label class="">Giảng viên : </label>
                                    <div class="mx-3"><p class="mb-0">'.$pros->getLectures()->title.'</p></div>
                                  </div>
                                  <div class="form_group mt-3 d-flex align-items-center">
                                    <label class="">Mã Môn Học : </label>
                                    <div class="mx-3">
                                        '.$select_subject.'
                                    </div>
                                  </div>
                                  <div><button class="btn btn-danger mt-2 mb-2">Update</button></div>
                                </form>
                            </td>
                        </tr>';
        }
        $html .= '</tbody>';
    @endphp
    @include('back_end.forms.form' , [
        'action' => 'ledat',
        'method' => 'post',
        'inputNames' => ['id_class' , 'capacity' , 'status'],
        'TitleNames' => ['Mã Lớp' , 'Sức chứa' , 'Trạng thái'],
        'inputTypes' => ['text' , 'text' , 'text' , 'file' , 'text' , 'text' , 'text'],
        'slot' => ' <label class="mb-2 mt-4" for="capacity">Lịch Học</label>
        <table class="table table-striped mt-3 form_class">
            <thead>
                <tr>
                    <th>Ngày</th>
                    <th>Thời gian</th>
                    <th>Môn học</th>
                    <th>Giảng viên</th>
                    <th>Mã Môn Học</th>
                    <th>Sửa</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
          '.$html.'
        </table>',
        'buttonText' => 'submit course'
])
@endsection
