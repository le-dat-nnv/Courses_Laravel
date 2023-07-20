<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\courses;
use App\Models\lectures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    public function getCategoriesCourse()
    {
        $data = categories::select('id', 'name')->get();
        $course = DB::table('tb_courses')->select('tb_courses.id', 'title', 'tb_lectures.image',
            'price', 'tb_courses.description', 'id_category', 'slug' , 'name')
            ->join('tb_lectures' , 'tb_lectures.id' , '=' , 'tb_courses.id_lecture')->get();
        return view('front_end.modules.categories', compact('data', 'course'));
    }

    public function getCategoriesCourseDetail($slug)
    {
        $courses_detail = DB::table('tb_courses')->select('tb_courses.id', 'title', 'tb_lectures.image',
            'price', 'tb_courses.description', 'id_category', 'slug' , 'name' ,
            'tb_courses.duration' ,'tb_lectures.image as lecture_image' , 'specialize' , 'curriculum' )
            ->join('tb_lectures' , 'tb_lectures.id' , '=' , 'tb_courses.id_lecture')
            ->where('slug', '=', $slug)->first();
        return view('front_end.modules.courses_detail', compact('courses_detail'));
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $course_show = courses::select('id', 'title', 'image', 'price', 'description', 'id_category', 'slug')->find($id);
        if (session()->has('cart')) {
            $cart = session()->get('cart');
        } else {
            $cart = [];
        }
        $cart[$id] = $course_show->toArray();
        $data = [
            1 => 'array',
            2 => 'array'
        ];
        $cart = session()->get('cart', []);
        $cart[$id] = $course_show->toArray();
        session()->put('cart', $cart);
        return view('front_end.modules.add_to_cart');
    }

    public function getLecture($slug) {
        $data = lectures::select('id' , 'name' , 'slug' , 'duration', 'image', 'specialize' , 'description')->where('slug' , '=' , $slug)
            ->first();
        return view('front_end.modules.lecture' , compact('data'));
    }
}
