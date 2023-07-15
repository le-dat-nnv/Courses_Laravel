<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    public function getCategoriesCourse() {
        $data = categories::select('id' , 'name')->get();
        $course = courses::select('id' , 'title' , 'image' , 'price' , 'description' , 'id_category' , 'slug')->get();
        return view('front_end.modules.categories' , compact('data' , 'course'));
    }

    public function getCategoriesCourseDetail($slug) {
        $courses_detail = courses::where('slug' , '=' , $slug)->first();
        return view('front_end.modules.courses_detail', compact('courses_detail'));
    }

    public function addToCart(Request $request) {
        if($request->isMethod('post')) {
            $id = $request->id;
            $course_show = courses::select('id' , 'title' , 'image' , 'price' , 'description' , 'id_category' , 'slug')->find($id);
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
        return view('front_end.modules.add_to_cart');

    }
}
