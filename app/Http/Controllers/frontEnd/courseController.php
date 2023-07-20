<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\courses;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function getFrontCourse()
    {
        $data_course = courses::select('id', 'title', 'image', 'description', 'price', 'id_lecture', 'slug')->get();
        return view('front_end.modules.course', compact('data_course'));
    }

    public function getCoursesCourseDetail($slug)
    {
        $courses_detail = courses::select('tb_courses.id', 'title', 'tb_courses.description',
            'tb_courses.image', 'curriculum' , 'tb_lectures.name' , 'tb_lectures.image as lecture_image' , 'specialize')
            ->join('tb_lectures' , 'tb_courses.id_lecture' , '=' , 'tb_lectures.id')
            ->where('tb_courses.slug', '=', $slug)->first();
        return view('front_end.modules.courses_detail', compact('courses_detail'));
    }
}
